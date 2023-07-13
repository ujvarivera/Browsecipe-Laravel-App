
<article class="flex flex-col shadow my-4">
    <!-- Recipe Image -->
    <a href="#" class="hover:opacity-75">
        <img src={{ $recipe->getImage() }}>
    </a>
    <div class="bg-white flex flex-col justify-start p-6">
        @foreach ($recipe->categories as $category)
            <a href="#" class="text-green-700 text-sm font-bold uppercase pb-4">{{ $category->title }}</a>
        @endforeach
        <a href="#" class="text-3xl font-bold hover:text-green-700 pb-4">{{ $recipe->name }}</a>
        <p href="#" class="text-sm pb-3">
            By <a href="#" class="font-semibold hover:text-green-800">{{ $recipe->user->name }}</a>, Published on April 25th, 2020
        </p>
        <a href="#" class="pb-6">{{ $recipe->shortDescription() }}</a>
        <a href="#" class="uppercase text-green-800 hover:text-black">Continue Reading <i class="fas fa-arrow-right"></i></a>
    </div>
</article>