<?php
namespace App\Model;
use App\Framework\AbstractModel;


class CategoryModel extends AbstractModel{

    public function getAllCategorie(){
        
        $sql = 'SELECT *
                FROM categorie cat';
        $categories = $this -> database -> getAllResults($sql);
    
        return $categories;
    }
    public function getOneCategorie($id){

        $sql ='SELECT * 
               FROM categorie cat 
               Where cat.idCategorie = ?';

        $categorie = $this -> database -> getOneResult($sql[$id]);
        dump($categorie);
        return $categorie;
    }

}