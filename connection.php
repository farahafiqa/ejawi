<?php
//connection.php

$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="ejawi";

$conn=mysqli_connect($dbservername,$dbusername,
            $dbpassword, $dbname);
if($conn==true){
    //semak database connected
    //echo "Database connected";
}
else{
    //error connection db
    exit(1);
}
?>
© 2021 GitHub, Inc.
Terms
