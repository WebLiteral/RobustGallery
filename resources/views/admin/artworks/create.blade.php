<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Artworks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="flex pb-4">
                        <h2 class="font-bold p-4 text-2xl">Create New</h2>
                    </div>




                    <form class='flex text-neutral-700' method="POST" action="/dashboard/artworks/store" enctype="multipart/form-data">
                        @csrf

                        <div
                            class="bg-neutral-100 flex flex-col shadow-inner items-center justify-center w-1/2 m-4 rounded-lg p-2">
                            <label for="artworkFile">Upload PNG, JPG, GIF up to 10MB:</label>
                            <input class="text-sm pb-2" type="file" id="artworkFile" name="artworkFile" required
                                onchange="previewImage(event)">
                            <div id="preview-container">
                                <img id="preview" class="rounded shadow" src="#" alt="Image Preview"
                                    style="display: none; max-width: 100%; height: auto;">
                            </div>
                        </div>


                        <div class="flex flex-col w-1/2">
                            <label class="formtitle" for="title">Title</label>
                            <p class="formdescription">It's case sensitive, and takes all symbols.</p>
                            <input class="forminput" type="text" id="title" name="title" required>

                            <label class="formtitle" for="description">Description</label>
                            <p class="formdescription">Similar to title, it's case sensitive but also stores line
                                breaks.</p>
                            <textarea class="forminput" id="description" name="description"></textarea>

                            <label class="formtitle" for="creation_date">Creation Date</label>
                            <p class="formdescription">Stored as YYYY-MM-DD</p>
                            <input class="forminput" type="date" id="creation_date" name="creation_date" required>

                            <label class="formtitle" for="slug">Slug</label>
                            <p class="formdescription">Needs to be unique. Will be converted to lowercase and spaces
                                replaced with '-'. This is for the artworkFile AND the URL.</p>
                            <input class="forminput" type="text" id="slug" name="slug" required>

                            <p class="formdescription italic">'reloaded.literalhat.com/literalhat-slug.webp'</p>

                            <button type="submit" class="navbutton self-end">Submit</button>
                        </div>
                    </form>





                    <script>
                        function previewImage(event) {
                            const preview = document.getElementById('preview');
                            const artworkFile = event.target.files[0];
                            if (artworkFile) {
                                const reader = new FileReader();
                                reader.onload = function (e) {
                                    preview.src = e.target.result;
                                    preview.style.display = 'block';
                                };
                                reader.readAsDataURL(artworkFile);
                            }
                        }
                    </script>






                </div>
            </div>
        </div>
    </div>
</x-app-layout>