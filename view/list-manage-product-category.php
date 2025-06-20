<?php
// trang quan ly loaisanpham
include_once("controller/cTypeProduct.php");

$p = new cTypeProduct();
$tblTypeProduct = $p->getAllTypeProduct();
$dem = 1;
?>

<!-- CSS trực tiếp -->
<style>
table {
  width: 60%;
  margin: 20px auto;
  border-collapse: collapse;
  font-family: Arial, sans-serif;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

th,
td {
  padding: 12px 15px;
  border: 1px solid #ccc;
  text-align: center;
}

th {
  background-color: #f7f7f7;
  font-weight: bold;
}

tr:nth-child(even) {
  background-color: #f9f9f9;
}

tr:hover {
  background-color: #eef;
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
if ($tblTypeProduct === -2) {
  echo "Lỗi server, vui lòng liên hệ với admin!";
} elseif ($tblTypeProduct === -1) {
  echo "No data recording!";
} else {
  echo '<table>
    <tr>
      <th>STT</th>
      <th>Name cate product</th>
      <th>Action</th>
    </tr>';

  while ($row = $tblTypeProduct->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $dem . "</td>";
    echo "<td>" . $row['tenloaisanpham'] . "</td>";
    echo "<td><a href='#' style='color:green'>Edit</a> | <a href='#' style='color:red'>Delete</a></td>";
    echo "</tr>";
    $dem++;
  }

  echo '</table>';
}
?>