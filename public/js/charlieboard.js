//init the stuff
const images = document.querySelectorAll('.draggable');
const itemsBox = document.getElementById('itemsBox');
const soundPickUp = new Audio('sfx/pickup.mp3');
const soundDrop = new Audio('sfx/dropped.mp3');
soundPickUp.volume = 0.2;
soundDrop.volume = 0.1;


const lightsoff = new Audio('sfx/lightsoff.mp3');
const lightson = new Audio('sfx/lightson.mp3');
const soundPurr = new Audio('sfx/purr.mp3');
soundPurr.volume = 0.5;


const cuerdas = [
    document.getElementById('cuerdaE'),
    document.getElementById('cuerdaA'),
    document.getElementById('cuerdaD'),
    document.getElementById('cuerdaG'),
    document.getElementById('cuerdaB'),
    document.getElementById('cuerdaEe')
];


const soundCuerdaE = new Audio('sfx/cuerdas/cuerdaE.mp3');
const soundCuerdaA = new Audio('sfx/cuerdas/cuerdaA.mp3');
const soundCuerdaD = new Audio('sfx/cuerdas/cuerdaD.mp3');
const soundCuerdaG = new Audio('sfx/cuerdas/cuerdaG.mp3');
const soundCuerdaB = new Audio('sfx/cuerdas/cuerdaB.mp3');
const soundCuerdaEe = new Audio('sfx/cuerdas/cuerdaEe.mp3');

soundCuerdaE.volume = 0.4;
soundCuerdaA.volume = 0.4;
soundCuerdaD.volume = 0.4;
soundCuerdaG.volume = 0.4;
soundCuerdaB.volume = 0.4;
soundCuerdaEe.volume = 0.4;



const guitarPick = document.getElementById('guitar-pick');




function vibrate(object) {
    let steps = [
        'translate(1.5px, 0px)',
        'translate(-3px, 0px)',
        'translate(2.5px, 0px)',
        'translate(-3.5px, 0px)',
        'translate(4.5px, 0px)',
        'translate(-5.5px, 0px)',
        'translate(0.5px, 0px)',
        'translate(0px, 0px)'
    ];

    let i = 0;
    function animate() {
        if (i < steps.length) {
            object.style.transform = steps[i];
            i++;
            setTimeout(animate, 10);
        }
    }
    animate();
}

function playGuitarSound() {
    temp = isTouching();
    switch (temp) {
        case 'cuerdaE':
            soundCuerdaE.play();
            vibrate(cuerdas[0]);
        case 'cuerdaA':
            soundCuerdaA.play();
            vibrate(cuerdas[1]);
        case 'cuerdaD':
            soundCuerdaD.play();
            vibrate(cuerdas[2]);
        case 'cuerdaG':
            soundCuerdaG.play();
            vibrate(cuerdas[3]);
        case 'cuerdaB':
            soundCuerdaB.play();
            vibrate(cuerdas[4]);
        case 'cuerdaEe':
            soundCuerdaEe.play();
            vibrate(cuerdas[5]);
    }
}



function isTouching() {
    const pickRect = guitarPick.getBoundingClientRect();

    for (let cuerda of cuerdas) {
        const targetRect = cuerda.getBoundingClientRect();

        if (!(pickRect.right < targetRect.left ||
            pickRect.left > targetRect.right ||
            pickRect.bottom < targetRect.top ||
            pickRect.top > targetRect.bottom)) {
            return cuerda.id;
        }
    }
    return false;
}

// Suffer, if you've moved anything. SUFFER.
// function loadPositions() {
//     images.forEach(image => {
//         const savedPosition = JSON.parse(localStorage.getItem(image.id)); // Assuming each image has a unique id
//         if (savedPosition) {
//             image.style.top = savedPosition.top;
//             image.style.left = savedPosition.left;
//         }
//     });
// }

function savePosition(image) {
    const position = {
        top: image.style.top,
        left: image.style.left
    };
    localStorage.setItem(image.id, JSON.stringify(position));
}

// just important variables
let zIndex = 2;
let isDarkMode = 0;
const artTools = ['brush', 'lapiz', 'goma'];

function enableInteract() {
    images.forEach(image => {
        image.style.pointerEvents = 'auto';
        if (!image.classList.contains('bowtie')) {
            image.style.filter = 'drop-shadow(0px 0px 2px rgba(3, 1, 23, 0.831))';
        }
        image.addEventListener('mousedown', startDrag);
        image.addEventListener('mouseover', mouseOver);

        image.addEventListener('touchstart', startDrag, { passive: false });

    });
}

function disableInteract() {
    images.forEach(image => {
        image.style.pointerEvents = 'none';

        image.removeEventListener('mouseout', mouseOut);
        image.removeEventListener('mousedown', startDrag);
        image.removeEventListener('mouseover', mouseOver);


    });
    if (paintMode) {
        images.forEach(image => {
            if (artTools.includes(image.id)) {
                image.style.pointerEvents = 'auto';
                image.style.cursor = 'pointer';
                image.style.filter = 'drop-shadow(0px 0px 6px rgba(255, 189, 197, 1))';
                image.addEventListener('mousedown', paintMouseDown);
                console.log('test');
            }
        });
    } else {

    }
}

function paintMouseDown(e) {
    this.style.filter = 'drop-shadow(0px 0px 6px rgba(255, 189, 197, 1))';
    this.style.cursor = 'pointer';
}

// for simply hovering it will brighten the image
function mouseOver(e) {
    this.style.filter = 'drop-shadow(0px 0px 2px rgba(3, 1, 23, 0.831)) brightness(110%) ';
    this.addEventListener('mouseout', mouseOut);
    this.style.cursor = 'pointer';
    this.style.pointerEvents = 'auto';
}

// when user stops hovering
function mouseOut(e) {
    this.style.filter = 'drop-shadow(0px 0px 3px rgba(3, 1, 23, 0.831))';
    this.removeEventListener('mouseout', mouseOut);
}

// gets the scale of the html element for responsive widths
function getScaleFactor() {
    const scale = window.getComputedStyle(document.documentElement).getPropertyValue('scale');
    return parseFloat(scale) || 1;
}

//when mouseclick is detected
function startDrag(e) {

    soundPickUp.play();
    // Start dragging
    isDragging = false;


    //transformation stuff
    e.preventDefault();
    let startX = e.type === 'touchstart' ? e.touches[0].clientX : e.clientX;
    let startY = e.type === 'touchstart' ? e.touches[0].clientY : e.clientY;
    let newX = 0;
    let newY = 0;


    //cosmetic
    this.style.filter = 'drop-shadow(2px 2px 4px rgba(3, 1, 23, 0.831)) brightness(110%)';
    this.style.transform = 'scale(1.03)';
    soundDrop.volume = 0.02;


    const scaleFactor = getScaleFactor();

    // if user actually moves the mouse
    const drag = (e) => {

        soundDrop.volume = 0.1;
        e.preventDefault();

        //divides by scale factor because yeah
        newX = (startX - (e.type === 'touchmove' ? e.touches[0].clientX : e.clientX)) / scaleFactor;
        newY = (startY - (e.type === 'touchmove' ? e.touches[0].clientY : e.clientY)) / scaleFactor;


        startX = e.type === 'touchmove' ? e.touches[0].clientX : e.clientX;
        startY = e.type === 'touchmove' ? e.touches[0].clientY : e.clientY;



        //cosmetic
        this.style.filter = 'drop-shadow(10px 10px 7px rgba(3, 1, 23, 0.531)) brightness(110%)';
        this.style.transform = 'scale(1.05)';

        // Move the this
        this.style.top = (this.offsetTop - newY) + 'px';
        this.style.left = (this.offsetLeft - newX) + 'px';

        isDragging = true;

        if (this.id == 'guitar-pick') {
            playGuitarSound();
        }


    }

    const endDrag = (e) => {
        soundDrop.play();

        //cosmetic effects
        this.style.filter = 'drop-shadow(0px 0px 3px rgba(3, 1, 23, 0.831)) brightness(110%)';
        this.style.transform = 'scale(1)';

        //if its a bowtie it will randomly rotate it a certain amount when its dropped
        if (e.target.id.includes('bowtie')) {
            let bowtieRotation = Math.floor(Math.random() * 80) - 40;
            this.style.transform = 'rotate(' + bowtieRotation + 'deg)';
        }


        // Remove event listeners when mouse is released
        document.removeEventListener('mousemove', drag);
        document.removeEventListener('mouseup', endDrag);
        this.addEventListener('mouseover', mouseOver);
        savePosition(this);

        document.removeEventListener('touchmove', drag, { passive: false });
        document.removeEventListener('touchend', endDrag, { passive: false });
    }

    // Add event listeners for mousemove and mouseup
    document.addEventListener('mousemove', drag);
    document.addEventListener('mouseup', endDrag);


    document.addEventListener('touchmove', drag, { passive: false });
    document.addEventListener('touchend', endDrag, { passive: false });

}

//prevents link from opening if the user has dragged the thing
this.addEventListener('click', function (e) {
    if (isDragging) {
        e.preventDefault(); // Prevent the link from being activated
    }
});




















//adds sticky note
function sticky(color) {
    if (!isDragging) {
        let sticky = document.getElementById(color);
        let ventana = document.getElementById('ventana');
        var imgTop = sticky.style.top;
        var imgLeft = sticky.style.left;
        var newDiv = document.createElement('div');
        newDiv.innerHTML = '<img src="img/charlieboard/' + color + '-one.png"/>'


        newDiv.classList.add('draggable');
        newDiv.addEventListener('mousedown', startDrag);
        newDiv.addEventListener('mouseover', mouseOver);

        newDiv.style.position = 'absolute';
        newDiv.style.zIndex = sticky.style.zIndex + 2;
        newDiv.style.top = imgTop;
        newDiv.style.left = imgLeft;

        ventana.appendChild(newDiv);

    }
}


//changes the overlay div to be visible, it's already there but you can't see it. essentially when lamp is clicked it will change the opacity
function lights() {
    if (!isDragging) {
        const overlay = document.getElementById('overlay');
        const bg = document.body;

        if (isDarkMode === 0) {
            overlay.style.opacity = 1;
            isDarkMode = 1;
            lightsoff.play();
        } else {
            overlay.style.opacity = 0;
            isDarkMode = 0;
            lightson.play();
        }
    } else {

    }
}


let painting = false;
let paintMode = false;
let currentTool = "brush"; // Herramienta seleccionada
let ctx = canvas.getContext("2d");

function paint(toolname) {

    function startPosition(e) {
        if (paintMode) {
            painting = true;
            draw(e); // Para comenzar a dibujar inmediatamente
        }
    }

    function endPosition() {
        painting = false;
        ctx.beginPath(); // Reinicia el trazo independientemente de la herramienta
    }

    function draw(e) {
        if (!painting) return;

        let x = e.clientX - canvas.offsetLeft;
        let y = e.clientY - canvas.offsetTop;

        // Configuración de la herramienta
        switch (currentTool) {
            case 'brush':
                ctx.globalCompositeOperation = "source-over";
                ctx.lineWidth = 8;
                ctx.strokeStyle = "#782434";
                ctx.shadowColor = "#782434";
                ctx.shadowBlur = 4;
                break;

            case 'lapiz':
                ctx.globalCompositeOperation = "source-over";
                ctx.lineWidth = 3;
                ctx.strokeStyle = "#212233";
                ctx.shadowColor = "#212233";
                ctx.shadowBlur = 4;
                break;
            case 'goma':
                ctx.globalCompositeOperation = "destination-out"; // Borra contenido
                ctx.lineWidth = 20; // Tamaño de la goma
                ctx.strokeStyle = "rgba(0,0,0,1)"; // No importa el color aquí
                ctx.shadowBlur = 3; // Sin sombras
                break;

        }

        ctx.lineCap = "round";
        ctx.lineJoin = "round";
        ctx.lineTo(x, y);
        ctx.stroke();
        ctx.beginPath();
        ctx.moveTo(x, y);
    }

    if (!paintMode && !isDragging) {
        currentTool = toolname;
        paintMode = true;
        console.log('paintmode on');
        console.log('selected tool ' + toolname);
        disableInteract();
        canvas.addEventListener("mousedown", startPosition);
        canvas.addEventListener("mouseup", endPosition);
        canvas.addEventListener("mousemove", draw);
    } else {
        paintMode = false;
        enableInteract();
        console.log('paintmode off');

        canvas.removeEventListener("mousedown", startPosition);
        canvas.removeEventListener("mouseup", endPosition);
        canvas.removeEventListener("mousemove", draw);
    }
}


bgArray = ['paper', 'balcony', 'hmas', 'paper', 'sea', 'street', 'street2', 'sun'];

function changeBg() {
    let newBg = bgArray[Math.floor(Math.random() * 8)];
    document.documentElement.style.backgroundImage = "url('img/charlieboard/bg/bg-" + newBg + ".jpg')";
    if (newBg != 'paper') {
        document.documentElement.style.backdropFilter = 'blur(10px)'  // Sin punto y coma
    } else {
        document.documentElement.style.backdropFilter = 'blur(0px)'
    }
    console.log('hola');
}










document.getElementById('gata').addEventListener('click', function () {
    soundPurr.play();
    const img = this;
    const srcOriginal = 'img/charlieboard/gata.png';
    const srcNuevo = 'img/charlieboard/gata-2.png';

    //cambiar a la nueva imagen
    img.src = srcNuevo;

    setTimeout(() => {
        img.src = srcOriginal;
    }, 1000);
});





enableInteract();
// loads the stuff in case previous 'save' is detected.


document.addEventListener('DOMContentLoaded', () => {
    document.documentElement.style.filter = 'brightness(100%)';

});