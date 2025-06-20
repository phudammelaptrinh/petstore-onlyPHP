<?php 

include_once('mDatabase.php');

class mUser{

  public function mLogin($username, $password){
    $p = new tmdt();
    $conn = $p->mConnect();
    $query = "select * from nguoidung where username = '$username' and password='$password'";
    return $result = $conn->query($query);
    $p->mDisconnect($conn);
   }

   public function selectAllUser(){
    $p = new tmdt();
    $conn = $p->mConnect();
    if(!$conn){
      echo 'Kết nối thất bại!, vui lòng liên hệ với admin';
    }
    else{
      $strquery = "select * from nguoidung";
      $result = $conn->query($strquery);
      $p->mDisconnect($conn);
      return $result;
    }
    //khong duoc return khi dong ket noi
   }

}

?>