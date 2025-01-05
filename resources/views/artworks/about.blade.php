@extends('layouts.gallery')

@section('title', 'About + FAQ')

@section('content')



    <div class="max-w-[800px] flex flex-col py-20 text-start p-2">
        
        <h1 class="text-4xl py-4 text-neutral-800 text-center font-medium">About</h1>
        <p class="text-center text-xl m-4">This is a gallery I built and designed to show my work from 2005 - present.</p>
        <img class="image w-[250px] mt-10 mx-auto m-2" src="/img/my-children.webp"/>

        <h2 class="text-2xl py-4 pt-24 text-neutral-800 font-medium">Art Usage</h2>
        <p>You're welcome to use my work for <span class="italic">personal, non-commercial purposes</span>. This includes profile photos
            pictures, forum posts, music videos, etc.</p>
        <p>You may repost my work freely onto social media platforms without limitation.</p>
        <p>Be kind, be respectful, keep it free.</p>
        <p>Don't use my work for profit.</p>

        <h2 class="text-2xl py-4 pt-16 text-neutral-800 font-medium">How To Credit</h2>
        <p>Credit with <span class='italic'>LiteralHat.com</span> or simply just <span class='italic'>LiteralHat.</span></p>

        <h2 class="text-2xl py-4 pt-16 text-neutral-800 font-medium">How To Support</h2>
        <p>Look, I do art for fun, I don't really want your money.</p>
        <p>You can purchase my music on Bandcamp if you'd like to help with hosting costs but it's not necessary.</p>
        <p>Please just enjoy my gallery and my work. Life is too short, let yourself be happy, be sad, tell your friends you love them.</p>
        <p>Thanks for visiting my site.</p>

        <h2 class="text-2xl py-4 pt-16 text-neutral-800 font-medium">Marla</h2>
        <img src="/img/marla.jpg" class="image rounded shadow w-96">

    </div>



@endsection
