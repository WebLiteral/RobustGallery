@extends('layouts.gallery')

@section('title', 'Musics')

@section('content')



    <div class=" w-full  justify-center  py-20 px-2">

        <h1 class='text-3xl font-bold'>Music</h1>


        <div class="bg-neutral-200 rounded border flex flex-col border-neutral-400 p-2">
            <div class="">

                <h2 class="text-xl font-bold px-4">Now Playing: <p id='songTitle'></p></h2>
            </div>
            <div class="flex items-center justify-center">

                <p class='text-nowrap px-2' id='song-duration'>--:--</p>
                
                
                <div class=" bg-neutral-900 rounded w-[1200px] h-1" >
                    <div class=" bg-blue-500 rounded w-1 h-1 z-10" id='progressBar'></div>

                </div>
                <p class='text-nowrap px-2' id='song-length'>--:--</p>
            </div>
        </div>

        <ul>
        @foreach ($allMusic as $music)
            <li>    
                <div id='song-{{$music->id}}' onclick='playSong("{{$music->id}}")' data-id='{{$music->id}}' data-file='{{$music->slug}}' class='bg-neutral-200 border border-neutral-400 p-4 individual-song'>
                    {{ $music->title }}
                </div>
            </li>
        @endforeach
        </ul>
    </div>




    <script>
        const songTitle = document.getElementById('songTitle');
        const audio = new Audio();
        const songDuration = document.getElementById('songDuration');
        const songLength = document.getElementById('songLength');

        let userData = [
            currentSong => null,
            currentTime => 0,
        ]
    
       

        const playSong = (song) => {
            userData.currentSong = song;
            console.log(userData.currentSong);

            const musicId = document.getElementById(`song-${song}`);
           

            songTitle.textContent = musicId.textContent;

            audio.src = `https://reloaded.literalhat.com/music/${musicId.dataset.file}.mp3`;
            console.log(audio.src);
            audio.play();
        }
        



        </script>







@endsection


