@extends('layouts.base')

@section('title', $artwork->title)

@section('content')



<div class="max-w-[800px] flex flex-col p-2 py-20">

    <h1 class="text-2xl p-2 text-neutral-800 font-medium">{{$artwork->title}}</h1>

    <img class='image shadow rounded w-[800px]' src="https://reloaded.literalhat.com/artwork/{{$artwork->slug}}.webp" />

    <div class="p-2">
        <p class="text-neutral-700">{!! nl2br(e($artwork->description)) !!}</p>
        <span class="italic text-neutral-400 text-sm">{{ \Carbon\Carbon::parse($artwork->creation_date)->format('j F Y') }}</span>
    </div>

    <div class="flex justify-between pt-16 p-2 items-center">
        <a href="{{ $prevArtwork ? url('/artwork/' . $prevArtwork) : '#' }}"
            class="{{ !$prevArtwork ? 'navbuttondisabled' : 'navbutton' }}">
            < Prev </a>

                <a href="/artwork/index" class="text-neutral-400">Artwork {{$position}} of {{$artworkCount}}</a>

                <a href="{{ $nextArtwork ? url('/artwork/' . $nextArtwork) : '#' }}"
                    class="{{!$nextArtwork ? 'navbuttondisabled' : 'navbutton' }}">
                    Next >
                </a>
    </div>


</div>



@endsection