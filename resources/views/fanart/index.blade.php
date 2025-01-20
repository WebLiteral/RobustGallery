@extends('layouts.gallery')

@section('title', 'All Artworks')

@section('content')



    <div class=" w-full  justify-center  py-20 px-2">




        <div class="flex flex-col items-center">
            <h1 class='text-3xl font-bold'>Fanart</h1>
            <a href='/fanart/submit' class='bg-neutral-900 w-min text-white p-2 text-nowrap rounded-full mt-6 px-4'>Submit Your Own?</a>

            <form class='py-8' method='GET' action='/fanart'>
                <button class='border-2 w-[80px] text-neutral-400 p-1 rounded-full px-2 hover:text-white hover:bg-neutral-900 hover:border-neutral-900' type='submit' name='year' value='2020'>2020</button>
                <button class='border-2 w-[80px] text-neutral-400 p-1 rounded-full px-2 hover:text-white hover:bg-neutral-900 hover:border-neutral-900' type='submit' name='year' value='2021'>2021</button>
                <button class='border-2 w-[80px] text-neutral-400 p-1 rounded-full px-2 hover:text-white hover:bg-neutral-900 hover:border-neutral-900' type='submit' name='year' value='2022'>2022</button>
                <button class='border-2 w-[80px] text-neutral-400 p-1 rounded-full px-2 hover:text-white hover:bg-neutral-900 hover:border-neutral-900' type='submit' name='year' value='2023'>2023</button>
                <button class='border-2 w-[80px] text-neutral-400 p-1 rounded-full px-2 hover:text-white hover:bg-neutral-900 hover:border-neutral-900' type='submit' name='year' value='2024'>2024</button>
            </form>
            

        </div>
        
       

        <div class='flex flex-wrap justify-center gap-1'>

            @foreach ($allFanart as $fanart)
                <div class="w-[100px]">
                    <a href='{{url('/fanart/' . $fanart->slug)}}'>
                        <img loading='lazy' class='rounded aspect-square object-cover w-full'
                            src="https://reloaded.literalhat.com/artwork/literalhat-placeholder.webp">

                    </a>
                </div>
            @endforeach
        </div>




    </div>

@endsection
