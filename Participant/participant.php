<?php
session_start();

$servername = "localhost";
$database = $_SESSION["dbName"];
$tableName = "customer";
$username = "root";
$password = "";
$columns = array();
$columnNames = array();

$conn = mysqli_connect($servername, $username, $password, $database);
if($conn->connect_error)
{
    die("Connection Failed: " . $conn->connect_error);
}

$name = $_SESSION["userName"];
$passCode = $_SESSION["passCode"];

//echo($name);
$query = "SELECT * FROM `api-credentials` WHERE userName = '$name' AND passCode = '$passCode'";
if((mysqli_query($conn, $query)) == false)
{
    echo "
    <div class = 'omega-container'>
    <div class = 'bg-img'>
    <div class = 'modal1'>
    <div class = 'modal-content'>
    <img src = '../Media/error.gif' alt = 'Avatar' class = 'avatar'>
    <br><br><br><br><br><br><br><br>
    <div class = 'text'>Error! Bad Login Attempt<br></div>  
    <button class = 'button' onclick = 'window.location.href = `Admin.php`;'>Proceed</button>
    "; 
}


?>
<html>
<head>
    <link rel = "stylesheet" type = "text/css" href = "../Main.css" ></link> 	    
</head>
<body>

    <div class = 'background-image'>
        <div class = "modal1">
            <div class = "d-selection" style = "display: block; opacity: 1;" id = "d-select">
                <div class = "d-elements Easy">
                    <div class = "text" style = "color: aliceblue;">Welcome back <?php print_r($_SESSION["userName"]);?> !</div>
                    <div class = "d-text-bg"></div>
                </div>
                <div class = "d-elements Medium" id = "g-select">
                    <div class = "text" style = "color: aliceblue;">Plag a Game</div>
                    <div class = "d-text-bg"></div>
                </div>
                <div class = "d-elements Hard" onclick = "window.location.href = 'leaderboard.php';"> 
                    <div class = "text" style = "color: aliceblue;">View Leaderboard</div>
                    <div class = "d-text-bg"></div>
                </div>
                <div class = "d-elements quit" onclick = "window.location.href = '../Landing-page.html';">
                    <div class = "text" style = "color: aliceblue;">Quit</div>
                    <div class = "d-text-bg"></div>
                </div>
            </div> 

            <div class = "stage-selection" id = "stage">
                <div class = "close" id = "close"></div>
                <div class = "stage-text">Please select your stage</div>
                <div class = "stage-elements Japan" onclick = "window.location.href = '../Stages/Online/Japan/japan-main.php';">
                    <div class = "text" style = "color: aliceblue;">Japan</div>
                    <div class = "stage-text-bg"></div>
                </div>
                <div class = "stage-elements China" onclick = "window.location.href = '../Stages/Online/China/china-main.php';">
                    <div class = "text" style = "color: aliceblue;">China</div>
                    <div class = "stage-text-bg"></div>
                </div>
                <div class = "stage-elements USA" onclick = "window.location.href = '../Stages/Online/USA/usa-main.php';">
                    <div class = "text" style = "color: aliceblue;">USA</div>
                    <div class = "stage-text-bg"></div>
                </div>
                <div class = "stage-elements RSA" onclick = "window.location.href = '../Stages/Online/RSA/rsa-main.php';">
                    <div class = "text" style = "color: aliceblue;">South Africa</div>
                    <div class = "stage-text-bg"></div>
                </div>
            </div>

            <div class = "slideshow-container" id = "ss" >
                <div class = "mySlides fade">
                    <div class = "numbertext">1 / 4</div>
                    <img src = "../Media/Slides/c1.jpg" style = "width:100%">
                </div>
                
                <div class = "mySlides fade">
                    <div class = "numbertext">2 / 4</div>
                    <img src = "../Media/Slides/jp2.jpg" style = "width:100%">
                </div>
                
                <div class = "mySlides fade">
                    <div class = "numbertext">3 / 4</div>
                    <img src = "../Media/Slides/sa3.jpg" style = "width:100%">
                </div>

                <div class = "mySlides fade">
                    <div class = "numbertext">4 / 4</div>
                    <img src = "../Media/Slides/usa1.jpg" style = "width:100%">
                </div>
            </div>

        </div>    
    </div>
</body>
<script src = "Scripts.js"></script>
</html>