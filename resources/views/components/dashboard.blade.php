<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 m-6">
    <div class="bg-white dark:bg-gradient-to-br dark:from-gray-900 dark:to-gray-800 shadow-lg rounded-xl p-6 transition-transform transform hover:scale-105">
        <h4 class="text-lg font-semibold text-gray-700 dark:text-gray-200 flex items-center gap-2">
            📦 Productos
        </h4>
        <p class="text-5xl font-bold text-indigo-600 dark:text-indigo-400 mt-2">{{ $totalProducts }}</p>
    </div>

    <div class="bg-white dark:bg-gradient-to-br dark:from-gray-900 dark:to-gray-800 shadow-lg rounded-xl p-6 transition-transform transform hover:scale-105">
        <h4 class="text-lg font-semibold text-gray-700 dark:text-gray-200 flex items-center gap-2">
            👤 Usuarios
        </h4>
        <p class="text-5xl font-bold text-green-600 dark:text-green-400 mt-2">{{ $totalUsers }}</p>
    </div>

    <div class="bg-white dark:bg-gradient-to-br dark:from-gray-900 dark:to-gray-800 shadow-lg rounded-xl p-6 transition-transform transform hover:scale-105">
        <h4 class="text-lg font-semibold text-gray-700 dark:text-gray-200 flex items-center gap-2">
            ⚠️ Productos con info incompleta
        </h4>
        <p class="text-5xl font-bold text-yellow-600 dark:text-yellow-400 mt-2">{{ $totalProductsIncomplete }}</p>
    </div>

    <div class="bg-white dark:bg-gradient-to-br dark:from-gray-900 dark:to-gray-800 shadow-lg rounded-xl p-6 transition-transform transform hover:scale-105">
        <h4 class="text-lg font-semibold text-gray-700 dark:text-gray-200 flex items-center gap-2">
            ❌ Sin stock
        </h4>
        <p class="text-5xl font-bold text-red-600 dark:text-red-400 mt-2">{{ $totalProductsOutStock }}</p>
    </div>
</div>
