<?php
// echo "connect to the database <br>";


/*
 basics way to connect to the database 
 1 my sql extenction
 2 PDO
  */ 

//   connect to the database


$servername = "localhost";
$username = "root";
$password = "";




// create a connection

$conn = mysqli_connect ($servername, $username, $password);

// dic connect
if (!$conn){
    die ("sorry not connect". mysqli_connect_error());
}
else {
    echo "connection was successfull <br>"; 
}



$sql = "CREATE DATABASE dbsaif1";
$result = mysqli_query($conn, $sql);

echo ($result);

if ($result){
    echo "connect";
}

else {
    echo "disconnect". mysqli_connect_error($conn);
}






?>