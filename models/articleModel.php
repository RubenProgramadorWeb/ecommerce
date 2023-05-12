<?php
include_once DATABASE_FOLDER . 'classDatabase.php';

class articleModel extends Database
{
    // Cambiar a un array la entrada de datos para para que sea mas enteligible. 
    public function insertArticle($article_name, $article_description, $article_price, $article_date, $article_quantity, $article_photo)
    {
        $sql = "INSERT INTO article (article_name, article_description, article_price, article_date, article_quantity, article_photo) values('" . $article_name . "','" . $article_description . "','" . $article_price . "','" . $article_date . "','" . $article_quantity . "','" . $article_photo . "')";

        $this->Connect()->query($sql);
    }
    public function listArticle($a, $cat)
    {
        $sql = "SELECT * FROM article ORDER BY article_id DESC LIMIT " . $a;
        $result = $this->Connect()->query($sql);
        $aux = $result->fetch_all();
        return $aux;
    }

    public function totalArticle()
    {
        $sql = "SELECT * FROM article";
        $result = $this->Connect()->query($sql);
        return $result->num_rows;
    }
    public function deleteArticle($article_id)
    {
        $sql = "DELETE FROM user WHERE user_id=" . $article_id;
        $this->Connect()->query($sql);
    }

}

?>