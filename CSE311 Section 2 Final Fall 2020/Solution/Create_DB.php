<?php

$link = mysqli_connect("localhost","root","");

if($link ==false){
    die  ("Error could not connect." .mysqli_connect_error());
}

$sql = "CREATE DATABASE final_exam";
if(mysqli_query($link,$sql)){
    echo "Database  Successfully Created!";
}else{
    echo "ERROR: Could not  executed $sql. " . mysqli_error($link);

}

mysqli_close($link);
?>