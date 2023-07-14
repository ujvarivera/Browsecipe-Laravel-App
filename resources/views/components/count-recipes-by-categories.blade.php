<aside class="w-full md:w-1/3 flex flex-col items-center px-3">
    <div class="w-full bg-white shadow flex flex-col my-4 p-6">
        <h3 class="text-xl text-green-700 font-semibold mb-3">{{__('Top 5 Categories') }}</h3>
        @foreach($categories as $category)
            <a href={{ route('getRecipesByCategory', $category) }}
               class="text-semibold block py-2 px-3 rounded hover:text-green-600">
                {{$category->title}} ({{$category->total}})
            </a>
        @endforeach
    </div>
</aside>