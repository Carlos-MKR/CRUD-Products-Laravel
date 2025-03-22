<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Productos
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end mb-5">
                <a href="{{ route('products.create') }}">
                    <x-button type="button" class="bg-green-500 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded ">
                        <span class="text-2xl">+</span>
                    </x-button>
                </a>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <livewire:product-table />
            </div>
        </div>
    </div>
</x-app-layout>
