<?php
if (isset($_GET['del']) && !empty($_GET['del'])) {
    $deleteLog = new userController;
    $deleteLog->deleteLog($_GET['del']);
}
$listLogs = new userController;
echo $listLogs->listLog();
?>