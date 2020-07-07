<?php

$host = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "gallery";

 $con = mysqli_connect($host,$dbuser,$dbpass,$dbname);
	if(!$con){
      echo "MySQL Connection error!";
    }else{
      $sql =" ";
      mysqli_query($con,$sql);
    }
?>