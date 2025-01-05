<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.3.1/p5.min.js"></script>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LiteralHat | CharlieBoard</title>
    <link rel="stylesheet" href="{{ asset('css/charlieboard.css') }}">
</head>

<style>
    html {
        background-image: url('{{ asset('img/charlieboard/bg/bg-paper.jpg') }}');
    }
</style>


<body>

    <canvas id="canvas" height="900px" width="1200px"></canvas>
    <div class="dark-overlay" id="overlay"></div>

    <div class="ventana" id="ventana">
        <img src="img/charlieboard/charlie.png" id="charlie" class="draggable"
        style="top: 20px; left: 0px; clip-path: polygon(36% 100%, 45% 74%, 54% 72%, 55% 100%, 88% 99%, 100% 86%, 89% 69%, 100% 59%, 65% 39%, 100% 37%, 100% 0, 0 0, 0 30%, 30% 38%, 0 56%, 5% 68%, 34% 61%, 4% 76%, 7% 95%);" />


        <a href="/"><img src="img/charlieboard/sign.png" id="sign" class="draggable"
            style="top: 10px; left: 910px; clip-path: polygon(16% 17%, 17% 100%, 0 100%, 1% 0%, 100% 0, 100% 17%);" /></a>

        <div id="guitarra" class='draggable'
            style="top: 20px; left: 530px; clip-path: polygon(63% 57%, 60% 19%, 70% 16%, 66% 0%, 43% 0, 26% 15%, 41% 18%, 38% 56%, 7% 49%, 0 100%, 40% 100%, 100% 99%, 96% 59%);">
            <img src="img/charlieboard/guitarra.png" id="guitarra" />
            <div class="string" id="cuerdaE" style="top: 91px; left: 89px; width: 3px; height: 420px; "></div>
            <div class="string" id="cuerdaA" style="top: 77px; left: 95px; width: 2.7px; height: 438px; "></div>
            <div class="string" id="cuerdaD" style="top: 64px; left: 100px; width: 2.3px; height: 445px; "></div>
            <div class="string" id="cuerdaG" style="top: 51px; left: 105px; width: 2px; height: 460px; "></div>
            <div class="string" id="cuerdaB" style="top: 40px; left: 110px; width: 1.8px; height: 480px; "></div>
            <div class="string" id="cuerda" style="top: 25px; left: 115px; width: 1.5px; height: 490px; "></div>
        </div>




        
        <a id="paper" class="draggable" style="top: 320px; left: 0px"><img src="img/charlieboard/paper.png" /></a>

        <img src="img/charlieboard/brush.png" id="brush" onclick="paint('brush');" class="draggable"
            style="top: 275px; left: 310px" />
        <img src="img/charlieboard/ruler.png" id="ruler" class="draggable" style="top: 20px; left: 350px" />

        <a href='/gallery' id="cuaderno" class="draggable" style="top: 80px; left: 350px"><img src="img/charlieboard/cuaderno.png"></a>

        
        <img src="img/charlieboard/libro.png" id="libro" class="draggable" style="top: 350px; left: 350px" />
        <img src="img/charlieboard/gata.png" id="gata" class="draggable" onclick="" style="top: 540px; left: 320px" />
        <img src="img/charlieboard/schere.png" id="schere" class="draggable" style="top: 430px; left: 475px" />

        <img src="img/charlieboard/bowtie-1.png" id="bowtie-1" class="draggable bowtie" style="top: 360px; left: 483px" />
        <img src="img/charlieboard/bowtie-2.png" id="bowtie-2" class="draggable bowtie" style="top: 360px; left: 483px" />
        <img src="img/charlieboard/bowtie-3.png" id="bowtie-3" class="draggable bowtie" style="top: 360px; left: 483px" />
        <img src="img/charlieboard/bowtie-4.png" id="bowtie-4" class="draggable bowtie" style="top: 360px; left: 483px" />
        <img src="img/charlieboard/bowtie-5.png" id="bowtie-5" class="draggable bowtie" style="top: 360px; left: 483px" />
        <img src="img/charlieboard/bowtie-6.png" id="bowtie-6" class="draggable bowtie" style="top: 360px; left: 483px" />

        <img src="img/charlieboard/sticky-pink.png" id="sticky-pink" onclick="sticky('sticky-pink')" class="draggable"
            style="top: 135px; left: 548px" />
        <img src="img/charlieboard/sticky-yellow.png" id="sticky-yellow" onclick="sticky('sticky-yellow')" class="draggable"
            style="top: 210px; left: 548px" />
        <img src="img/charlieboard/goma.png" id="goma" class="draggable" onclick="paint('goma');" style="top: 288px; left: 548px" />
        <img src="img/charlieboard/periodico.png" id="periodico" class="draggable" style="top: 20px; left: 700px" />


        <img src="img/charlieboard/lampara.png" id="lampara" onclick="lights();" class="draggable" style="top: 250px; left: 690px" />

        <img src="img/charlieboard/pick.png" id="guitar-pick" class="draggable" style="top: 340px; left: 667px" />

        <a target="_blank" id="window" class="draggable"
            style="top: 445px; left: 760px">
            <img src="img/charlieboard/window.png" /></a>

        <img src="img/charlieboard/lapiz.png" id="lapiz" class="draggable" onclick="paint('lapiz');"
            style="top: 585px; left: 760px" />
        <img src="img/charlieboard/cuchara.png" id="cuchara" class="draggable" style="top: 615px; left: 730px" />

        <a href="sitemap.html" id="mapa" class="draggable" style="top: 660px; left: 720px">
            <img src="img/charlieboard/mapa.png" /></a>


        <img src="img/charlieboard/bucket.png" id="bucket" class="draggable" onclick="changeBg();" style="top: 690px; left: 560px" />
        <img src="img/charlieboard/rato.png" id="rato" class="draggable" style="top: 630px; left: 530px" />

        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" id="egg" target="_blank" class="draggable"
            style="top: 325px; left: 250px"><img src="img/charlieboard/egg.png" /></a>



    </div>

</body>

<script src="{{ asset('js/charlieboard.js') }}"></script>

</html>