<div class="flex flex-col items-center justify-center pt-20 bg-orange-200">
    <h1 class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">{{ $banerTitle }}</h1>
    <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">{{ $bannerDescription }}</p>
    @if($showButton)
    <a href="{{ route('recurso.create')}}" class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-orange-500 hover:bg-orange-500 focus:ring-4 focus:outline-none focus:ring-orange-500 rounded-lg dark:bg-orange-500 dark:focus:ring-orange-500 transition-transform duration-300 transform hover:scale-110 mb-8">
        {{ $buttonText }}
    </a>
    @endif
</div>
