<?php

    $database= new mysqli("localhost","root","","medicare");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>