<?php
// Incluimos el header del dashboard.
include_once 'header.php';
?>
<main>
    <article>
        <?php
        $cat = new categoryController;
        $cat->listCategoryView();
        ?>
    </article>
</main>
<?php
// Incluimos el footer del dashboard.
include_once 'footer.php';
?>