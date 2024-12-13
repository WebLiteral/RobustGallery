<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Artworks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex pb-4 items-center">
                    <h2 class="font-bold p-4 text-2xl">All Artworks</h2>
                    <a href={{route('admin.artworks.create')}} class="navbutton m-4">Upload New</a>
                    </div>
                    <div class="text-neutral-600 sm:grid-cols-3 grid-cols-2 md:grid-cols-6 w-full grid gap-2">

                        @foreach ($allArtworks as $artwork)
                            <a href='{{url('/dashboard/artworks/edit/' . $artwork->slug)}}'
                                class='p-2 rounded shadow border-2 border-neutral-200  hover:shadow-md hover:text-neutral-900 '><img
                                    loading='lazy'
                                    class="gallerytileimg"
                                    src="https://leviathan.literalhat.com/artwork/{{$artwork->slug}}.webp" />
                                <p class="p-1 font-bold pt-2 text-sm truncate ... text-start text-wrap">{{$artwork->title}}</p>
                                <p class="p-1 text-neutral-500 text-sm truncate ... text-start text-wrap">{{$artwork->creation_date}}</p>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>