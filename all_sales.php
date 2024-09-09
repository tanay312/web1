<?php
Enclude("db.php");
if(isset($_POST["from_date"], $_POST["to_date"]))
{
    $fdate $ POST["from_date"];
    $todate $ POST["to_date"];

    $fnewDate = date("d-m-V", strtotime($fdate));
    $tonewDate = date("d-m-Y", strtotime($todate));

    $stmt $conn->prepare("SELECT m.mid, m.name,p.amount,pay.month,pay.year,pay.paid_date 
    FROM members m INNER JOIN payment pay on m.mid pay.mid INNER JOIN plan pon p.pid pay.planid

    WHERE pay.paid date BETWEEN $fnewDate." AND $tonewDate."");
    $stmt->bind_result($mid, $name, $amount, $month, $year, Spaid_date);

    if ($stmt->execute()) {
        while ($stmt->fetch()) {
            $output[] array("mno"=> $mid, "name" => $name, "amount" => $amount, 
            "month" => $month, "year" => $year, "paydate" -> Spaid_date);
        }
        echo json_encode($output);
    }
    $stmt->close();
}