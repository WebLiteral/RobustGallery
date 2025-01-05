<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LiteralHat | Fanart</title>
    @vite(['resources/css/app.css'])
</head>

@auth
    <div class="flex  justify-between w-full bg-amber-500 font-medium text-center p-2 shadow-md">

        <span class="">
            ¡Bienvenido, <span class="font-bold">{{ Auth::user()->name }}!</span></span>
        <ul class="flex">
            <a class="nowrap text-neutral-800 hover:text-amber-100" href="/dashboard">[ Dashboard ]</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="nowrap text-neutral-800 hover:text-amber-100">[ Logout ]</button>
            </form>
        </ul>
    </div>
@endauth

<body class='bg-white flex'>
    <div class='flex'>
        <div class="bg-teal-950 px-4 h-screen">
            <ul class='flex flex-col items-center justify-center gap-4 py-4'>
                <li><a href='/' class='bg-pink-200 border-2 w-16 h-16 text-center flex items-center font-bold rotate-2'>Back
                        Home</a></li>
                <li><a class='bg-green-100 border-2 w-16 h-16 text-center flex items-center font-bold rotate'>Submit Art</a></li>
                <li><a class='bg-blue-100 border-2 w-16 h-16 text-center flex items-center font-bold rotate-1'>Request Removal</a>
                </li>
            </ul>
        </div>
        <div
            class="bg-neutral-200 w-4 border-x-4 border-double border-neutral-400 outline outline-4 outline-black h-screen">
        </div>
    </div>
    <div class="px-4 py-2">
        <div class='bg-black w-full h-min top-0 p-4 shadow-md'>
            <h1 class='bg-white text-black p-4 font-bold text-4xl'>Fanart Gallery</h1>
        </div>
    </div>
</body>



</html>
