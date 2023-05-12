<?php
include_once MODELS_FOLDER . 'categoryModel.php';
// interface iTemplate
// {
//     public function index();
// }
class indexController
{
    public function index()
    {
        //Le paso los datos a la vista
        require(TEMPLATE_ACTIVE . "index.php");

    }


    public function listCategoryView()
    {
        $listCategory = new categoryModel;
        $list = $listCategory->listCategory(10);
        // print_r($list);

        ?>
        <section class="section service" aria-labelledby="service-label" id="categorias">
            <div class="container">

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
    }

}
?>