<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="china.css">
		<title>CSC312</title>
	</head>
	<body>
        <div class = "modal">
            <div class = "background-image">
                <div class = "d-selection" id = "d-select">
                    <div class = "d-text">Difficulty Selection</div>
                    <div class = "d-elements Easy" onclick = "startTimer(300);">
                        <div class = "text" style = "color: aliceblue;">China - Easy</div>
                        <div class = "d-text-bg"></div>
                    </div>
                    <div class = "d-elements Medium" onclick = "startTimer(180);">
                        <div class = "text" style = "color: aliceblue;">China - Medium</div>
                        <div class = "d-text-bg"></div>
                    </div>
                    <div class = "d-elements Hard" onclick = "startTimer(120);"> 
                        <div class = "text" style = "color: aliceblue;">China - Hard</div>
                        <div class = "d-text-bg"></div>
                    </div>
                    <div class = "d-elements quit" onclick = "window.location.href = '../../../Participant/participant.php';">
                        <div class = "text" style = "color: aliceblue;">Quit</div>
                        <div class = "d-text-bg"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class = "board">
            <div class = "list"> List of Items:</div>
            <img class = "img" id = "fan" src = "../icons/icons8-fan-96.png" />
            <img class = "img" id = "dollar" src = "../icons/icons8-dollar-96.png">
            <img class = "img" id = "demon" src = "../icons/icons8-demon-96.png"/>
            <img class = "img" id = "clock" src = "../icons/icons8-clock-100.png"/>
            <img class = "img" id = "car" src = "../icons/icons8-car-96.png"/>
            <img class = "img" id = "candy" src = "../icons/icons8-candy-100.png"/>
            <img class = "img" id = "canada" src = "../icons/icons8-canada-96.png"/>
            <img class = "img" id = "ferris-wheel" src = "../icons/icons8-ferris-wheel-96.png"/>
            <img class = "img" id = "github" src = "../icons/icons8-github-96.png"/>
            <img class = "img" id = "gun" src = "../icons/icons8-gun-96.png"/>
            <img class = "img" id = "hamster-wheel" src = "../icons/icons8-hamster-wheel-96.png"/>
            <img class = "img" id = "hue" src = "../icons/icons8-hue-96.png"/>
            <img class = "img" id = "anime" src = "../icons/icons8-itachi-uchiha-96.png"/>
            <img class = "img" id = "java" src = "../icons/icons8-java-96.png"/>
            <img class = "img" id = "keyboard" src = "../icons/icons8-keyboard-100.png"/>
            <img class = "img" id = "leaves" src = "../icons/icons8-leaves-96.png"/>
            <img class = "img" id = "lighter" src = "../icons/icons8-lighter-96.png"/>
            <img class = "img" id = "man" src = "../icons/icons8-man-96.png"/>
            <img class = "img" id = "music" src = "../icons/icons8-music-96.png"/>
            <img class = "img" id = "nokia" src = "../icons/icons8-nokia-3310-96.png"/>
            <img class = "img" id = "notepad++" src = "../icons/icons8-notepad++-96.png"/>
            <img class = "img" id = "paint" src = "../icons/icons8-paint-100.png"/>
            <img class = "img" id = "pause" src = "../icons/icons8-pause-button-96.png"/>
            <img class = "img" id = "paw" src = "../icons/icons8-pet-commands-summon-96.png"/>
            <img class = "img" id = "phone" src = "../icons/icons8-phone-100.png"/>
            <img class = "img" id = "puppy" src = "../icons/icons8-puppy-96.png"/>
            <img class = "img" id = "saw-blade" src = "../icons/icons8-saw-blade-96.png"/>
            <img class = "img" id = "ship" src = "../icons/icons8-ship-96.png"/>
            <img class = "img" id = "sleeping" src = "../icons/icons8-sleeping-96.png"/>
            <img class = "img" id = "stop" src = "../icons/icons8-stop-sign-96.png"/>
            <img class = "img" id = "taxi" src = "../icons/icons8-taxi-96.png"/>
            <img class = "img" id = "tokyo-tower" src = "../icons/icons8-tokyo-tower-96.png"/>
            <img class = "img" id = "tree" src = "../icons/icons8-tree-96.png"/>
            <img class = "img" id = "twitch" src = "../icons/icons8-twitch-96.png"/>
            <img class = "img" id = "ukraine" src = "../icons/icons8-ukraine-96.png"/>
            <img class = "img" id = "vintage camera" src = "../icons/icons8-vintage-camera-96.png"/>
            <img class = "img" id = "wheel" src = "../icons/icons8-wheel-96.png"/>
            <img class = "img" id = "wind-turbine" src = "../icons/icons8-wind-turbine-96.png"/>
            <img class = "img" id = "windmill" src = "../icons/icons8-windmill-96.png"/>
            <img class = "img" id = "girl" src = "../icons/icons8-girl-96.png"/>
            <img class = "img" id = "headphones" src = "../icons/icons8-headphones-96.png"/>
            <img class = "img" id = "sky" src = "../icons/icons8-sky-100.png"/>
            <img class = "img" id = "sun" src = "../icons/icons8-sun-96.png"/>
            <img class = "img" id = "moon" src = "../icons/icons8-moon-96.png"/>
            <img class = "img" id = "mouse" src = "../icons/icons8-mouse-96.png"/>
            <img class = "img" id = "shampoo" src = "../icons/icons8-shampoo-100.png"/>
            <img class = "img" id = "monitor" src = "../icons/icons8-monitor-80.png"/>
            <img class = "img" id = "play" src = "../icons/icons8-play-96.png"/>
            <img class = "img" id = "japanese" src = "../icons/icons8-japanese-60.png"/>
            <img class = "img" id = "south-africa" src = "../icons/icons8-south-africa-96.png"/>
            <img class = "img" id = "lake" src = "../icons/icons8-lake-100.png"/>
            <img class = "img" id = "money-bag" src = "../icons/icons8-money-80.png"/>
            <img class = "img" id = "paypal" src = "../icons/icons8-paypal-96.png"/>
            <img class = "img" id = "microsoft" src = "../icons/icons8-microsoft-96.png"/>

            <button class = "button hint" id = "hint">Hint</button>
            <div class = "hide" id = "hide">Hide/Show all elements</div>

        </div>
        <div class = "message" id = "message">
            Well done!
            <br><br>
            Your time: <div id = "ptime"></div>
            <form class = "modal-content" method = "post" action = "worker.php">
                <input id = "name" name = "name" type = "text" />
                <input id = "time" name = "time" type = "text" /> 
                <button class = "button" style = "width: 110px;" type = "submit">Proceed</button>
            </form>
        </div>
        <div class = "message-2" id = "message-2">
            Game Over! Your time ran out
            <br><br>
            <button class = "button" onclick = "window.location.href = 'china-main.php';">Proceed</button>
        </div>
        <div class = "timer" id = "app">
            
        </div>
        

    </body>
	<script src = "Scripts.js"></script>
</html>