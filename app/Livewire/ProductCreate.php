<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use Usernotnull\Toast\Concerns\WireToast;

class ProductCreate extends Component
{
    use WithFileUploads, WireToast;

    public $name;
    public $description;
    public $price;
    public $stock;
    public $image;
    public $imagePath;

    public function createProduct(){
        $this->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($this->image) {
            // Almacenar la imagen
            $this->imagePath = $this->image->store('products', 'public');
        }

        // Crear el producto
        Product::create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'stock' => $this->stock,
            'image' => $this->imagePath,
        ]);

        // Mostrar el toast
        toast()->success('El producto se ha creado correctamente')->push();

        // Redirigir al listado de productos
        return redirect()->route('products.index');
    }
    public function render()
    {
        return view('livewire.product-create');
    }
}
