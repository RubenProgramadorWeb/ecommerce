<?php
session_start();
// include_once './database/classDatabase.php';
// include_once './models/userModel.php';
include_once 'defines.php';
// include_once MODELS_FOLDER . 'classDatabase.php';
// include_once CONTROLLERS_FOLDER . 'userController.php';



//Obtenemos el controlador.
if (!empty($_GET['controller'])) {
    $controller = $_GET['controller'];
    // echo "Controler1: $controller <br>";
} else {
    //Si el usuario no lo introduce, seleccionamos el de por defecto.
    $controller = DEFAULT_CONTROLLER;
    // echo "Controler2: $controller <br>";
}
$class = $controller;

// Obtenemos la acción seleccionada.
// Si el usuario no la introduce, seleccionamos la de por defecto.
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
    // echo "Accion1: $action <br>";
} else {
    // Recogemos la accion por defecto que llamara al metodo
    $action = DEFAULT_ACTION;
}

//Ya tenemos el controlador y la accion
//Formamos el nombre del fichero que contiene nuestro controlador
$controller = CONTROLLERS_FOLDER . $controller . ".php";

//Si la variable ($controller) es un fichero lo requerimos si no detenemos el programa
if (is_file($controller)) {
    //  echo "Controller: $controller <br>";
    include_once($controller);
} else {
    die('El controlador no existe - 404 not found');
}

//Si la variable $action es una función la ejecutamos o detenemos el programa
if (is_callable($class, $action)) {
    $cont = new $class();
    $cont->$action();
} else {
    die('La accion no existe - 404 not found');
}








// $USUARIO = 'admin@admin.com';
// $PASS = 'admin';
// $identificado = false;

// if (isset($_POST["login_email"])) {
//     if ($_POST["login_email"] === $USUARIO && $_POST["login_password"] === $PASS) {
//         $_SESSION['login'] = true;
//         $identificado = true;

//         $logFile = fopen("./filetxt/log_login.txt", 'a') or die("Error creando archivo");
//         fwrite($logFile, "\n" . date("d/m/Y H:i:s") . " - " . $_POST["login_email"] . " - Acceso concedido") or die("Error escribiendo en el archivo");
//         fclose($logFile);

//     } else {
//         $_SESSION['login'] = false;

//         $logFile = fopen("./filetxt/log_login.txt", 'a') or die("Error creando archivo");
//         fwrite($logFile, "\n" . date("d/m/Y H:i:s") . " - " . $_POST["login_email"] . " - Acceso denegado") or die("Error escribiendo en el archivo");
//         fclose($logFile);
//     }
//     $_SESSION['log_login_email'] = $_POST["login_email"];
// }


// if (isset($_GET["p"])) {

//     switch ($_GET["p"]) {
//         case "index":
//             include_once TEMPLATE_ACTIVE;
//             break;
//         case "contact":
//             include_once TEMPLATE_ACTIVE . 'contact.php';
//             break;
//         case "category":
//             include_once TEMPLATE_ACTIVE . 'category.php';
//             break;
//         case "exit":
//             $logFile = fopen("./filetxt/log_login.txt", 'a') or die("Error creando archivo");
//             fwrite($logFile, "\n" . date("d/m/Y H:i:s") . " - " . $_SESSION['log_login_email'] . " - Cerro sesion") or die("Error escribiendo en el archivo");
//             fclose($logFile);
//             session_destroy();
//             header('Location: index.php'); // Hay que usar el header location para forzar la carga de la pagina.
//             break;
//         default:
//             include_once TEMPLATE_ACTIVE;
//             break;

//     }
// } else {
//     include_once TEMPLATE_ACTIVE . 'index.php';
// }

?>