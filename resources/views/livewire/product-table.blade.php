<div>

    <div class="p-6">
        
        <div class="flex justify-end mb-5">
            <x-input type="text" wire:model.live="search" placeholder="Buscar..." class="block w-full rounded-md" />
        </div>
    
        <table class="min-w-full bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-lg shadow-md overflow-hidden">
            <thead class="bg-gray-100 dark:bg-gray-700">
                <tr>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700 dark:text-gray-300">Nombre</th>
                    <th class="px-6 py-3 text-center font-semibold text-gray-700 dark:text-gray-300">Precio</th>
                    <th class="px-6 py-3 text-center font-semibold text-gray-700 dark:text-gray-300">Stock</th>
                    <th class="px-6 py-3 text-center font-semibold text-gray-700 dark:text-gray-300">Creado</th>
                    <th class="px-6 py-3 text-center font-semibold text-gray-700 dark:text-gray-300">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="border-b dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700">
                        <td class="px-6 py-3 text-gray-900 dark:text-gray-400">{{ $product->name }}</td>
                        <td class="px-6 py-3 text-center text-gray-900 dark:text-gray-400">$ {{ number_format($product->price, 2) }}</td>
                        <td class="px-6 py-3 text-center text-gray-900 dark:text-gray-400">{{ $product->stock }}</td>
                        <td class="px-6 py-3 text-center text-gray-900 dark:text-gray-400">{{ \Carbon\Carbon::parse($product->created_at)->format('d-M-Y') }}</td>
                        <td class="px-6 py-3 flex justify-center gap-2">
                            <a href="{{ route('products.show', $product) }}">
                                <x-button>Ver</x-button>
                            </a>
                            <a href="{{ route('products.edit', $product) }}">
                                <x-secondary-button>Editar</x-secondary-button>
                            </a>
                            <a href="{{ route('products.delete', $product) }}">
                                <x-danger-button>Eliminar</x-danger-button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    
        <div class="mt-4">
            {{ $products->links() }} <!-- Paginación de Livewire -->
        </div>
    </div>
    
</div>
