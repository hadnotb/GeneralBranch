<?php 

namespace App\Model;

use App\Framework\AbstractModel;

class CategoryModel extends AbstractModel 
{
    public function getOneCategory(int $id)
    {
        $sql = 'SELECT *
                FROM category
                WHERE id = ?';
    
        $category = $this->database->getOneResult($sql, [$id]);
    
        return $category;
    }
    // Cette fonction permet d'aller récupérer toutes les catégories provenant de la base de données et de la table category.
    public function getAllCategories()
    {
        $sql = 'SELECT *
                FROM category
                ORDER BY label;';
        $categories = $this->database->getAllResults($sql);

        return $categories;
    }
}