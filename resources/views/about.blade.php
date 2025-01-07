@extends('layouts.gallery')

@section('title', 'About + FAQ')

@section('content')



    <div class="max-w-[800px] flex flex-col py-20 text-start p-2">
        
        <h1 class="text-4xl py-4 text-neutral-800 text-center font-medium">About</h1>
        <p class="text-center text-xl m-4">This is a website I coded and designed to sort and catalog my hobby works. </p>
        <img class="image w-[250px] mt-10 mx-auto m-2" src="/img/my-children.webp"/>

        <h2 class="text-2xl py-4 pt-24 text-neutral-800 font-medium">Art Usage</h2>
        <p>If you're looking to use my work for something you can just do so without any prior permission <span>as long as your use is non-commercial.</span> So this means, profile / banner photos, to print out and stick on your wall, desktop wallpapers, etc. are all fine. You can repost my work onto social media platforms if you desire - it is much appreciated. 
        <p>Be respectful and kind in your use. Not necessary, but you may credit with <span class='italic'>LiteralHat.com</span> or simply just <span class='italic'>LiteralHat.</span></p>

        <h2 class="text-2xl py-4 pt-16 text-neutral-800 font-medium">Supporting the Gallery</h2>
        <p>All the work I do here is for fun outside of my job. But if you would like to help with hosting costs, you can purchase my music on Bandcamp.</p>
        <p>Otherwise, simply sit back and relax, and enjoy this gallery.</p>

        <h2 class="text-2xl py-4 pt-16 text-neutral-800 font-medium">Marla</h2>
        <img src="/img/marla.jpg" class="image rounded shadow w-96">

    </div>



@endsection
