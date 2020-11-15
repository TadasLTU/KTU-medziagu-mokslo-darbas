<?php
$servername = "ec2-52-208-175-161.eu-west-1.compute.amazonaws.com";
$username = "vfqdrdjlppnzca";
$password = "280bf09035aeffc48a00210382cf4c9217eee6c937b7a7686c677b3f805d113d";
$database = "d69qvfcqcb709k";
$port = "5432";

$GLOBALS['conn'] = pg_connect("host=$servername port=$port dbname=$database user=$username password=$password");
// if($GLOBALS['conn']) {
//     echo 'connected';
//  } else {
//      echo 'there has been an error connecting';
//  } 
?>