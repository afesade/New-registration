<?php 

    // 1. localhost
    // 2. root
    // 3. password
    // 4. Databasename


    $db = mysqli_connect("localhost", "root", "", "lr");

    if(!$db){
        echo "could not connect to Database" . mysqli_connect_error();
    }
