<html> <head>
<title> 222Display Customer Information and Select to See Detail111</title>
</head>
<body>

<?php
require "connect.php";
$sql = "SELECT Name,Birthdate,Email FROM customer";
$stmt = $conn->prepare($sql);
$stmt->execute();
?>

<table width="800" border="1">
  <tr>
    
    <th width="140"> <div align="center">Name </div></th>
    <th width="120"> <div align="center">Birthdate </div></th>
    <th width="100"> <div align="center">Email </div></th>
    
  </tr>

 <!-- ไปทีละบรรทัด -->
<?php
  while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>


    <td><?php echo $result["Name"]; ?></td>
	<td><?php echo $result["Birthdate"]; ?></div></td>
    <td><?php echo $result["Email"]; ?></td>
    
    
  </tr>

<?php
  }
?>

</table>

<?php
$conn = null;
?>

</body>  </html>