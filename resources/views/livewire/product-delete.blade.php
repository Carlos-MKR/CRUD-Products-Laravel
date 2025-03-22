<div>
    <div class="p-6">
        <p class="text-lg text-gray-600 dark:text-gray-400 mb-5">¿Estás seguro de que deseas eliminar el producto "{{ $product->name }}"?</p>
        <div class="flex justify-between">
            <div class="flex items-start">
                <div class="mr-4">
                    @if($product->image)
                        <img src="{{ Storage::url($product->image) }}" alt="Imagen del producto" class="w-32 h-32 object-cover rounded">
                    @else
                        <div class="w-32 h-32 bg-gray-300 dark:bg-gray-700 rounded"></div>
                    @endif
                </div>
                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 leading-tight">
                        {{ $product->name }}
                    </h2>
                    <p class="mt-2 text-lg text-gray-600 dark:text-gray-400">
                        {{ $product->description }}
                    </p>
                    <p class="mt-2 text-lg text-gray-600 dark:text-gray-400">
                        Precio: $ {{ number_format($product->price, 2) }}
                    </p>
                    <p class="mt-2 text-lg text-gray-600 dark:text-gray-400">
                        Stock: {{ $product->stock }}
                    </p>
                </div>
            </div>
        </div>
        <div class="flex justify-end">
            <a href="{{ route('products.index') }}">
                <x-secondary-button class="mr-2">
                    {{ __('Cancelar') }}
                </x-secondary-button>
            </a>
            <x-danger-button wire:click="confirmProductDeletion" wire:loading.attr="disabled">
                {{ __('Confirmar') }}
            </x-danger-button>
        </div>
</div>
