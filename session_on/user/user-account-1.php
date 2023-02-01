<?php include '../../connection/config.php';?>

<?php 
extract($_GET);
$Email = $_GET['No'];

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

<style type="text/css">

.user-info {height:600px;
	width:50%;
                margin: 0 auto;
                text-align: center; background-color: lightgrey;
                display: flex; justify-content:center;
                 top: 20%;
                 position: fixed;
                 right: 0; left: 0;
                 overflow-y: scroll;
                 padding:0 2%;
                 border: 1px dashed black;
                 color: black;}

            

            



</style>

</head>

<body>
<div class="user-info">
<div class="container">

<div class="row">

<div class="col-sm-4 col-md-4 col-lg-4">
<?php echo "$Email"; ?>
</div>

<div class="col-sm-4 col-md-4 col-lg-4">
helloeeeeeeeeeew
</div>

<div class="col-sm-4 col-md-4 col-lg-4">
hellosdfd
</div>

</div>

<div class="row">
<div class="col-sm-4 col-md-4 col-lg-4">
hellosssssssssssssss
</div>
	<div class="col-sm-4 col-md-4 col-lg-4">
hello
</div>
	<div class="col-sm-4 col-md-4 col-lg-4">
hello
</div>

</div>

</div>

</div>

</body>