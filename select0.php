<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select 0 เเบบง่ายสุดๆ</title>
</head>
<body>

<?php 
// require ต้องการไฟล์ เอาไฟล์นั้นมารวม
   require "connect.php";
   //ตั้งชื่อ$เป็นอะไรก็ได้
   $sql ="SELECT * 
   FROM `customer` 
   WHERE OutstandingDebt>10000";
   $stmt = $conn->prepare($sql);  // เตรียมไว้ในท่อ
   $stmt->execute();   // ยิงงงง
   $result = $stmt->fetchAll();  // fetch = ดึงง ดึงออกมาทั้งหมดเเล้วไปใส่ในตัวแปล result
   //echo  json_encode($result);
   print_r($result);  //โชว์ผลลัพธ์ทั้งหมด

?>  

</body>
</html>

