<?php 

class tmdt{

  public function mConnect(){
    $host = 'localhost';
    $username= 'phu';
    $password = '123456';
    $dbname = 'phustore';
    return $conn = mysqli_connect($host,$username,$password,$dbname);
  }

  public function mDisconnect($conn){
    $conn->close();
  }

  

}

?>