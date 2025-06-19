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

}

?>