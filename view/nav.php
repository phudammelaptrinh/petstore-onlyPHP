<div class="menu"></div>
<div class="menu-link">
  <?php 
    
    
    if(isset($_SESSION["login"])  && $_SESSION["login"]==true){
      echo "<a href='admin.php'>Quản lý</a>";
      echo "<a href='index.php?page=logout'>Đăng xuất</a>";
    }
    else{
      echo "<a href='index.php?page=login'>Đăng nhập</a>";
      echo "<a href='index.php?page=signup'>Đăng ký</a>";
    }
  ?>
</div>
<div class="search-form">
  <form action="index.php" method="post" name="frmSearch">
    <input type="search" name="btnSearch" placeholder="Tim kiem">
    <input type="submit" name="btnsub" value="LOOK" class='search-button'>
  </form>
</div>
</div>