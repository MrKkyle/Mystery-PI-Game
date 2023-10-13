<?php
    session_start();

    $namae = $_POST["userName"];
    $passCode = $_POST["passCode"];
    $score = null;

    /*Generate a random string */
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
    // Output: 54esmdr0qf 
    $sharing_ID = substr(str_shuffle($permitted_chars), 0, 10);



    $_SESSION["userName"] = $namae;
    $_SESSION["passCode"] = $passCode;

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "api-database";
    $_SESSION["tableName"] = "leaderboard";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if($conn->connect_error)
    {
        die("Connection Failed: " . $conn->connect_error);
    }

    $query = "INSERT INTO `player` (Username, passCode, `Sharing-ID`, `Player-Registration`, `Player-Score`) 
    VALUES ('$namae', '$passCode', '$sharing_ID', b'1', '$score')";

    if(mysqli_query($conn, $query))
    {
        //If Success redirect to customer area


        header("Location: ../Participant/participant.php");
    }
    else
    {
        //show failure message
        header("Location: ../System-messages/error.html");
    }

?>