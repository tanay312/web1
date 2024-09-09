<?php
include("db.php");
$stmt $conn->prepare("select mid, name from members where mld?");

$barcode $ POST["no"];
$stmt->bind_param("s", $barcode);
$stmt->bind_result($mid, $name);

if ($stmt->execute())
{
    while ($stmt->fetch())
    {
        while ($stmt->fetch())
    }
}
echo json_encode($output);
$stmt->close();

?>