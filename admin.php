<?php
session_start();
error_reporting();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/adminstyle.css">
  <title>Trang chủ</title>
</head>

<body>
  <div class="container">
    <div class="header">
      <img src="images/cat-icegif-14.gif" width="100%" height="100px">
    </div>
    <div class="nav">
      <?php include("view/nav.php")?>
    </div>
    <div class="aside">
      <h2><i>TRANG ADMIN</i></h2>
      <a href="admin.php?page=product-category">Danh sách loại</a>
      <a href="admin.php?page=product">Sản phẩm</a>
      <a href="admin.php?page=user">Người dùng</a>
    </div>
    <div class="content">
      <?php 
      if(isset($_REQUEST["page"])) {
        $p = $_REQUEST["page"];
      
        switch($p){
          case "product-category":
            include_once("view/list-manage-product-category.php");
          break;
          case "product":
            include_once("view/list-manage-product.php");
          break;
           case "user":
            include_once("view/list-manage-user.php");
          break;
        }
      }
      else{
        include_once("view/list-product.php");
      }

      ?>
    </div>
    <div class="footer">
      21089881_HoTruongMinhPhu
    </div>
  </div>
</body>

</html>