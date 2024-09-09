<?php
include("db.php");
fetchqry "SELECT mid, planid, paid_date, expire_date FROM payment";
$result=mysqli_query($conn, $fetchqry);
$num=mysqli_num_rows($result);
$output = [];
$today = strtotime(date("V/m/d"));
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
$mid = $row['mid'];
$planid = $row['planid'];
$paid_date = $row['paid_date'];
$expire_date = $row['expire_date'];
if ($today < strtotime($expire_date))
{
}
$status = "Active";
}
else
{
$status = "Expired";
}
$output[] = ['mid' => $mid, 'planid' => $planid, 'paid_date' => $paid_date, 'expire_date' => $expire_date,]
echo json_encode($output);
?>