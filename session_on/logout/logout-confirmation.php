<?php include '../../connection/config.php'; ?>


<?php 
session_start();


// remove all session variables
session_unset();

// destroy the session
session_destroy();


header('location:../../index.html');

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>WebDev</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">



<link href="../../bootstrap/css2/animation.css" rel="stylesheet">  
<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet"> 


</head>

