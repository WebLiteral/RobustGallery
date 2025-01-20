@extends('layouts.gallery')

@section('title', 'All Artworks')

@section('content')



    <div class="max-w-[800px] w-full  justify-center  py-20 px-2">





        <h1 class='text-3xl font-bold pb-4 flex'>Fanart Submission Form</h1>

        <p class='pb-4'>Want to submit fanarts? Just complete the form below.</p>

        <form class='' method="POST" action="/fanart/store" enctype="multipart/form-data">
            @csrf

            <div class="flex flex-col bg-neutral-100  p-10 rounded border-2 shadow">
                <div
                    class="bg-white flex border-2  w-full flex-col shadow-inner items-center justify-center  m-4 rounded-lg p-4">
                    <label for="artworkFile">Upload PNG, JPG up to 10MB:</label>
                    <input class="text-sm pb-2" type="file" id="artworkFile" name="artworkFile" required
                        onchange="previewImage(event)">


                    <div id="preview-container">
                        <img id="preview" class="rounded shadow" src="#" alt="Image Preview"
                            style="display: none; max-width: 100%; height: auto;">
                    </div>

                </div>


                <label class="formtitle" for="artist_name">Artist Name</label>
                <p class="formdescription">Lowercase, no spaces allowed.</p>
                <input class="forminput" type="text" id="artist_name" name="artist_name"
                    placeholder='e.g. avelinekarmine' required>

                <label class='formtitle' for="creation_date">Year</label>

                <p class="formdescription">Please select the year this artwork was created.</p>
                <select class='forminput' id="creation_date" name="creation_date">
                    <option value="2025-01-01">2025</option>
                    <option value="2024-01-01">2024</option>
                    <option value="2023-01-01">2023</option>
                    <option value="2022-01-01">2022</option>
                    <option value="2021-01-01">2021</option>
                    <option value="2020-01-01">2020</option>
                </select>

                <button type="submit" class="navbutton self-end">Submit</button>

            </div>

        </form>

    </div>





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
