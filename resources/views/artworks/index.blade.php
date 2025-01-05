@extends('layouts.gallery')

@section('title', 'All Artworks')

@section('content')



    <div class="max-w-[1200px] w-full flex justify-center items-start flex-col py-20 px-2">




        <form class="w-full">


            <label for="default-search" class="mb-2 text-sm font-medium text-neutral-300 sr-only ">Search</label>


            <div class="relative">
                <div class="absolute inset-y-0 start-4 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-neutral-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <form method="GET" action="{{ route('index') }}">
                    <input type="text" name="query" id="default-search" value="{{ request('query') }}"
                        class="block w-full p-2 ps-12 text text-neutral-300 outline outline-2 outline-neutral-300 rounded-full bg-neutral-50  focus:text-neutral-800"
                        placeholder="Search something cool...!" />
                    <button type="submit"
                        class="text-white absolute end-0 bottom-0 border-2 border-neutral-800 bg-neutral-800 hover:bg-white hover:text-neutral-700 focus:bg-neutral-200 font-medium rounded-full text-sm px-4 py-2 ">Search</button>
                </form>
            </div>
        </form>



        @if ($query == 'sortbylatest')
            <h1 class="text-2xl font-bold pt-8 pb-6">Sorting works by upload date.</h1>
        @elseif ($query)
            <h1 class="text-2xl font-bold pt-8 pb-6">Search Results for "{{ $query }}"</h1>
        @else
            <form class="pt-10" method="GET" action="{{ route('index') }}">
                <button type="submit" name="query" id="default-search" value="sortbylatest"
                    class="underline italic text-neutral-400">Want to sort by recently uploaded? Click
                    here.</button>
            </form>
        @endif

        @if ($query == 'sortbylatest')

            <div class="text-neutral-600 sm:grid-cols-3 grid-cols-2 md:grid-cols-6 w-full grid gap-2">
                @foreach ($allArtworks as $artwork)
                    <a href='{{ url('/gallery/' . $artwork->slug) }}'
                        class='p-2 rounded shadow border-2 border-neutral-200 hover:shadow-md hover:text-neutral-900'>
                        <img loading='lazy' class="gallerytileimg"
                            src="https://leviathan.literalhat.com/artwork/literalhat-{{ $artwork->slug }}.webp" />
                        <p class="p-1 pt-2 text-sm h-12 truncate ... text-start text-wrap">
                            {{ $artwork->title }}
                        </p>
                    </a>
                @endforeach
            </div>
        @else
            @for ($i = 2024; $i > 2007; $i--)
                @php
                    $yearArtworks = $allArtworks->filter(function ($artwork) use ($i) {
                        return $artwork->creation_date > $i && $artwork->creation_date < $i + 1;
                    });
                @endphp

                @if ($yearArtworks->isNotEmpty())
                    @if (!$query)
                        <h2 class="text-3xl font-bold px-4 pt-16 pb-4">{{ $i }}</h2>
                    @endif


                    <div class="text-neutral-600 sm:grid-cols-3 grid-cols-2 md:grid-cols-6 w-full grid gap-2">
                        @foreach ($yearArtworks as $artwork)
                            <a href='{{ url('/gallery/' . $artwork->slug) }}'
                                class='p-2 rounded shadow border-2 border-neutral-200 hover:shadow-md hover:text-neutral-900'>
                                <img loading='lazy' class="gallerytileimg"
                                    src="https://leviathan.literalhat.com/artwork/literalhat-{{ $artwork->slug }}.webp" />
                                <p class="p-1 pt-2 text-sm h-12 truncate ... text-start text-wrap">
                                    {{ $artwork->title }}
                                </p>
                            </a>
                        @endforeach
                    </div>
                @endif
            @endfor

        @endif








    </div>

@endsection
