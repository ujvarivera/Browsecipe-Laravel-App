
<article class="flex flex-col shadow my-4">
    <!-- Recipe Image -->
    <a href={{ route('recipes.show', $recipe) }} class="hover:opacity-75">
        <img src={{ $recipe->getImage() }}>
    </a>
    <div class="bg-white flex flex-col justify-start p-6">
        @foreach ($recipe->categories as $category)
            <a href="#" class="text-green-700 text-sm font-bold uppercase pb-4">{{ $category->title }}</a>
        @endforeach
        <a href={{ route('recipes.show', $recipe) }} class="text-3xl font-bold hover:text-green-700 pb-4">{{ $recipe->name }}</a>
        <p href="#" class="text-sm pb-3">
            By <a href="#" class="font-semibold hover:text-green-800">{{ $recipe->user->name }}</a>, Published on {{ $recipe->getFormattedDate() }}
        </p>
        <a href={{ route('recipes.show', $recipe) }} class="pb-6">{{ $recipe->shortDescription() }}</a>
        <a href={{ route('recipes.show', $recipe) }} class="uppercase text-green-800 hover:text-black">Continue Reading <i class="fas fa-arrow-right"></i></a>
    </div>
</article>