<?php 
session_start();

$servername = "localhost";
$database = $_SESSION["dbName"];
$tableName = $_SESSION["tableName"];
$username = "root";
$password = "";
$columns = array();
$columnNames = array();

$conn = mysqli_connect($servername, $username, $password, $database);
if($conn->connect_error)
{
    die("Connection Failed: " . $conn->connect_error);
}

$query = "SHOW COLUMNS FROM $tableName";

$result = $conn->query($query);
while($row = $result->fetch_assoc())
{
    $columns[] = $row['Field']; 
}

        /* Column Names */
$db = mysqli_query($conn, $query);
while($set = mysqli_fetch_row($db))
{
    $columnNames[] = $set[0];
}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel = "stylesheet" type = "text/css" href = "../Main.css" ></link> 	    
</head>
<body>

    <div class = 'background-image'>
        <div class = 'modal1'>

        <div class = "information2">
            <b>Connected to:</b> <?php print_r($database); ?> <br>
            
            <b>Using table:</b> <?php print_r($tableName)?> <br>
            
            <b>Column Names:</b> <br><?php
            for($i = 0; $i < sizeof($columnNames); $i++)
            {print_r($columnNames[$i] . " <br>");}
            ?> <br>

        </div>

            <div class = "editdb" id = "edit">
                <br>
                <button class = "button-home" type = "button" onclick = "window.location.href = 'leaderboard.php';">View Curent Leaderboard<i class = "m" style = "background-image: url('../Media/view.png');"></i></button><br>
                <button class = "button5" type = "button">Kick Player<i class = "m" style = "background-image: url('../Media/remove.png');"></i></button><br>
                <button class = "button5" type = "button">Clear Leaderboard<i class = "m" style = "background-image: url('../Media/remove.png');"></i></button><br>
                <button class = "button" style = "width: 300px; height: 120px;" onclick = "window.location.href = '../Landing-page.html';">Return to home<i class = "m" style = "background-image:url('../Media/home.png');"></i></button><br>
            </div>

            <!-- Delete database info-->
            <div class = "database-div" id = "info3">
                <span onclick = "document.getElementById('info3').style.display = 'none'" class = "close" title = "Close Modal" ></span>
                <br>     
                <div class = "text-modal">Kick A Player from Leaderboard</div>
                <form method = "post" action = "worker.php">
                    <br>
                    <div class = "text-modal">Enter Player Name</div>
                    <input type = "text" name = "delID" placeholder = "Enter Name" autocomplete = "off" required>
                    <br><br>

                    <button class = "button" type = "submit" name = "delDbBtn">Confirm</button>
                </form>
            </div>
            
            <!-- Empty Table Information -->
            <div class = "database-div" id = "info4">
                <span onclick = "document.getElementById('info4').style.display = 'none'" class = "close" title = "Close Modal"></span>
                <br>
                <div class = "text-modal">Clear Leaderboard</div><br>
                <div class = "text-modal">This will remove all the player information and start a new season.</div><br>
                <form method = "post" action = "worker.php">
                    <div class = "text-modal">Enter New Season Information</div><br>
                    <input type = "text" name = "seasonName" placeholder = "Enter Season Name" autocomplete = "off" required>
                    <br><br>

                    <input type = "text" name = "seasonSDate" placeholder = "Enter Season Start Date" autocomplete = "off" required>
                    <br><br>

                    <input type = "text" name = "seasonEDate" placeholder = "Enter Season End Date" autocomplete = "off" required>
                    <br><br>

                    <button class = "button" type = "submit" name = "emptyTb">Confirm</button>
                </form>
            </div>
        </div>   
    
    </div>
</body>

<script src = "../Scripts/Scripts.js"></script>
<script src = "Scripts.js"></script>
</html>