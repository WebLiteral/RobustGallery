<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css'])
    <title>LiteralHat | About</title>
</head>


<body class='bg-black text-white flex justify-center items-center text-left flex-col h-screen'>

    <div class='w-[500px] mb-32 space-y-6 leading-7 font-poppins font-light'>

        <a href='{{ url('/') }}'>
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 50 50" class='hoverglow'>
            <path d="M30 10 L15 25 L30 40" stroke="white" stroke-width="2" fill="none" />
        </svg>
    </a>

        <h1 class='font-orator uppercase text-4xl pb-6 pt-8'>About</h1>
        
        <p>Sometimes I code, sometimes I animate, sometimes I draw and sometimes I make music. This website is the home of my projects.</p>

    </div>

</body>

</html>
