
<?php include "connect.php"; ?>
<?php
$stmt = $pdo->prepare("SELECT * FROM product");
$stmt->execute();

    
echo "<table border='1'>
    <tr>
        <th> รหัสสินค้า</th>
        <th> ชื่อสินค้า</th>
        <th>รายละเอียด</th>
        <th>ราคา</th>
     </tr>";
while ($row = $stmt->fetch()) {
  echo "<tr>
        <td>" . $row["pid"] . "</td>
        <td>" . $row["pname"] . "</td>
        <td>" . $row["pdetail"] . "</td>
        <td>" . $row["price"] . " </td>
      </tr>";
}
echo "/<table>";
