<?php
require "connect.php"; //หรือใช้ include

echo "<br/><br/>";
echo "This is FETCH_ASSOC result <br/>";

$sql = "SELECT*
from customer
ORDER BY CustomerID DESC";
$stmt = $conn->prepare($sql);  
$stmt->execute();   
  //วนลูปเเล้วปริ้น
while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
    print_r($result);
}

echo "<br/><br/>";
echo "This is FETCH_NUM result <br/>";
$stmt->execute();
// 2) FETCH_NUM  เลือกใช้ลำดับคอลัมน์
while ($result = $stmt->fetch(PDO::FETCH_NUM)) {
    print_r($result);
}

?>