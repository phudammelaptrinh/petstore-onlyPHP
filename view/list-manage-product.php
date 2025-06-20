<?php
include_once("controller/cProduct.php");

$p = new cProduct();
$tblProduct = $p->getAllProduct();
$dem = 1;
?>

<!-- CSS trực tiếp -->
<style>
table {
  width: 90%;
  margin: 20px auto;
  border-collapse: collapse;
  font-family: Arial, sans-serif;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

th,
td {
  padding: 10px 12px;
  border: 1px solid #ccc;
  text-align: center;
  vertical-align: middle;
}

th {
  background-color: #f2f2f2;
}

tr:nth-child(even) {
  background-color: #f9f9f9;
}

tr:hover {
  background-color: #eef;
}

img {
  max-height: 80px;
  max-width: 100px;
  object-fit: cover;
  border-radius: 8px;
}

a {
  text-decoration: none;
  font-weight: bold;
}

a:hover {
  text-decoration: underline;
}
</style>

<?php
if ($tblProduct === -2) {
  echo "Lỗi server, vui lòng liên hệ với admin!";
} elseif ($tblProduct === -1) {
  echo "No data recording!";
} else {
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

  while ($row = $tblProduct->fetch_assoc()) {
    $imagePath = $p->getImagePath($row['idloaisanpham'], $row['hinhanh']);

    echo "<tr>";
    echo "<td>" . $dem . "</td>";
    echo "<td>" . $row['tensanpham'] . "</td>";
    echo "<td><img src='" . $imagePath . "'></td>";
    echo "<td>" . number_format($row['dongia'], 0, ',', '.') . " đ</td>";
    echo "<td>" . number_format($row['giagoc'], 0, ',', '.') . " đ</td>";
    echo "<td>" . number_format($row['giaban'], 0, ',', '.') . " đ</td>";
    echo "<td>" . $row['soluongton'] . "</td>";
    echo "<td><a href='#' style='color:green'>Edit</a> | <a href='#' style='color:red'>Delete</a></td>";
    echo "</tr>";

    $dem++;
  }

  echo '</table>';
}
?>