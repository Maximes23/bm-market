<x-admin-layout>
    <div class="p-8">
        <h1 class="text-4xl font-bold text-gray-800 dark:text-white">Tableau de Bord</h1>
        <p class="mt-2 text-lg text-gray-600 dark:text-gray-400">Bienvenue, {{ Auth::user()->name }} !</p>

        <div class="mt-8 p-6 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow-sm">
            <h2 class="text-2xl font-semibold text-blue-600 dark:text-blue-400">Statistiques Rapides</h2>
            <p class="mt-4">Ici, nous afficherons bientôt les statistiques de ventes.</p>
            <button class="mt-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Voir les rapports
            </button>
        </div>
    </div>
</x-admin-layout>