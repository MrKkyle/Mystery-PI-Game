<?php
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "api-database";

    $namae = $_POST["userName"];
    $passCode = $_POST["passCode"];

    $_SESSION["userName"] = $namae;
    $_SESSION["passCode"] = $passCode;
    $_SESSION["tableName"] = "leaderboard";
    $_SESSION["dbName"] = $dbname;


    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if($conn->connect_error)
    {
        die("Connection Failed: " . $conn->connect_error);
    }

    if($namae == 'admin')
    {
        $query = "SELECT * FROM `player` WHERE `Player-Username` = '$namae' AND passCode = '$passCode'";
        if((mysqli_num_rows(mysqli_query($conn, $query)) > 0))
        {
            //If Success redirect to customer area
            header("Location: ../Admin/Admin.php");
        }
        else
        {
            //show failure message
            header("Location: ../System-messages/error.html");
        }
    }
    else 
    {
        $query = "SELECT * FROM `player` WHERE `Player-Username` = '$namae' AND passCode = '$passCode'";
        if((mysqli_num_rows(mysqli_query($conn, $query)) > 0))
        {
            //If Success redirect to customer area
            header("Location: ../Participant/participant.php");
        }
        else
        {
            //show failure message
            header("Location: ../System-messages/error.html");
        }
    }
?>