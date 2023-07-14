<x-app-layout>

    <section class="w-full md:w-2/3 flex flex-col items-center px-3">
        <x-count-recipes-by-categories />

        <article class="flex flex-col shadow my-4">
            <!-- Article Image -->
            <img src={{ $recipe->getImage() }}>

            <div class="bg-white flex flex-col justify-start p-6">
                <div class="flex flex-col md:grid md:grid-cols-3 gap-2 justify-center pb-4 mx-auto">
                    @foreach ($recipe->categories as $category)
                        <a href={{ route('getRecipesByCategory', $category) }} class="text-green-700 text-sm font-bold uppercase pb-4">{{ $category->title }}</a>
                    @endforeach   
                </div>             
                <p class="text-3xl font-bold text-green-700 pb-4">{{ $recipe->name }}</p>
                <p href="#" class="text-sm pb-3">
                    By <a href="#" class="font-semibold hover:text-green-800">{{ $recipe->user->name }}</a>, Published on {{ $recipe->getFormattedDate() }}
                </p>
                <p class="pb-6">{!! $recipe->description !!}</p>

            </div>
        </article>

        <x-user-card :user="$recipe->user"/>

        <div class="w-full flex pt-6">
            <div class="w-1/2">
                @if ($prev_recipe)
                    <a href={{ route('recipes.show', $prev_recipe) }} class="w-full block bg-white shadow hover:shadow-md text-left p-6">
                        <p class="text-lg text-green-800 font-bold flex items-center"><i class="fas fa-arrow-left pr-1"></i> Previous</p>
                        <p class="pt-2">{{ \Illuminate\Support\Str::words($prev_recipe->name, 5) }}</p>
                    </a>
                @endif
            </div>
            <div class="w-1/2">
                @if ($next_recipe)
                    <a href={{ route('recipes.show', $next_recipe) }} class="w-full block bg-white shadow hover:shadow-md text-right p-6">
                        <p class="text-lg text-green-800 font-bold flex items-center justify-end">Next <i class="fas fa-arrow-right pl-1"></i></p>
                        <p class="pt-2">{{ \Illuminate\Support\Str::words($next_recipe->name, 5)}}</p>
                    </a>
                @endif
            </div>
        </div>


    </section>

</x-app-layout>