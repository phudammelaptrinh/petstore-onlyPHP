<?php
include_once('controller/cProduct.php');
$p = new cProduct();
$tblProduct = $p->getAllProduct();

if ($tblProduct === -2) {
  echo 'Ashiba, lỗi kết nối ';
} elseif ($tblProduct) {
  $dem = 1;
  echo '<table><tr>';
  while ($row = $tblProduct->fetch_assoc()) {
    echo "<td>";
    $imagePath = $p->getImagePath($row['idloaisanpham'], $row['hinhanh']);
    
    echo '<img src="' . $imagePath . '" height="100px"><br>';
    echo "<b>".$row['tensanpham'] ."</b> <br>";
    echo "<p style='color:red'>".$row['dongia'] . "</p><br>";
    echo "</td>";

    if ($dem % 5 == 0) echo "</tr><tr>";
    $dem++;
  }
  echo '</tr></table>';
  
} else {
  echo 'Không có dữ liệu.';
}
?>