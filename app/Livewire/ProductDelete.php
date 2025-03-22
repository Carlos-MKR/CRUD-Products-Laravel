<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class ProductDelete extends Component
{
    public $product;

    public function mount($product)
    {
        $this->product = $product;
    }

    public function confirmProductDeletion(){

        // Eliminar la imagen si existe
        if ($this->product->image) {
            Storage::disk('public')->delete($this->product->image);
        }

        $this->product->delete();

        toast()->success('Producto eliminado correctamente')->push();

        return redirect()->route('products.index');

    }
    public function render()
    {
        return view('livewire.product-delete');
    }
}
