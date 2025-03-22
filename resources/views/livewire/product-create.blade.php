<div>
    <form wire:submit.prevent="createProduct">
        <div class="mt-4">
            <x-label for="name"  value="{{ __('Nombre') }}"/>
            <x-input wire:model="name" id="name" type="text" class="block w-full" placeholder="Ingrese el nombre del producto"/>
            <x-input-error for="name" />
        </div>

        <div class="mt-4">
            <x-label for="price"  value="{{ __('Precio') }}"/>
            <x-input wire:model="price" id="price" type="number" step=".01" class="block w-full" placeholder="Ingrese el precio del producto"/>
            <x-input-error for="price" />
        </div>

        <div class="mt-4">
            <x-label for="stock"  value="{{ __('Stock') }}"/>
            <x-input wire:model="stock" id="stock" type="number" class="block w-full" placeholder="Ingrese la cantidad de stock del producto"/>
            <x-input-error for="stock" />
        </div>

        <div class="mt-4">
            <x-label for="description"  value="{{ __('Descripción') }}"/>
            <textarea wire:model="description" id="description" class="block w-full mt-1 border-gray-700 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-900 dark:text-gray-300 " rows="5" placeholder="Ingrese la descripción del producto"></textarea>
            <x-input-error for="description" />
        </div>

        <div class="mt-4">
            <x-label for="image"  value="{{ __('Imagen') }}"/>
            <x-input wire:model="image" id="image" type="file" class="block w-full" />
            <x-input-error for="image" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-button type="submit">
                {{ __('Guardar') }}
            </x-button>
        </div>
    </form>
</div>

