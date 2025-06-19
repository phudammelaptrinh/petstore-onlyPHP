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
}

?>