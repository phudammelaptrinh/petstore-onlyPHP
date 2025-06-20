<?php 

include_once('mDatabase.php');

class mTypeProduct{

  public function selectAllTypeProduct(){
    $p = new tmdt();
    $conn = $p->mConnect();
    if(!$conn){
      echo 'Kết nối thât bại, liên hệ với admin';
    }
    else{
      $strquery = "select * from loai_sanpham";
      $result = $conn->query($strquery);
      $p->mDisconnect($conn);
      return $result;
    }
    //khong duoc return khi dong ket noi
   }

}

?>