<?php

$servername="localhost";
$username="root";
$password="";
$database="member_db";

$connection= new mysqli($servername, $username, $password, $database);

$name="";
$email="";
$phone="";
$address="";

$errorMessage="";
$successMessage="";

if($_server['REQUEST METHOD']=='POST'){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];
}

    do{
        if( empty($name)||empty($email)||empty($phone)||empty($address)) {
            $errorMessage ="All the fields are required";
            break;
        }

        $sql = "INSERT INTO members (name, email, phone, address)" .
                "VALUES ('$name', '$email', '$phone', '$address')";
        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " $connection->error;
            break;
        }
        $name="";
        $email="";
        $phone="";
        $address="";

        $successMessage="member added correctly";

        header("location:/member_db");
        exit;
        
    }while (false);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>member_db</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <h2>New Member</h2>

        <?php

        if( !empty($errorMessage)){
            echo"
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>
        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" Name="name" value="<?php echo $name; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" Name="Email" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Phone</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" Name="Phone" value="<?php echo $phone; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" Name="Address" value="<?php echo $address; ?>">
                </div>
            </div>

            <?php
            echo"
            <div class="row mb-3">
                <div class='offset-sm-3 col-sm-6'>
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>$successMessage</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label></button>
            </div>
            ";
            ?>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/member_db" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>