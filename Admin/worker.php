<?php 
session_start();

function addInfo()
{   
    $servername = "localhost";
    $database = $_SESSION["dbName"];
    $username = "root";
    $password = "";
    $column = "";
    $values = "";
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    if($conn->connect_error)
    {
        die("Connection Failed " . $conn->connect_error);
    }    
    
    if(isset($_POST["tableName"]) == false)
    {
        $tableName = $_SESSION["tableName"];
    }
    else
    {
        $tableName = $_POST["tableName"];
        $_SESSION["tableName"] = $_POST["tableName"];
    }
            /* Column Names */
    $query = "SHOW COLUMNS FROM $tableName";
    $db = mysqli_query($conn, $query);
    while($set = mysqli_fetch_row($db))
    {
        $columnNames[] = $set[0];
    }
    
    /* Values of form data stored in variables */
    for($i = 0; $i < (sizeof($_POST) - 1); $i++)
    {
        ${'value' . $i} = $_POST["value$i"];          
    }
    /* Construct the query */
    for($v = 0; $v < (sizeof($_POST) - 1); $v++)
    {   

        $column .= $columnNames[$v] . ", ";
        $values .= "'" .${'value' . $v} . "'" . ", ";
    } 
    /* Remove last characters */
    $column = rtrim($column, ", ");
    $values = rtrim($values, ", ");

    $query = "INSERT INTO $tableName ($column) VALUES ($values)"; 
    
    if(mysqli_query($conn, $query))
    {
        echo "
            <div class = 'omega-container'>
            <div class = 'bg-img'>
            <div class = 'modal1'>
            <div class = 'modal-content'>
            <img src = '../Media/Simple1.gif' alt = 'Avatar' style = 'height: auto;'class = 'avatar'>
            <br><br><br><br><br><br><br><br>
            <div class = 'text'>Query successful!<br></div>  
            <button class = 'button' onclick = 'window.location.href = `Admin.php`;'>Proceed</button>
        ";
    } 
    else
    {
        echo "
        <div class = 'omega-container'>
        <div class = 'bg-img'>
        <div class = 'modal1'>
        <div class = 'modal-content'>
        <img src = '../Media/Simple1.gif' alt = 'Avatar' style = 'height: auto;'class = 'avatar'>
        <br><br><br><br><br><br><br><br>
        <div class = 'text'>Query unsuccessful!<br></div>  
        <button class = 'button' onclick = 'window.location.href = `Admin.php`;'>Proceed</button>
        ";
    }
       
}

function updateInfo()
{
    $servername = "localhost";
    $database = $_SESSION["dbName"];
    $username = "root";
    $password = "";
    $tableName = "";
    $ID = $_POST["ID"]; /* Identification */
    $changeID = $_POST["changeID"]; /* old value */
    $newID = $_POST["newID"];   /* new value */
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    if($conn->connect_error)
    {
        die("Connection Failed " . $conn->connect_error);
    } 
        /* Table Name */
    if(isset($_POST["tableName"]) == false)
    {
        $tableName = $_SESSION["tableName"];
    }
    else
    {
        $tableName = "leaderboard";
    }
            /* Column Names */
    $query = "SHOW COLUMNS FROM $tableName";
    $db = mysqli_query($conn, $query);
    while($set = mysqli_fetch_row($db))
    {
        $columnNames[] = $set[0];
    }


    $query = "UPDATE $tableName SET $changeID = '$newID' WHERE sku = '$ID'";


    if(mysqli_query($conn, $query))
    {
        echo "
            <div class = 'omega-container'>
            <div class = 'bg-img'>
            <div class = 'modal1'>
            <div class = 'modal-content'>
            <img src = '../Media/Simple1.gif' alt = 'Avatar' style = 'height: auto;'class = 'avatar'>
            <br><br><br><br><br><br><br><br>
            <div class = 'text'>Query successful!<br></div>  
            <button class = 'button' onclick = 'window.location.href = `Admin.php`;'>Proceed</button>
        ";
    } 
    else
    {
        echo "
        <div class = 'omega-container'>
        <div class = 'bg-img'>
        <div class = 'modal1'>
        <div class = 'modal-content'>
        <img src = '../Media/Simple1.gif' alt = 'Avatar' style = 'height: auto;'class = 'avatar'>
        <br><br><br><br><br><br><br><br>
        <div class = 'text'>Query unsuccessful!<br></div>  
        <button class = 'button' onclick = 'window.location.href = `Admin.php`;'>Proceed</button>
        ";
    }
    
}

function deleteInformation()
{
    $servername = "localhost";
    $database = "api-database";
    $tableName = "leaderboard";
    $username = "root";
    $password = "";
    $delID = $_POST["delID"];
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    if($conn->connect_error)
    {
        die("Connection Failed " . $conn->connect_error);
    }    

    $query1 = "DELETE FROM $tableName WHERE `Player-Name` = '$delID'";
    
    if(mysqli_query($conn, $query1))
    {
        echo "
            <div class = 'omega-container'>
            <div class = 'bg-img'>
            <div class = 'modal1'>
            <div class = 'modal-content'>
            <img src = '../Media/Simple1.gif' alt = 'Avatar' style = 'height: auto;'class = 'avatar'>
            <br><br><br><br><br><br><br><br>
            <div class = 'text'>Query successful!<br></div>  
            <button class = 'button' onclick = 'window.location.href = `Admin.php`;'>Proceed</button>
        ";
    } 
    else
    {
        echo "
        <div class = 'omega-container'>
        <div class = 'bg-img'>
        <div class = 'modal1'>
        <div class = 'modal-content'>
        <img src = '../Media/Simple1.gif' alt = 'Avatar' style = 'height: auto;'class = 'avatar'>
        <br><br><br><br><br><br><br><br>
        <div class = 'text'>Query unsuccessful!<br></div>  
        <button class = 'button' onclick = 'window.location.href = `Admin.php`;'>Proceed</button>
        ";
    }

}

function emptyInformation()
{
    $servername = "localhost";
    $database = "api-database";
    $username = "root";
    $password = "";
    /* Get the Informations Name */
    $tableName = "leaderboard";
    $s_name = $_POST["seasonName"];
    $s_start = $_POST["seasonSDate"];
    $s_end = $_POST["seasonEDate"];

    $conn = mysqli_connect($servername, $username, $password, $database);
    if($conn->connect_error)
    {
        die("Connection Failed " . $conn->connect_error);
    }    

            /* Column Names */
       
    $query = "SHOW COLUMNS FROM $tableName";
    $db = mysqli_query($conn, $query);
    if($db == FALSE)
    {
        header("location: ../System-messages/error.html");  
    }

    
    $query = "TRUNCATE $tableName";

    $query2 = "UPDATE season SET `Season-name` = '$s_name',`Season-Start` = '$s_start',`Season-End` = '$s_end' 
    WHERE `Admin`  = 'admin'";

    if(mysqli_query($conn, $query) && mysqli_query($conn, $query2))
    {
        echo "
            <div class = 'omega-container'>
            <div class = 'bg-img'>
            <div class = 'modal1'>
            <div class = 'modal-content'>
            <img src = '../Media/Simple1.gif' alt = 'Avatar' style = 'height: auto;'class = 'avatar'>
            <br><br><br><br><br><br><br><br>
            <div class = 'text'>Query successful!<br></div>  
            <button class = 'button' onclick = 'window.location.href = `Admin.php`;'>Proceed</button>
        ";
    } 
    else
    {
        echo "
        <div class = 'omega-container'>
        <div class = 'bg-img'>
        <div class = 'modal1'>
        <div class = 'modal-content'>
        <img src = '../Media/Simple1.gif' alt = 'Avatar' style = 'height: auto;'class = 'avatar'>
        <br><br><br><br><br><br><br><br>
        <div class = 'text'>Query unsuccessful!<br></div>  
        <button class = 'button' onclick = 'window.location.href = `Admin.php`;'>Proceed</button>
        ";
    }
}

?>
<head>
<link rel = "stylesheet" type = "text/css" href = "../Main.css" ></link>   
</head>
<body>
<!--
<div class = "background-image">
    <div class = "modal1"></div>
</div>

-->


<!-- success -->
<?php 
    if(isset($_POST['addBtn']))
    {
        addInfo();
    } 
    else if(isset($_POST['updateBtn']))
    {
        updateInfo();
    }
    else if(isset($_POST['delDbBtn']))
    {
        deleteInformation();
    }
    else if(isset($_POST['emptyTb']))
    {
        emptyInformation();
    }   
    else
    {
        header("Location: ../System-messages/error.html");
    }
?>
</body>




