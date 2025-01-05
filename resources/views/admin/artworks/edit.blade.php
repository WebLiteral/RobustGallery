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
                    <div class="flex pb-4 items-center">

                    <h2 class="font-bold p-4 text-2xl">Editing: <span class="font-medium italic">{{$artwork->title}}</span></h2>
                    </div>
                    
                    <form class='flex text-neutral-700' method="POST" action="/dashboard/artworks/update/{{$artwork->slug}}" >
                        @csrf
                        @method('PATCH')

                        <div class="bg-neutral-100 flex flex-col shadow-inner items-center justify-center w-1/2 m-4 rounded-lg p-2">
                            <div id="preview-container">
                                <img id="preview" class="rounded shadow w-full" src="https://reloaded.literalhat.com/artwork/literalhat-{{$artwork->slug}}.webp" alt="Image Preview">
                            </div>
                        </div>


                        <div class="flex flex-col w-1/2">
                            <label class="formtitle" for="title">Title</label>
                            <p class="formdescription">It's case sensitive, and takes all symbols.</p>
                            <input class="forminput" type="text" id="title" name="title" value="{{$artwork->title}}" required>

                            <label class="formtitle" for="description">Description</label>
                            <p class="formdescription">Similar to title, it's case sensitive but also stores line
                                breaks.</p>
                            <textarea class="forminput" id="description" name="description">{!! nl2br(e($artwork->description)) !!}</textarea>

                            <label class="formtitle" for="creation_date">Creation Date</label>
                            <p class="formdescription">Stored as YYYY-MM-DD</p>
                            <input class="forminput" type="date" id="creation_date" value="{{$artwork->creation_date}}" name="creation_date" required>

                            <label class="formtitle" for="slug">Slug</label>

                            <p class="formdescription italic">https://reloaded.literalhat.com/artwork/{{$artwork->slug}}.webp</p>

                                <div class="self-end pt-4">
                            <button form="delete-form" class="px-4 text-rose-600">Delete</button>
                            <button type="submit" class="navbutton">Submit</button></div>

                        </div>
                    </form>


                    <form method="POST" action="/dashboard/artworks/delete/{{$artwork->slug}}" class="hidden" id="delete-form">
                    @csrf    
                    @method('DELETE')
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>