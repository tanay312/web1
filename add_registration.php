<?php
include ("db.php");
if ($_SERVER['REQUEST METHOD'] =='POST') {
$mid= $_POST["mno"];
$name= $_POST["pname"];
$nic = $_POST["nic"];
$gender= $_POST["gender"];
$phone= $_POST["phone"];
$joindate $_POST["dob"];
$econtact= $_POST["ecp"];
$relationship= $_POST["Relationship"];
$epno= $_POST["ephone"];
$plan= $_POST["plan"];
$price $_POST['price'];
$query-"INSERT INTO members(mid,name,nic,gender, phone, joindate, relationship, epno) VALUES 

('$mid', '$name', '$nic', '$gender' , '$phone', '$joindate', '$relationship', '$epno');

if(mysqli_query($conn, $query)==1)
{
    $last_id mysqli_insert_id($conn); 

    $query = select from plan where pid='$plan";

$result-mysqli_query($conn, $query1);
if($result)
{
$value-mysqli_fetch_row($result);
date_default_timezone_set("Asia/Colombo");
$d=strtotime("+".$value[2]." Months");
$cdate=date("d-m-Y"); //current date
$expiredate=date("d-m-Y",$d); 
//adding validity retrieve from plan to current date
//inserting into enrolls to table of corresponding userid $query2- INSERT INTO payment (mid, planid, paid_date,expire_date,month, year)
VALUES ('$mid", "Splan', 'Scdate', '$expiredate', MONTH (CURRENT DATE()), YEAR (CURRENT_DATE()));
if(mysqli_query($conn, $query2)==1)
{
    echo 1;
}
else
{
    echo 0;
}
}
}

?>