
<article class="flex flex-col shadow my-4">
    <!-- Recipe Image -->
    <a href={{ route('recipes.show', $recipe) }} class="hover:opacity-75">
        <img src={{ $recipe->getImage() }}>
    </a>
    <div class="bg-white flex flex-col justify-start p-6">
        <div class="flex flex-col md:grid md:grid-cols-3 gap-2 justify-center pb-4 mx-auto">
            @foreach ($recipe->categories as $category)
                <a href="#" class="mx-1 px-1 text-green-700 text-sm font-bold uppercase">{{ $category->title }}</a>
            @endforeach
        </div>
        <a href={{ route('recipes.show', $recipe) }} class="text-3xl font-bold hover:text-green-700 pb-4">{{ $recipe->name }}</a>
        <p href="#" class="text-sm pb-3">
            By <a href="#" class="font-semibold hover:text-green-800">{{ $recipe->user->name }}</a>, Published on {{ $recipe->getFormattedDate() }}
        </p>
        <a href={{ route('recipes.show', $recipe) }} class="pb-6">{{ $recipe->shortDescription() }}</a>
        <a href={{ route('recipes.show', $recipe) }} class="uppercase text-green-800 hover:text-black">Continue Reading <i class="fas fa-arrow-right"></i></a>
    </div>
</article>