<x-app-layout>
    <div class="container max-w-4xl mx-auto py-6">

        {{ $recipes->links() }}

        @forelse ($recipes as $recipe)
            <x-recipe-item :recipe="$recipe"/>
        @empty
            <p>No Recipes</p>
        @endforelse
        
        {{ $recipes->links() }}

        <!-- Pagination -->
        <!--
        <div class="flex items-center py-8">
            <a href="#" class="h-10 w-10 bg-green-800 hover:bg-green-600 font-semibold text-white text-sm flex items-center justify-center">1</a>
            <a href="#" class="h-10 w-10 font-semibold text-gray-800 hover:bg-green-600 hover:text-white text-sm flex items-center justify-center">2</a>
            <a href="#" class="h-10 w-10 font-semibold text-gray-800 hover:text-gray-900 text-sm flex items-center justify-center ml-3">Next <i class="fas fa-arrow-right ml-2"></i></a>
        </div>
        -->

    </div>
</x-app-layout>