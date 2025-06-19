<?php 

include_once('mDatabase.php');

class mProduct{

  public function selectAllProduct(){
    $p = new tmdt();
    $conn = $p->mConnect();
    if(!$conn){
      echo 'Không có lấy vợ lo cho mình  được đâu man ơi!';
    }
    else{
      $strquery = "select * from sanpham";
      $result = $conn->query($strquery);
      $p->mDisconnect($conn);
      return $result;
    }
    //khong duoc return khi dong ket noi
   }

}

?>