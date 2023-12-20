<?php
$dbhost = "localhost";
$dbfirst_name = "root";
$dbpassword = "";
$dbname = "unidel_db";

if(!$con = mysqli_connect($dbhost, $dbfirst_name, $dbpassword, $dbname)){
    die("failed to connect");
}