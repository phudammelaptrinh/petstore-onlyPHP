<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng ký</title>
</head>

<body>
  <div class="box">
    <h2>Đăng nhập tài khoản </h2>
    <form action="" method="POST" name="formLogin">
      <input type="text" name="txtUsername" placeholder="Nhập username" class="input" required><br>
      <input type="password" name="txtPassword" placeholder="Nhập password" class="input" required><br>
      <input type="submit" name="btnDN" value="Đăng nhập" id="button">
      <input type="reset" name="btnReset" value="Nhập lại" id="button">
    </form>
  </div>
  <?php 
  
  if(isset($_POST["btnDN"])){

    include_once("controller/cUser.php");
    $p = new cUser();
    $result = $p->cLogin($_POST['txtUsername'],$_POST['txtPassword']);
    switch($result){
      case 'true':
        echo "<script>window.alert('Đăng nhập vào thành công'); window.location.href='index.php';</script>";
        break;
      case 'false':
        echo "<script>window.alert('Đăng nhập không thành công'); window.location.href='index.php?page=login';</script>";
        break;
      default: 
        echo '<script>window.alert("Lỗi, đăng nhập"); window.location.href="index.php?page=login";</script>';
       
    }
  }

  ?>
</body>

</html>