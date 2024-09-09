<?php

include 'config.php';
if(isset($_REQUESR["submit"])){
    $id = $_REQUEST["id"];
    $name = $_REQUEST["name"];
    $period = $_REQUEST["period"];
    $id = $_REQUEST["amount"];


    $ins = "INSERT into billing(id,name,period,date,amount)  VALUES('$id','$name','$period','$amount')";
    $query = mysqli_query($connection, $ins);

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>


<!--nav bar start-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="Billing.php"><img src="fitlogo.jpg" height = "200px" width="200px" alt="WELCOME Logo"></a> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Fitness club Management System</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Billing.php">Billing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Coach.php">Coach</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="member.php">Member</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="Receptionist.php">Receptionist</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="member.php">Membership</a>
      </li>

    </ul>
  </div>
</nav>
<!--nav bar end-->



<!--Form start-->
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Member ID</label>
      <input type="text" name="id" class="form-control" id="inputEmail4" placeholder="ID">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Member Name</label>
      <input type="text" name="name" class="form-control" id="inputPassword4" placeholder="NAME">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Billing Date</label>
    <input type="text" name ="billing data" class="form-control" id="inputAddress" placeholder="Date">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Amount</label>
    <input type="text" name = "amount" class="form-control" id="inputAddress2" placeholder="Amount">
    <div class="form-group">


       <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Auto width 
<button class="btn"><i class="fa fa-save"></i> save</button>-->

<!-- Full width -->
<button class="btn" style="width:100%"><i class="fa fa-save"></i> save</button>

      <div>
    <div>
</form>
<!--Form end-->
</body>
</html>