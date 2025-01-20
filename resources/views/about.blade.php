@extends('layouts.gallery')

@section('title', 'About + FAQ')

@section('content')



    <div class="max-w-[800px] flex flex-col py-20 text-start p-2">

        <h1 class="text-4xl py-4 text-neutral-800 text-center font-medium">About</h1>
        <p class="text-center text-lg
         m-4">This is a website I coded and designed to host my hobby works from 2005 - present.</p>
        <img class="image w-[250px] mt-10 mx-auto m-2" src="/img/my-children.webp" />
        
        <h2 class="text-2xl py-4 pt-24 text-neutral-800 font-medium">Information</h2>
        <p>Please note the following things at this time:</p>
        <p class="pl-4 pt-4">1. The artworks here are intended to be archival, meaning it is a full history of all my work. Please be respectful and refrain from criticizing past works that may reflect a different mindset or phase of my life.</p>
        <p class="pl-4">2. This gallery will always be considered incomplete, as I continuously upload work, and find old art to archive. If you're looking for something old, I just haven't had the time to upload it yet.</p>
        <p class="pl-4">3. I do not maintain a singular 'artstyle' - please do not expect such from me, because I own them all.</p>
 


        <h2 class="text-2xl py-4 pt-24 text-neutral-800 font-medium">Art Usage</h2>
        <p><span class='italic'>As long as your use is non-commercial and personal,</span> you can use my work for profile / banner
            photos, to print out and stick on your wall, desktop wallpapers, etc.</p>
        <p> You may repost my work onto social media platforms without limitation.</p>
        <p>Be respectful and kind in your use. </p><p>No need to credit, but you may with <span
                class='italic'>LiteralHat.com</span> or simply just <span class='italic'>LiteralHat.</span></p>


                       
        <h2 class="text-2xl py-4 pt-24 text-neutral-800 font-medium">Support</h2>
        <p>Look, I do art for fun, I don't really want your money.</p>
        <p>But if you would like to help with hosting costs, you can buy my music on Bandcamp.</p>
        <p>Maybe in the future I will make a Patreon, but it feels wrong to put my content behind a paywall.</p>
        <p>Life is short, hug your friends, tell your pets you love them, sit back and just enjoy the gallery.</p>


        <h2 class="text-2xl py-4 pt-16 text-neutral-800 font-medium">Marla</h2>
        <img src="/img/marla.jpg" class="image rounded shadow w-96">

    </div>



@endsection
