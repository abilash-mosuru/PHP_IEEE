<?php
$con=new mysqli('localhost','root','mosuru321','crudoperation');
if(!$con){
    //echo "Connected";
    die(mysqli_error($con));
}

?>