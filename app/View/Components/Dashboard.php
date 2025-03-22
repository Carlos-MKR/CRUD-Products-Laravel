<?php

namespace App\View\Components;

use Closure;
use App\Models\User;
use App\Models\Product;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class dashboard extends Component
{
    public $totalProducts;
    public $totalUsers;
    public $totalProductsIncomplete;
    public $totalProductsOutStock;
    public function __construct()
    {
        $this->totalProducts = Product::count();
        $this->totalUsers = User::count();
        $this->totalProductsIncomplete = Product::where(function ($query) {
            $query->whereNull('name')->orWhere('name', '')->orWhereNull('description')->orWhere('description', '')->orWhereNull('price')->orWhere('price', 0)->orWhereNull('stock')->orWhere('stock', 0)->orWhereNull('image')->orWhere('image', '');
        })->count();
        $this->totalProductsOutStock = Product::where('stock', 0)->count();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard');
    }
}
