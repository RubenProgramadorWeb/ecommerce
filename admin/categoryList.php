<?php
if (isset($_GET['del']) && !empty($_GET['del'])) {
    $deleteCategory = new categoryController;
    $deleteCategory->deleteCategory($_GET['del']);
}
$listCategory = new categoryController;
echo $listCategory->listCategory();
?>