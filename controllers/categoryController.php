<?php

include_once MODELS_FOLDER . 'categoryModel.php';
include_once MODELS_FOLDER . 'articleModel.php';

class categoryController
{

    public function category()
    {
        //Le paso los datos a la vista
        require(TEMPLATE_ACTIVE . "category.php");

    }
    public function insertCategory()
    {
        $category = new categoryModel;
        $category->insertCategory($_POST['category_name'], $_POST['category_photo']);

        header('Location: index.php');
    }

    public function listCategory()
    {
        $listCategory = new categoryModel;
        $list = $listCategory->listCategory(10);
        // print_r($list);
        echo "
        <table class='user_table'>
        <caption><h2>Ultimas categorías</h2></caption>
        <tr>
          <th>Nombre</th>
          <th>Imagen</th>
          <th><h1>✎</h1></th>
          <th><h1>&#128465;</h1></th>
        </tr>        
        ";
        $msg = "Estas seguro que quieres continuar?";
        foreach ($list as $categories) {
            echo "<tr>
                    <td> $categories[1]</td>
                    <td> $categories[2] </td>                    
                    <td><h1>✎</h1></td>
                    <td>                         
                        <a href='index.php?del=" . $categories[0] . "' onclick='return confirm(\" $msg  \");'>
                        <h1>&#128465;</h1>
                        </a>
                    </td> 
                </tr>";
        }
        echo "</table>";
    }

    public function listCategoryView()
    {
        $listCategory = new categoryModel;
        $list = $listCategory->listCategory(10);
        // print_r($list);
        if (!isset($_GET['cat'])) {
            ?>
            <section class="section service" aria-labelledby="service-label" id="categorias">
                <div class="container">
                    <br><br><br>
                    <p class="section-subtitle" id="service-label">CATEGORIAS</p>
                    <ul class="grid-list">

                        <?php
                        foreach ($list as $categories) {
                            ?>
                            <a href="index.php?controller=categoryController&action=category&cat=<?= $categories[0] ?>"
                                class="navbar-link">
                                <li id="liCardEnd">
                                    <div class="service-card"
                                        style="background-image: url('<?= IMAGES_FOLDER ?><?= $categories[2] ?>'); background-size: cover;">
                                        <h3 class="h4 card-title">
                                            <?= $categories[1] ?>
                                        </h3>
                                    </div>
                                </li>
                            </a>
                            <?php
                        }
                        ?>

                    </ul>
                </div>
            </section>
            <?php
        } else {
            $cat_id = $_GET['cat'];
            $listArticle = new categoryModel;
            $list = $listArticle->listArticle(10, $_GET['cat']);
            ?>
            <br><br><br>
            <section class="section project" aria-labelledby="project-label" id="destacados">
                <div class="container">

                    <p class="section-subtitle" id="project-label">CATEGORIA
                        <?= $_GET['cat'] ?>
                    </p>
                    <ul class="grid-list">
                        <?php
                        foreach ($list as $articles) {
                            // if ($articles[1] == $cat_id) {
                            ?>

                            <li>
                                <div class="project-card">
                                    <figure class="card-banner img-holder" style="--width: 560; --height: 350;">
                                        <img src="<?= TEMPLATE_IMAGES ?><?= $articles[7] ?>" width="560" height="350" loading="lazy"
                                            alt="Nullam id dolor elit id nibh" class="img-cover">
                                    </figure>
                                    <div class="card-content">
                                        <h3 class="h3">
                                            <a href="#" class="card-title">
                                                <?= $articles[2] ?> (Cod: <?= $articles[0] ?>)
                                            </a>
                                        </h3>
                                        <p class="card-text">
                                            <?= $articles[3] ?>
                                        </p>
                                        <ul class="card-meta-list">
                                            <li class="card-meta-item">
                                                <input type="submit" class="submitBtn" value="Comprar">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <?php
                            // }
                        }
                        ?>
                    </ul>
                </div>
            </section>
            <?php
        }
    }


    public function deleteCategory($category_id)
    {
        $deleteCategory = new categoryModel;
        $deleteCategory->deleteCategory($category_id);
    }

}

?>