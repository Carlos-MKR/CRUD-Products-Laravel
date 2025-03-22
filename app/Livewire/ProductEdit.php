<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Usernotnull\Toast\Concerns\WireToast;

class ProductEdit extends Component
{
    use WireToast, WithFileUploads;

    public $product;
    public $name, $price, $stock, $image, $description;
    public $imagePath;
    

    public function mount(Product $product)
    {
        $this->product = $product;
        $this->name = $product->name;
        $this->price = $product->price;
        $this->stock = $product->stock;
        $this->description = $product->description;

        // Asignar la URL de la imagen actual si existe
        if ($product->image) {
            $this->imagePath = asset('storage/' . $product->image);
        }
    }

    public function updateProduct()
    {
        $this->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Verificar si se ha cambiado la imagen
        if ($this->image) {
            // Si el producto ya tiene una imagen, eliminar la imagen anterior
            if ($this->product->image) {
                // Elimina el archivo anterior del almacenamiento público
                Storage::disk('public')->delete($this->product->image);
            }

            // Almacenar la nueva imagen
            $imagePath = $this->image->store('products', 'public');
            $this->product->image = $imagePath;
        }

        // Actualizar los datos del producto
        $this->product->update([
            'name' => $this->name,
            'price' => $this->price,
            'stock' => $this->stock,
            'description' => $this->description,
        ]);

        toast()->success('Producto actualizado correctamente')->push();

    }

    public function render()
    {
        return view('livewire.product-edit');
    }
}
