<!DOCTYPE html>
<html lang="en">

<head>
    <title>LiteralHat | Rock Paper Scissors</title>
    <meta name="LiteralHat | Rock Paper Scissors" content="" />
    <link rel="stylesheet" href="{{ asset('css/rps.css') }}">

</head>

<body>
    <main>
        <div class='widthcontainer'>
            <div class='contentcontainer'>
                <div class="whitebox center toneblack">
                    <div class='whiteborder padded'>
                        <h1 class='white padtop large'>
                            Rock Paper Scissors
                        </h1>
                    </div>
                </div>
            </div>
            <div class='spacermedium'>
            </div>
            <p class='white bold  padtop center'>Welcome to rock, paper, scissors.</p>
            <p class='white bold padded center nounderline'><a href='/'>< Back Home?</a></p>

            <div class='spacermedium'>
            </div>
        </div>

        <div class='sidecontainer'>
            <div class='contentbox padtop'>
            </div>
        </div>
        </div>
        </div>

        <div class="contentrowblack centerbox padded" id='pickAnOpponent'>
            <div class='boxedsection'>
                <div class='contentcontainer'>
                    <h2 class='white'>- Pick an Opponent -</h2>
                </div>
            </div>
        </div>

        <div class="contentrowblack centerbox">
            <div class='boxedsection'>
                <div class='bigwidthcontainer'>
                    <div class='contentcontainer'>



                        <div class='rowbox' id='mainMenuBox'>
                            <div class='contentcontainer'>
                                <div class='padded center rpsbox'>
                                    <img src='img/rps/literalhat-hat-neutral.webp'>
                                    <button class='buttonwhiteoutline buttonfixedwidth' id='playHat'>Hat</button>
                                    <p class='padded white'>
                                        The easiest to play against, because he <i><b>really</b></i> doesnt want to be
                                        here.
                                    </p>
                                </div>
                            </div>
                            <div class='contentcontainer'>
                                <div class='padded center rpsbox'>
                                    <img src='img/rps/literalhat-fang-neutral.webp'>
                                    <button class='buttonwhiteoutline buttonfixedwidth' id='playFang'>Fang</button>
                                    <p class='padded white'>
                                        The only one who actually likes this game.
                                        Fair play.
                                    </p>
                                </div>
                            </div>
                            <div class='contentcontainer'>
                                <div class='padded center rpsbox'>
                                    <img src='img/rps/literalhat-cm-neutral.webp'>
                                    <button class='buttonwhiteoutline buttonfixedwidth' id='playLevy'>Chicken
                                        Man</button>
                                    <p class='padded white'>
                                        Fucking cheater.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class='columnbox' id='gameBox'>

                        <div class='gamerowBox flexcenter'>


                            <div class='contentcontainer'>
                                <div class='toneblack'>
                                    <div class='whiteborder'>
                                        <div class='whitebox toneblack noshadow paddedsm scorebox center'>

                                            <h2 class='white' id='opponentName'>Levy</h2>
                                            <hr>
                                            <p class='large white padtop' id='opponentScore'>0</p>

                                        </div>
                                    </div>
                                </div>
                            </div>


                                <img id='characterImage' src=''>



                                <div class='contentcontainer'>
                                <div class='toneblack'>
                                    <div class='whiteborder'>
                                        <div class='whitebox toneblack noshadow padded scorebox center'>

                                            <h2 class='white'>YOU</h2>
                                            <hr>
                                            <p class='large white padtop' id='playerScore'>0</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>



                        <div class='contentcontainer'>
                            <div class='toneblack' id='characterDialogueBox'>
                                <div class='whiteborder'>
                                    <div class='whitebox toneblack noshadow'>
                                        <div class='whiteborderdotted paddedsm' id='funnybox'>

                                            <p class='center'>
                                                <span class='small white' id='characterName'></span><span
                                                    class='small white'> | </span>
                                                <span class='small white' id='characterMove'></span>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <span class='small white' id='playerMove'>YOU | ...<span>
                                            </p>
                                            <p class='white padtop italics' id='characterDialogue'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>






                    <div class='columnbox center' id='gameBoxPlayer'>

                        <div class='contentcontainer padtop'>
                            <p class='white medium'>Select a weapon!</p>
                        </div>

                        <div class='rowbox'>
                            <div class='columnbox'>
                                <div class='contentcontainer'>
                                    <button class='hidebutton rpsicon' id='actionRock'>
                                        <img class='tiny center' src='img/rps/rock.webp'>
                                        <span class='white medium quote'>Rock!</span>
                                    </button>
                                </div>
                            </div>
                            <div class='columnbox'>
                                <div class='contentcontainer'>
                                    <button class='hidebutton rpsicon' id='actionPaper'>
                                        <img class='tiny center' src='img/rps/paper.webp'>
                                        <span class='white medium quote'>Paper!</span>
                                    </button>
                                </div>
                            </div>
                            <div class='columnbox'>
                                <div class='contentcontainer'>
                                    <button class='hidebutton rpsicon' id='actionScissor'>
                                        <img class='tiny center' src='img/rps/scissors.webp'>
                                        <span class='white medium quote'>Scissor!</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>





        <!-- Footer and closing div tags used for styled main content box  -->

        <script src="{{ asset('js/rps.js') }}"></script>
    </main>
</body>

</html>
