<?php 

include_once('model/mUser.php');

class cUser{

    public function cLogin($username, $password){
      $p = new mUser();
      $password = md5($password);
      $tblUser= $p->mLogin($username,$password);
      if($tblUser->num_rows>0){
       $_SESSION['login'] = true;
        return true;
      }
      else{
        return false;
      }
    }

    public function getAllUser(){
      
      $p = new mUser();
      $tblProduct = $p->selectAllUser();
      if($tblProduct == false){
        return -2; //loi ket noi
      }
      else{
        if($tblProduct->num_rows>0){
        return $tblProduct;
        }
        else{
          return -1;// khong co du lieu
        }
      } 
    }

    
}

?>