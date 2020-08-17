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


$sql = "CREATE TABLE `phptrip1` ( `Sno` INT(6) NOT NULL AUTO_INCREMENT , `Name` VARCHAR(6) NOT NULL , `destnation` VARCHAR(1) NOT NULL , PRIMARY KEY (`Sno`))";

//check for the table creation


$result = mysqli_query($conn, $sql);

echo ($result);

if ($result){
    echo " the table was connect";
}

else {
    echo " the table was disconnect". mysqli_connect_error($conn);
}






?>