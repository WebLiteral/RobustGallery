<!DOCTYPE html>
<html lang="en" class="bg-white font-poppins">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LiteralHat | @yield('title', 'LiteralHat.com')</title>
    @vite(['resources/css/app.css', 'resources/js/randomsong.js'])
</head>

<div class="bg-stripe-navy h-full w-full flex flex-col items-center ">
    @auth
        <div class="flex  justify-between w-full bg-amber-500 font-medium text-center p-2 shadow-md">

            <span class="">
                ¡Bienvenido, <span class="font-bold">{{Auth::user()->name}}!</span></span>
            <ul class="flex">
                <a class="nowrap text-neutral-800 hover:text-amber-100" href="/dashboard">[ Dashboard ]</a>
                <form method="POST" action="{{route('logout')}}">
                    @csrf
                    <button class="nowrap text-neutral-800 hover:text-amber-100">[ Logout ]</button>
                </form>
            </ul>
        </div>
    @endauth

    <a href="/"><img src="/img/logo-2.png" class="max-h-24 pt-1 image w-full" /></a>

    <div class="flex max-w-[800px] justify-evenly w-full text-neutral-600 ">
        <a class="hover:text-neutral-900" href="/">Home</a>
        <a class="hover:text-neutral-900" href="{{ route('index') }}">Gallery</a>
        <a class="hover:text-neutral-900" href="{{route('random')}}">Random</a>
        <a class="hover:text-neutral-900" href="/about">About</a>
    </div>

    @yield('content')

    <div class="pt-24 pb-4 text-center">
        <p class="text-neutral-700">LiteralHat &copy; 2024</p>
        <a href="https://www.youtube.com/watch?v=xvFZjo5PgG0" class='text-neutral-200 text-sm' target="_blank">Easter
            Egg</a>

    </div>


</div>



</html>