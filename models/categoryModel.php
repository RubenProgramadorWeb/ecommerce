<?php
include_once DATABASE_FOLDER . 'classDatabase.php';

class categoryModel extends Database
{

    // Recordatorio de cambiar la entrada de datos por un array
    public function insertCategory($category_name, $category_photo)
    {
        $sql = "INSERT INTO user (category_name, category_photo) values('" . $category_name . "','" . $category_photo . "')";

        $this->Connect()->query($sql);
    }
    public function listCategory($c)
    {
        $sql = "SELECT * FROM category ORDER BY category_id DESC LIMIT " . $c;
        $result = $this->Connect()->query($sql);
        $aux = $result->fetch_all();
        return $aux;
    }

    public function listArticle($a, $cat)
    {
        $sql = "SELECT * FROM article WHERE article_category_id =$cat ORDER BY article_id DESC LIMIT " . $a;
        $result = $this->Connect()->query($sql);
        $aux = $result->fetch_all();
        return $aux;
    }

    public function totalCategory()
    {
        $sql = "SELECT * FROM category";
        $result = $this->Connect()->query($sql);
        return $result->num_rows;
    }
    public function deleteCategory($category_id)
    {
        $sql = "DELETE FROM category WHERE category_id=" . $category_id;
        $this->Connect()->query($sql);
    }

}

?>