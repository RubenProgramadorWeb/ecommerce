<?php

include_once MODELS_FOLDER . 'articleModel.php';

class articleController
{
    public function insertArticle()
    {
        $article = new articleModel;
        $article->insertArticle($_POST['article_name'], $_POST['article_description'], $_POST['article_price'], $_POST['article_date'], $_POST['article_quantity'], $_POST['article_photo']);

        header('Location: index.php');
    }
}