<?php
// EN ESTE FICHERO VAN TODOS LAS VARIABLES CONSTANTES Y DEFINES
// define("TEMPLATE_ACTIVE", "./views/todotramites/");
// define("TEMPLATE_STYLE", "./views/todotramites/css/");
// define("TEMPLATE_IMAGES", "./views/todotramites/images/");
// define("TEMPLATE_JS", "./views/templates/todotramites/js/");

define("TEMPLATE_ACTIVE", "./views/shop/");
define("TEMPLATE_STYLE", "./views/shop/css/");
define("TEMPLATE_IMAGES", "./views/shop/images/");
define("TEMPLATE_JS", "./views/shop/js/");

define('DATABASE_FOLDER', "../database/");
//La carpeta donde buscaremos los modelos
define('MODELS_FOLDER', "../models/");
//La carpeta donde buscaremos los controladores
define('CONTROLLERS_FOLDER', "../controllers/");
//Si no se indica un controlador, este es el controlador que se usará
define('DEFAULT_CONTROLLER', "indexController");
//Si no se indica una acción, esta acción es la que se usará
define('DEFAULT_ACTION', "index");
?>