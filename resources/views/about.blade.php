@extends('layouts.base')

@section('title', 'About + FAQ')

@section('content')



<div class="max-w-[800px] flex flex-col py-20 text-start p-2">

    <h1 class="text-3xl py-4 text-neutral-800 text-center font-medium">About</h1>
    <p class="text-center">This is a gallery I built and designed to show my work from 2008 - present.</p>

    <h2 class="text-2xl py-4 pt-24 text-neutral-800 font-medium">Art Usage</h2>
    <p>As long as your use is <span class='italic'>non-commercial and personal</span>, you can use my work
        for your display pictures,
        forum posts, music videos, etc.</p>


    <h2 class="text-2xl py-4 pt-16 text-neutral-800 font-medium">How To Credit</h2>
    <p>You don't need to, but it is appreciated.</p>
    <p>Credit with <span class='italic'>LiteralHat.com</span> or simply just <span class='italic'>LiteralHat.</span></p>

    <h2 class="text-2xl py-4 pt-16 text-neutral-800 font-medium">How To Support</h2>
    <p>Pirate my music, print my stuff on paper, stick it on your wall, make your own patches, posters, for yourself, and for your friends.</p>
    <p>Eat something you like, get enough sleep, relax, take care of yourself.</p>
    <p>Thanks for visiting my site.</p>

    <h2 class="text-2xl py-4 pt-16 text-neutral-800 font-medium">Fanart?</h2>
    <p>Hold onto it for now, I'll make a place for you to submit it later.</p>

    <h2 class="text-2xl py-4 pt-16 text-neutral-800 font-medium">Socials</h2>
    <p>I rarely use the internet - if you see someone claiming they're me, it probably isn't.</p>
    <a href="https://www.youtube.com/@literalhat" target="_blank"
        class="underline text-neutral-500 hover:text-neutral-400 hover:no-underline w-min">YouTube</a>
    <a href="https://www.youtube.com/@literalhat" target="_blank"
        class="underline text-neutral-500 hover:text-neutral-400 hover:no-underline w-min">Bandcamp</a>

    <h2 class="text-2xl py-4 pt-16 text-neutral-800 font-medium">Marla</h2>
    <img src="/img/marla.jpg" class="image rounded shadow w-96">

</div>



@endsection