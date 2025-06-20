<?php 

include_once('model/mTypeProduct.php');

class cTypeProduct{

    public function getAllTypeProduct(){
      
      $p = new mTypeProduct();
      $tblTypeProduct = $p->selectAllTypeProduct();
      if($tblTypeProduct == false){
        return -2; //loi ket noi
      }
      else{
        if($tblTypeProduct->num_rows>0){
        return $tblTypeProduct;
        }
        else{
          return -1;// khong co du lieu
        }
      } 
    }


    
}

?>