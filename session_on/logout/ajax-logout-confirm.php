<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>WebDev</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">



<link href="../../bootstrap/css2/animation.css" rel="stylesheet">  
<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet"> 

<style type="text/css">

.logout-form {width: 80%;
                text-transform: capitalize;
                margin: 0 auto;
                text-align: center; background-color: lightgrey;
                position: fixed;
                color: black;
                right: 0; left: 0%;
                font-size: 18px;
                font-weight: bold;
                border: inset 3px black;
                border-radius: 10px;
                padding: 5%;

            }
#confirms {width: 80%; margin: 2% ; }            

</style>

</head>
<body>
	<br>
<div class="logout-form">

<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
are you sure you want to logout ?
</div>
</div>

<br><br>
<div class="row">

<div class="col-sm-6 col-md-6 col-lg-6">
<a id="confirms" href="logout/logout-confirmation.php" class="btn btn-success">yes</a>
</div>

<div class="col-sm-6 col-md-6 col-lg-6">
<a id="confirms" href="index.php" class="btn btn-danger">no</a>
</div>

</div>
</div>
<br><br>
</body>


<script src="../../bootstrap/js/bootstrap.bundle.min.js"></script>