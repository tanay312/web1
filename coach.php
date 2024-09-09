<?php
if(isset($_REQUESR["submit"])){
     
    $id = $_REQUEST["id"];
    $name = $_REQUEST["name"];
    $date = $_REQUEST["date"];
    $experience = $_REQUEST["experience"];


    $ins = "INSERT into coach(id,name,experience,date)  VALUES('$id','$name','$date','$experience')";
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
  <a class="navbar-brand" href="Billing.php"><img src="logo.jpg" alt="Tuitions Tonight Logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Fitness class Management System</a>
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
      <label for="inputEmail4"> ID</label>
      <input type="text" name="id" class="form-control" id="inputEmail4" placeholder="ID">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4"> Name</label>
      <input type="text" name="name" class="form-control" id="inputPassword4" placeholder="NAME">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Date of birth</label>
    <input type="text" name ="billing data" class="form-control" id="inputAddress" placeholder="Date of birth">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Experience</label>
    <input type="text" name = "Experience" class="form-control" id="inputAddress2" placeholder="Experience">
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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>