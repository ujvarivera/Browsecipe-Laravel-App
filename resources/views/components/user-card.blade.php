<div class="w-full flex flex-col text-center md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6">
    <div class="w-full md:w-1/5 flex justify-center md:justify-start pb-4">
        <!-- <img src="https://source.unsplash.com/collection/1346951/150x150?sig=1" class="rounded-full shadow h-32 w-32"> -->
    </div>
    <div class="flex-1 flex flex-col justify-center md:justify-start">
        <p class="font-semibold text-2xl">{{ $user->name }}</p>
        <p class="pt-2">E-mail: {{ $user->email }}</p>
        <div class="flex items-center justify-center md:justify-start text-2xl no-underline text-green-800 pt-4">
            <a class="" href="#">
                <i class="fab fa-facebook"></i>
            </a>
            <a class="pl-4" href="#">
                <i class="fab fa-instagram"></i>
            </a>
            <a class="pl-4" href="#">
                <i class="fab fa-twitter"></i>
            </a>
            <a class="pl-4" href="#">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>
    </div>
</div>