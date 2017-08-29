<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "Pedigree";

    $conn = mysqli_connect($servername,$username,$password,$databasename);
    if(!$conn){
        echo "Couldn't connect to database";
    }else{
        echo "connected" ."<br>";
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO Register(Username,Password) VALUES ('$username','$password')";
    $query = mysqli_query($conn,$sql);

    if($query){
        echo "Register successed";
    }else{
        echo "Failed";
    }


   
?>