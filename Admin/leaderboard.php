<?php 
session_start();

/* ensures that names are the same FROM DIFFERENT PAGES */
$tableName = $_SESSION["tableName"];
$columnNames = array();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = $_SESSION["dbName"];

$conn = mysqli_connect($servername, $username, $password, $dbname);
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

if(isset($_SESSION["admin"]) == true)
{
    $name = $_SESSION["admin"];
}
else
{
    $name = "admin";
}
/* Get season information */
$s_name;
$s_sd;
$s_ed;

$query2 = "SELECT `Season-name`,`Season-Start`,`Season-End` FROM season WHERE `Admin`  = '$name'";


$result = $conn->query($query2);

if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) 
    {
        $s_name = $row["Season-name"]; 
        $s_sd = $row["Season-Start"];
        $s_ed = $row["Season-End"];

        /* Set as session variables */
        $_SESSION["s_name"] = $row["Season-name"]; 
        $_SESSION["s_sd"] = $row["Season-Start"];
        $_SESSION["s_ed"] = $row["Season-End"];
    }
}
?>

<head>
<link rel = "stylesheet" type = "text/css" href = "../Main.css" ></link>   
</head>
<body>
    <div class = "background-image">
        <div class = "modal1"></div>
    </div>

    <button class = "button" id = "rtn" style = "z-index: 2; left: 50%; transform: translate(-50%, 0%); top: 0%; width: 130px; height: 50px"
        type = "button" onclick = "window.location.href = 'Admin.php';">Edit</button>

    <div id = "myNav" class = "overlay">
        <a id = "close" class = "closebtn">&times;</a>
        <div class = "overlay-content">
            <a href = "#"> <b>Season Name:</b> <?php print_r($s_name); ?> </a>
            <a href = "#"> <b>Season Start Date:</b> <?php print_r($s_sd); ?> </a>
            <a href = "#"> <b>Season End Date:</b> <?php print_r($s_ed); ?> </a>
        </div>
    </div>
    <span id = "open">Season Info</span>

    <div class = "table-info">
        <?php 
        $mysqli = new mysqli($servername, $username, $password, $dbname); 
        $query = "SELECT * FROM $tableName";
        
        echo '<table border = "0" cellspacing = "2" cellpadding = "2" color = "white">';
        
        for($i = 0; $i < sizeof($columnNames); $i++)
        {
            echo"
            
                <td><font face = 'Arial' 
                style = 'font-weight: bold; font-size: 20px;'>$columnNames[$i]</font> </td>
            ";
        }
        
        /*Make this flexable */
        if ($result = $mysqli->query($query)) 
        {
            while ($row = $result->fetch_assoc()) 
            {
                for($i = 0; $i < sizeof($columnNames); $i++)
                {
                    ${'field' . $i . 'name'} = $row["$columnNames[$i]"];
                }
                
                echo" <tr>";
                for($i = 0; $i < sizeof($columnNames); $i++)
                {
                    
                    echo"
                    
                    <td> ${'field' . $i . 'name'} </td>
                        ";

                }
                echo" </tr>";     
            }
            $result->free();
        } 
        ?>  
    </div>
    <script src = "Leaderboard.js"></script>
</body>