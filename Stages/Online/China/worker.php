<?php 
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = $_SESSION["dbName"];

/* Obtain form values */
$stage_time = $_POST["time"];
$stage_name = $_POST["name"];
$player_name = $_SESSION["userName"];


$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn->connect_error)
{
    die("Connection Failed: " . $conn->connect_error);
}

$query = "INSERT INTO leaderboard (`Player-Name`, `Player-Time`, `Stage-Name`) VALUES ('$player_name', '$stage_time', '$stage_name')"; 


if(mysqli_query($conn, $query))
{
    echo "
    <div class = 'omega-container'>
    <div class = 'background-image'>
    <div class = 'modal1'>
    <div class = 'modal-content'>
    <img src = '../../../Media/Simple1.gif' alt = 'Avatar' style = 'height: auto;'class = 'avatar'>
    <br><br><br><br><br><br><br><br>
    <div class = 'text-form'><b>Saved to Leaderboard!</b></div>
    <button class = 'button' type = 'button' onclick = 'window.location.href = `../../../Participant/participant.php`;'>Return</button>
    ";
}
else
{
    echo "
    <div class = 'omega-container'>
    <div class = 'background-image'>
    <div class = 'modal1'>
    <div class = 'modal-content'>
    <img src = '../../../Media/Simple1.gif' alt = 'Avatar' style = 'height: auto;'class = 'avatar'>
    <br><br><br><br><br><br><br><br>
    <div class = 'text'>Error! <br></div>  
    <button class = 'button' type = 'button' onclick = 'window.location.href = `../../../Participant/participant.php`;'>Return</button>
    ";
}

?>
<html>
<head>
    <meta name = "viewport" content = "width = device-width, initial-scale = 1" charset="utf-8">
    <link rel = "stylesheet" type = "text/css" href = "../../../Main.css">
</head>
<body> 
</body>
</html>