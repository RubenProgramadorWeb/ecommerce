<?php
if (isset($_GET['del']) && !empty($_GET['del'])) {
    $deleteUser = new userController;
    $deleteUser->deleteUser($_GET['del']);
}
$listUsers = new userController;
echo $listUsers->listUser();
?>