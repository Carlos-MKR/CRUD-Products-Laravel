<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
           <a href="{{ route('products.index') }}">< {{ $product->name }}</a> 
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="flex justify-center">
                            @if ($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="max-w-full h-auto">
                            @else
                                <div class="text-gray-600 dark:text-gray-400">No hay imagen disponible</div>
                            @endif
                        </div>
                        <div class="flex flex-col justify-center">
                            <h2 class="text-3xl font-semibold text-gray-800 dark:text-gray-200 leading-tight">
                                {{ $product->name }}
                            </h2>
                            <p class="mt-2 text-lg text-gray-600 dark:text-gray-400">
                                {{ $product->description }}
                            </p>
                            <div class="mt-4">
                                <p class="text-lg text-gray-600 dark:text-gray-400">
                                    Precio: $ {{ number_format($product->price, 2) }}
                                </p>
                                <p class="text-lg text-gray-600 dark:text-gray-400">
                                    Stock: {{ $product->stock }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

