<?php
    $con =new mysqli('localhost','root','','first-db-pratice');
    if(!$con){
       die(mysqli_error($con));
    }
?>