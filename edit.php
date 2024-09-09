<?php

$servername="localhost";
$username="root";
$password="";
$database="member_db";

$connection= new mysqli($servername, $username, $password, $database);

$id="";
$name="";
$email="";
$phone="";
$address="";

$errorMessage="";
$successMessage="";
if($_SERVER['REQUEST_METHOD']=='GET'){
    //GET =SHOW
    if (!isset($_GET["id"])) {
        header("location: member_db");
        exit;
    }
    $id = $_GET["id"];

    $sql = "SELECT FROM clients WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location:member_db");
        exit;
    }

    $name = $row["name"];
    $email = $row["email"];
    $phone = $row["phone"];
    $address = $row["address"];
}
else{
    //POST=UPDATE
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
}

do{
    if( empty($name)||empty($email)||empty($phone)||empty($address)) {
        $errorMessage ="All the fields are required";
        break;
    }
    $sql = "UPDATE member" .
        "SET name ='$name', email = '$email', phone = '$phone', address = '$address' " .
        "WHERE id = $id";

    $result = $connection->query($sql);

    if (!$result){
        $errorMessage = "Invalid query: " $connection->error;
        break;
    }

    $successMessage="member added correctly";

    header("location:member_db");
    exit;

}while(true)
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
            <input type="hidden" name="id" value="<?php echo $id; ?>">
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