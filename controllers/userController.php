<?php

include_once MODELS_FOLDER . 'userModel.php';

class userController
{

    public function checkLogin()
    {
        if (isset($_POST['user_email']) && isset($_POST['user_password'])) {
            $user_email = $_POST['user_email'];
            $user_password = $_POST['user_password'];
            $user = new userModel;
            // var_dump($user->UserLogin($user_email, $user_password));
            // echo $user->UserLogin($user_email, $user_password);

            $datos = $user->userLogin($user_email, $user_password);

            if ($datos["user_check"] == true) {
                $_SESSION['user_check'] = $datos["user_check"];
                $_SESSION['user_email'] = $datos["user_email"];
                $_SESSION['user_name'] = $datos["user_name"];
                $_SESSION['user_type'] = $datos["user_type"];

                $log_date = date("Y-m-d H:i:s");
                $log_user_mail = $datos["user_email"];
                $log_description = "Inicio de sesion exitoso.";
                $this->insertLog($log_date, $log_user_mail, $log_description);

                header('Location: index.php');
            }


            // if ($user->UserLogin($user_email, $user_password)) {
            //     // session_start();
            //     $_SESSION['user_email'] = $user_email;
            //     if ($user->userType($user_email, $user_password) == 1) {
            //         header('Location: ./admin/index.php');
            //     } else {
            //         // die($user_email . ' - ' . $user_password . ' - ' . $_POST['user_email'] . ' - ' . $_POST['user_password']);
            //         header('Location: index.php');
            //     }
            // } else {
            //     echo 'Usuario no existe';
            // }
        }
    }

    public function insertUser()
    {
        $user = new userModel;
        $user->insertUser($_POST['user_name'], $_POST['user_email'], $_POST['user_password1']);

        header('Location: index.php');
    }

    public function listUser()
    {
        $listUser = new userModel;
        $list = $listUser->listUser(10);
        // print_r($list);
        echo "
        <table class='user_table'>
        <caption><h2>Ultimos usuarios registrados</h2></caption>
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Email</th>
          <th>Tipo</th>
          <th><h1>✎</h1></th>
          <th><h1>&#128465;</h1></th>
        </tr>        
        ";
        $msg = "Estas seguro que quieres continuar?";
        foreach ($list as $users) {
            echo "<tr>
                    <td> $users[0] </td>
                    <td> $users[1]</td>
                    <td> $users[2] </td>
                    <td> $users[4]</td>
                    <td> $users[6]</td>
                    <td><h1>✎</h1></td>
                    <td> 
                        
                        <a href='index.php?del=" . $users[0] . "' onclick='return confirm(\" $msg  \");'>
                        <h1>&#128465;</h1>
                        </a>
                    </td> 
                </tr>";
        }
        echo "</table>";
    }

    public function totalUser()
    {
        $totalUser = new userModel;
        echo $totalUser->totalUser();
    }

    public function deleteUser($user_id)
    {
        $deleteUser = new userModel;
        $deleteUser->deleteUser($user_id);
    }

    public function destroySession()
    {
        $log_date = date("Y-m-d H:i:s");
        $log_user_mail = $_SESSION["user_email"];
        $log_description = "Cierre de sesion exitoso.";
        $this->insertLog($log_date, $log_user_mail, $log_description);

        session_destroy();
        header('Location: index.php');
    }


    // ================= METODOS LOG =====================
    public function insertLog($log_date, $log_user_email, $log_description)
    {
        $log = new userModel;
        $log->insertLog($log_date, $log_user_email, $log_description);
        // header('Location: index.php');
    }

    public function listLog()
    {
        $listLog = new userModel;
        $list = $listLog->listLog();
        // print_r($list);
        echo "
        <table class='user_table'>
        <caption><h2>Últimos registros log</h2></caption>
        <tr>
          <th>Id</th>
          <th>Fecha</th>
          <th>Usuario</th>
          <th>Acción</th>
          
          <th><h1>✎</h1></th>
          <th><h1>&#128465;</h1></th>
        </tr>        
        ";
        $msg = "Estas seguro que quieres continuar?";
        foreach ($list as $reg) {
            echo "<tr>
                    <td> $reg[0] </td>
                    <td> $reg[1]</td>
                    <td> $reg[2] </td>
                    <td> $reg[3]</td>                    
                    <td><h1>✎</h1></td>
                    <td> 
                        <a href='index.php?del=" . $reg[0] . "' onclick='return confirm(\" $msg  \");'>
                        <h1>&#128465;</h1>
                        </a>";

            //echo "<a href='index.php?del=" . $reg[0] . "' onclick='return confirm(\" $msg  \");'>Eliminar registro</a>";

            echo "
                    </td> 
                </tr>";
        }
        echo "</table>";

    }

    public function deleteLog($log_id)
    {
        $deleteLog = new userModel;
        $deleteLog->deleteLog($log_id);
    }

}




// if (isset($_POST['user_email']) && isset($_POST['user_password'])) {
//     $user_email = $_POST['user_email'];
//     $user_password = $_POST['user_password'];

//     // die($login_email . ' - ' . $login_password);

//     // if (empty($_POST['user_email'];) || empty($_POST['user_password'])) {
//     // if ($user_email != '' && $user_password != '') {
//     // echo 'Nombre de usuario o contraseña vacio';
//     // die($user_email . ' - ' . $user_password . ' - ' . $_POST['user_email'] . ' - ' . $_POST['user_password']);
//     // } else {
//     $user = new userModel;
//     echo $user->UserLogin($user_email, $user_password);
//     if ($user->UserLogin($user_email, $user_password)) {
//         // session_start();
//         $_SESSION['user_email'] = $user_email;
//         // die($user_email . ' - ' . $user_password . ' - ' . $_POST['user_email'] . ' - ' . $_POST['user_password']);
//         header('Location: index.php');
//     } else {
//         echo 'Usuario no existe';
//     }
//     // }

// }


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

?>