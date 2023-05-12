<?php
session_start();
if (!isset($_SESSION['user_check'])) {
    header('Location: ../index.php');
}
include_once 'definesAdmin.php';
include_once CONTROLLERS_FOLDER . 'userController.php';
include_once CONTROLLERS_FOLDER . 'categoryController.php';
// die("mmm");

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="grid-container">
        <div class="menu-icon">
            <strong> &#9776;</strong>
        </div>
        <header class="header">
            <div class="header_search">Buscar...</div>
            <div class="header_user">
                <?= $_SESSION["user_name"]; ?>
            </div>
            <div class="header_exit">
                <!-- <input type="submit" name="" value="Salir" onclick="loadFunctionPhp();"> -->
                <a href="../index.php?controller=userController&action=destroySession" class="btn btn-primary">
                    <h3>Salir</h3>
                </a>
            </div>
        </header>
        <aside class="aside">
            <div class="aside_close-icon">
                <strong>&times;</strong>
            </div>
            <ul class="aside_list">
                <li class="aside_list-item">Usuarios</li>
                <li class="aside_list-item">Artículos</li>
                <li class="aside_list-item">Ordenes</li>
                <li class="aside_list-item">Opcion 4</li>
                <li class="aside_list-item">Configuración</li>
            </ul>
        </aside>