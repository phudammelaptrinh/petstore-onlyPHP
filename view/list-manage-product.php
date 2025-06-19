<?php

include_once("controller/cProduct.php");

// se co 3 dong
$p = new cProduct();
$tblProduct = $p->getAllProduct();
$dem = 1;

// check ket voi 
// truong hop 1 : gan bang === -2 thi se loi lien quan toi authentication, 
// truong hop 2 : gan bang === -1 thi se loi lien quan toi database, 
// truong hop 3 : co du lieu thi se tao bang 

if ($tblProduct === -2) {

  echo "Loi server, vui long lien he voi admin!";

} elseif ($tblProduct === -1) {
  echo "No data recording!";
} else {
  // tao cot 
  echo '<table>
  <tr>
    <th>STT</th>
    <th>Name</th>
    <th>Image</th>
    <th>Price</th>
    <th>InputPrice</th>
    <th>SalePrice</th>
    <th>Quantity</th>
    <th>Action</th>
  </tr>';
  
  // du lieu 
  while ($row = $tblProduct->fetch_assoc()) {
    // folder mapping
    $imagePath = $p->getImagePath($row['idloaisanpham'], $row['hinhanh']);
    
    echo "<tr>";
    echo "<td>" . $dem . "</td>";
    echo "<td>" . $row['tensanpham'] . "</td>";
    echo "<td><img src='" . $imagePath . "' height='100px'></td>"; // sua nhe: dua vao td
    echo "<td>" . number_format($row['dongia'], 0, ',', '.') . "</td>";
    echo "<td>" . number_format($row['giagoc'], 0, ',', '.') . "</td>";
    echo "<td>" . $row['giaban'] . "</td>";
    echo "<td>" . $row['soluongton'] . "</td>";
    
    // action
    echo "<td><a href='#' style='color:green' >Edit</a>| <a href='#' style='color:red'>Delete</a></td>";
    
    echo "</tr>";
    $dem++;
  }
  
  // dong the
  echo '</table>';
}

?>