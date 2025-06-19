<?php 

include_once('model/mProduct.php');

class cProduct{

    public function getAllProduct(){
      
      $p = new mProduct();
      $tblProduct = $p->selectAllProduct();
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

    public function getImagePath($idloaisanpham, $filename){
          $folders = [
            1 => 'doan-cho-dog',
            2 => 'doan-cho-meo',
            3 => 'doboi-cho-thucung',
            4 => 'phukien-thucung',
            5 => 'suatam-vesinh', 
          ];
        $folder = isset($folders[$idloaisanpham]) ? $folders[$idloaisanpham] : '';
       return "images/product/$folder/$filename";
    }

    
}

?>