<?php

//   connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbsaif1";

// create a connection

$conn = mysqli_connect ($servername, $username, $password, $database);

// dic connect
if (!$conn){
    die ("sorry not connect". mysqli_connect_error());
}
else {
    echo "connection was successfull <br>"; 
}
$name = "saifalikhan";
$role = "Devloper";
$Fcty = "dubai";
//sql query is excuted
$sql = "INSERT INTO `trip` (`Name`, `Role`, `Fcty`) VALUES ('$name', '$role', '$Fcty')";

//add a new
$result = mysqli_query($conn, $sql);

if ($result){
    echo " the table was connect";
}

else {
    echo " the table was disconnect". mysqli_connect_error($conn);
}

?>