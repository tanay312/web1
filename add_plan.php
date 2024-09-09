<?php
include("db.php");

if($conn ->connect_error)
{
    die("connection_failed: " .$conn->connect_error);
}
if($_SERVER['REQUEST METHOD']== 'POST')
{
    $stmt = $conn->prepare("INSERT INTO plan (planname, validity, amount) VALUES (?,?,?)");
    $stmt->bind_param("sss", $planname, $validity, $amount);
    
    $planname = $_POST["planname"];
    $validity= $_POST["validity"];
    $amount= $_POST["amount"];
    if ($stmt->execute())
    {
        echo 1;
    }
    
    else
    {
        echo 0;
    }
   
    $stmt->close();
}
?>