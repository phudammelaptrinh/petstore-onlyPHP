<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
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
      <h2>Danh mục san pham</h2>
      <a href="">Food cho cat</a>
      <a href="">Food cho dog</a>
      <a href="">Cat</a>
    </div>
    <div class="content">
      <?php 
      $page = isset($_REQUEST["page"])?$_REQUEST["page"]: " ";
      switch($page){
        case "signup":
          include_once("view/signup.php");
        break;
        case "login":
          include_once("view/login.php");
        break;
        case "logout":
          include_once("view/logout.php");
        break;
        default:
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