@extends('layouts.gallery')

@section('title', 'All Artworks')

@section('content')



    <div class="max-w-[800px] w-full  justify-center flex flex-col items-center py-20 px-2">


        @if (session('success'))
        <h1 class='font-bold text-3xl'>Fanart Successfully Submitted</h1>
        <p class='p-10'>Your fanart will be approved soon. Check back later?</p>
        @else
        <h1 class='font-bold text-3xl'>Something Went Wrong.</h1>
        <p class='p-10'>Try again later?</p>
        @endif
        <a href='/' class='bg-neutral-800 p-2 px-4 rounded-full text-white'> Go Home</a>

    </div>




    <script>
        function previewImage(event) {
            const preview = document.getElementById('preview');
            const artworkFile = event.target.files[0];
            const datefield = document.getElementById('creation_date');
            const slug = document.getElementById('slug');
            const title = document.getElementById('title');

            if (artworkFile) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(artworkFile);

                let fileName = artworkFile.name;
                let filedate = fileName.substr(0, 10);
                creation_date.value = filedate;

                let slugName = fileName.substring(10).trim();
                slugName = slugName.substring(0, slugName.lastIndexOf('.'));
                title.value = slugName;
                slugName = slugName.toLowerCase().replace(/[^a-zA-Z0-9 ]/g, '').replace(' ', '-');
                slug.value = slugName;
            }


        }
    </script>




@endsection
