@extends('layouts.base')

@section('title', 'All Artworks')

@section('content')



<div class="max-w-[1200px] flex justify-center items-start flex-col py-20 px-2">


    <form class="w-full">

        <label for="default-search"
            class="mb-2 text-sm font-medium text-neutral-300 sr-only ">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 start-4 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-neutral-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="search" id="default-search"
                class="block w-full p-2 ps-12 text text-neutral-300 outline outline-2 outline-neutral-300 rounded-full bg-neutral-50  focus:text-neutral-800"
                placeholder="Search something cool...!" required />
            <button type="submit"
                class="text-white absolute end-0 bottom-0 border-2 border-neutral-800 bg-neutral-800 hover:bg-white hover:text-neutral-700 focus:bg-neutral-200 font-medium rounded-full text-sm px-4 py-2 ">Search</button>
        </div>
    </form>


    @for ($i = 2024; $i > 1969; $i--)

        <h2 class="text-3xl font-bold px-4 pt-16 pb-4">{{$i}}</h2>

        <div class="text-neutral-600 sm:grid-cols-3 grid-cols-2 md:grid-cols-6 w-full grid gap-2">

            @foreach ($allArtworks as $artwork)

                @if ($artwork->creation_date > $i && $artwork->creation_date < $i + 1)

                    <a href='{{url('/artwork/' . $artwork->slug)}}'
                        class='p-2 rounded shadow border-2 border-neutral-200  hover:shadow-md hover:text-neutral-900 '><img
                            loading='lazy' class="rounded cover w-full aspect-square data-twe-lazy-load-init lazy-image"
                            src="{{$artwork->file_url}}" />
                        <p class="p-1 pt-2 text-sm h-12 truncate ... text-start text-wrap">{{$artwork->title}}</p>
                    </a>
                @endif

            @endforeach

        </div>



    @endfor

</div>

@endsection