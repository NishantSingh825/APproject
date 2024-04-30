<?php
//script to connect to the DB
$conn =  new mysqli("localhost", "root", "", "collegee");

if(!$conn){
    echo "Connection failed";
}

?>