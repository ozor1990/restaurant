<?php include '../connection/config.php'; 
session_start();

if (!isset($_SESSION['email']) and (!isset($_SESSION['password']))) {

die("Access Denied");
}


?>

<?php 

$Email = $_SESSION['email'];
$Password = $_SESSION['password'];

$Select2 = "SELECT * FROM user_register_table WHERE Email = '".$Email."' AND Password = '".$Password."'";
$ResultSelect2 = mysqli_query($link , $Select2);

while ($row = mysqli_fetch_assoc($ResultSelect2)){
$userFname = $row['FirstName'];
$userLname =  $row['LastName'];
$userPhone = $row['Phone'];
$UserId = $row['ID'];
$UserCreated = $row['Date'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>WebDev</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">



<link href="../bootstrap/css2/animation.css" rel="stylesheet">  
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"> 


</head>
<style type="text/css">

body {background-image: url("../webimages/background-1.jpg");
background-position: center;
background-repeat: no-repeat;
color: white;
font-weight: bold;}

.navbar-toggler-icon {
    background-image: url("webimages/toggle-icon.jpg");
    background-repeat: no-repeat;
    background-position: center;
}

.navbar {border:4px inset black; margin-top:2%;
color: #000080;}

.navbar a {color: #000000 ; font-family: sans-serif;}

#username {font-size: smaller;
          font-weight: bold; font-style: italic;
            text-shadow:1px 1px 1px blue;
            border-bottom:1px dashed blue;
            border-left:1px dashed blue;
            border-radius: 50px;
            padding: 10px;
            background-color: lightgrey;}

#user-informations {
              max-height:400px;
                width:100%;
                margin: 0 auto;
                text-align: center; background-color: lightgrey;
                display: flex; justify-content:center;
                 margin-top:5%;
                 
                 right: 0; left: 0;
                 overflow: scroll;
                 padding:0 2%;
                 border: 1px dashed black;
                 color: black;
}            


#user-h3 {font-size: 14px;}

#user-h4 {font-size: 12px;
              background-color: black;
              color: green;}


#toggle-img {width:35px; height: 35px;text-align: center;
            position: absolute;}

</style>
<body>
<div class="container"> <!-- first container div  -->
<div  class="wrap1">	
<div class="row">

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <button onclick="loadDoc1()" id="username" class="navbar-brand" href="#"><?php echo "$userFname $userLname"; ?></button>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <img id="toggle-img" src="../webimages/toggle-icon.jpg">
     <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>

        

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
          </form>
        <li class="nav-item">
          <button class="btn btn-danger" onclick="logout()" id="logout">LogOut</button>
        </li>


      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    
    </div>
  </div>
</nav>



</div>

<div class="row">
<div class="login-form">    
<div class="col-sm-10 col-md-10 col-lg-10" id="login-form-col">



</div>

<!-- user informationsssssssssssssssssssssssssssssssssss  starts-->
<div class="col-sm-10 col-md-10 col-lg-10" id="user-informations" style="display:none;">

<div class="row">

<div class="col-sm-4 col-md-4 col-lg-4">
  <h3 id="user-h3">User Name :</h3>
<h4 id="user-h4"><?php echo "$userFname $userLname"; ?></h4>

</div>

<div class="col-sm-4 col-md-4 col-lg-4">
 <h3 id="user-h3">Email Address</h3>
<h4 id="user-h4"><?php echo "$Email"; ?></h4>

</div>

<div class="col-sm-4 col-md-4 col-lg-4">
 <h3 id="user-h3">Password :</h3>
<h4 id="user-h4"><?php echo "$Password"; ?></h4>

</div>

</div> <!--row   ends-->


<div class="row">   <!--new    row   startsssss-->

<div class="col-sm-4 col-md-4 col-lg-4">
  <h3 id="user-h3">Phone :</h3>
<h4 id="user-h4"><?php echo "$userPhone"; ?></h4>

</div>

<div class="col-sm-4 col-md-4 col-lg-4">
 <h3 id="user-h3">Time Created</h3>
<h4 id="user-h4"><?php echo "$UserCreated"; ?></h4>

</div>

<div class="col-sm-4 col-md-4 col-lg-4">
 <h3 id="user-h3">User Id :</h3>
<h4 id="user-h4"><?php echo "$UserId"; ?></h4>

</div>

</div> <!--row   ends-->





</div><!-- user informationsssssssssssssssssssssssssssssssssss    ends-->


<!-- user informationsssssssssssssssssssssssssssssssssss    ends-->

</div>

</div> <!-- end of first container div   -->
<!-- break break break break break break break break break  -->
<!-- break break break break break break break break break  -->


</body>
<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>




<script>
function logout() {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document. getElementById("login-form-col").innerHTML = xhttp.responseText;
        }
    }
    xhttp.open("GET", "logout/ajax-logout-confirm.php", true);
    xhttp.send();
}
</script>


<script>
function loadDoc1() {
  var x = document.getElementById("user-informations");
  var y = document.getElementById("username");
  if (x.style.display === "none") {
    y.style.borderRadius = "0px";
    y.style.backgroundColor = "black";
    y.style.color = "green";
    y.style.textShadow = "1px 1px 1px green";
    x.style.display = "block";
  } else {
    x.style.display = "none";
    y.style.borderRadius = "50px";
    y.style.backgroundColor = "lightgrey";
    y.style.color = "black";
    y.style.textShadow = "1px 1px 1px blue";
  }
}
</script>


<script type="text/javascript">
$(document).click(function (e) {
    if ($(e.target).is('#openModal')) {
        $('#openModal').fadeOut(500);
    }

});

</script>
