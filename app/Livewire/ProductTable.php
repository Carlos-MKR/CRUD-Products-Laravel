<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductTable extends Component
{
    use WithPagination;

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage(); // Reiniciar paginación al buscar
    }
    public function render()
    {
        $products = Product::where('name', 'like', '%' . $this->search . '%')
        ->orWhere('price', 'like', '%' . $this->search . '%')
        ->orderBy('created_at', 'desc')
        ->paginate(5);

        return view('livewire.product-table', compact('products'));
    }
}
