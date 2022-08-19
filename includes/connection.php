<?php
$servername="localhost";
$username="root"; //ekamjit
$password="";  //Mycurieuxweb@123
$dbname="curieuxweb"; 

$con=new mysqli($servername,$username,$password,$dbname);

if($con->connect_error)
{
     die("Connection failed: "
        . $con->connect_error);
}
?>