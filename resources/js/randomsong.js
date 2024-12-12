
    const randomsong = document.getElementById('randomsong');

    const randomSongArray = {
        'Bombtrack': 'https://www.youtube.com/watch?v=MUaL1FnotRQ',
        'Worry': 'https://www.youtube.com/watch?v=Ub5oVqDX8dY',
        'Frijolero': 'https://www.youtube.com/watch?v=C468ckG8cfc',
        'Violent Pornography': 'https://www.youtube.com/watch?v=WWXcpWliHSY',
        'Leave It Alone': 'https://www.youtube.com/watch?v=cuR12uCt61Q',
        'Gimme Tha Power': 'https://www.youtube.com/watch?v=rPDKPW3zTR0',
        'Dance And Dense Denso': 'https://www.youtube.com/watch?v=PLQP7iu76F0',
        'Epiphany': 'https://www.youtube.com/watch?v=bB1Ld1i9amY',
        'Seeing Double At The Triple Rock': 'https://open.spotify.com/intl-es/track/5QegaMGMY7mORFEBngkFxy?si=168a256f918f47f0',
        'Nikes': 'https://www.youtube.com/watch?v=rhJLfdCWrMI',
        'Head': 'https://www.youtube.com/watch?v=sYsdvQSpabs',
        'Do What You Want': 'https://www.youtube.com/watch?v=s5F-xHX1PDE',
        'La Granja': 'https://www.youtube.com/watch?v=eTewgdFscyk',
        'Sexo Y Religion': 'https://www.youtube.com/watch?v=M8_EU-t0PZk',
        'Sondaschule': 'https://www.youtube.com/watch?v=Tmo4bN89gVs',
        'Arranzacorazones': 'https://www.youtube.com/watch?v=1zNfElP3Br8',
        'Raum Der Zeit': 'https://www.youtube.com/watch?v=6A-flxZH3v8',
        'Ganz Klar Gegen Nazis': 'https://www.youtube.com/watch?v=GgZj23G9wrI',
        'La Vida Del Oso': 'https://www.youtube.com/watch?v=HP9VPmqPBnM',
        'Time Bomb': 'https://www.youtube.com/watch?v=GvIBOlyAViU',
        'Ruby Soho': 'https://www.youtube.com/watch?v=GeFr4_CADp4',
        'Middelalder': 'https://www.youtube.com/watch?v=9IjFXHLlWj0',
        'Point / Counterpoint': 'https://www.youtube.com/watch?v=YGNNTxWkjl8',
        'Manchmal': 'https://www.youtube.com/watch?v=H5jHZ0qZHg4',
        'All Outta Angst': 'https://www.youtube.com/watch?v=O5vAjonRItk'
    };

    const funniSongs = [
        'Frijolero',
        'Gimme Tha Power',
        'Dance And Dense Denso',
        'La Granja',
        'Sexo Y Religion',
        'La Vida Del Oso'
    ];


    const keysArray = Object.keys(randomSongArray);
    const randomIndex = Math.floor(Math.random() * keysArray.length);
    const randomKey = keysArray[randomIndex];
    const randomValue = randomSongArray[randomKey];

    const displayKey = funniSongs.includes(randomKey) ? '¡' + randomKey : randomKey;

    randomsong.innerHTML = displayKey + '!';
    randomsong.href = randomValue;
