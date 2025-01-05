<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    <title>Welcome Home.</title>
</head>


<body class='bg-radial text-white'>


    <div class='flex-col justify-center items-center flex'>

        <img src='img/literalhat_logo.webp' class='h-[150px] m-6'>

        <div class='flex pt-20'>
            <ul class='flex flex-col justify-center font-orator uppercase text-xl text-right space-y-4 w-72'>

                <li class='hoverglow'><a href="/">Home</a></li>
                <li class='hoverglow'><a href="/gallery">Gallery</a></li>
                <li class='hoverglow'><a href="/fanart">Fanart</a></li>
            </ul>
            <img src='img/literally_hat.webp' class='w-96 mx-24'>

            
            <ul class='flex flex-col justify-center font-orator uppercase text-xl space-y-4 w-72'>
                
                <li class='hoverglow'><a href="/charlieboard">CharlieBoard</a></li>
                <li class='hoverglow'><a href="/rps">Rock Paper Scissors</a></li>
                <li class='hoverglow'><a href="/about">About</a></li>
            </ul>
        </div>

    </div>

</body>

</html>
