<?php 
include_once("controller/cUser.php");

$p = new cUser();
$tblUser = $p->getAllUser();
$dem = 1;
?>

<!-- CSS trực tiếp -->
<style>
table {
  width: 80%;
  margin: 20px auto;
  border-collapse: collapse;
  font-family: Arial, sans-serif;
  box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
}

th,
td {
  padding: 10px 12px;
  border: 1px solid #ccc;
  text-align: center;
}

th {
  background-color: #f0f0f0;
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
if ($tblUser === -2) {
  echo "Lỗi server, vui lòng liên hệ với admin!";
} elseif ($tblUser === -1) {
  echo "No data recording!";
} else {
  echo '<table>
  <tr>
    <th>STT</th>
    <th>Name of user</th>
    <th>Username</th>
    <th>Password</th>
    <th>Gender</th>
    <th>Action</th>
  </tr>';

  while ($row = $tblUser->fetch_assoc()) {
    $genderString = $row['gender'] == 1 ? 'male' : 'female';

    echo "<tr>";
    echo "<td>" . $dem . "</td>";
    echo "<td>" . $row['fullname'] . "</td>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";
    echo "<td>" . $genderString . "</td>";
    echo "<td><a href='#' style='color:green'>Edit</a> | <a href='#' style='color:red'>Delete</a></td>";
    echo "</tr>";

    $dem++;
  }

  echo '</table>';
}
?>