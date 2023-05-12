<?php
// include_once './database/classDatabase.php';
include_once DATABASE_FOLDER . 'classDatabase.php';

// Declaramos la clase User para todas las funciones relacionadas con los usuarios. La convertimos en clase extendida 
// (que hereda de classDatabase) de la clase Database ya que realizaremos llamadas a funciones para realizar consultas
class userModel extends Database
{
    // Comprueba si el email y password existen y devuelve si es verdadero o falso.
    public function userLogin($user_email, $user_password)
    {
        $sql = "SELECT user_id,user_name,user_lastname,user_photo,user_email,user_type, 'true' AS user_check FROM user WHERE user_email = '$user_email' AND user_password ='$user_password'";
        $result = $this->Connect()->query($sql);
        $aux = $result->fetch_assoc();
        return $aux;
    }
    // Recibe nombre, email y password y lo inserta en BD.
    public function insertUser($user_name, $user_email, $user_password)
    {
        $sql = "INSERT INTO user (user_name, user_email, user_password, user_type) values('" . $user_name . "','" . $user_email . "','" . $user_password . "', 2)";

        $this->Connect()->query($sql);
    }


    // Comprueba el tipo de usuario para saber sus permisos
    public function userType($user_email)
    {
        $sql = "SELECT user_type FROM user WHERE user_email = '$user_email'";
        $result = $this->Connect()->query($sql);
        $aux = $result->fetch_assoc();

        return $aux;
    }

    // Nos devuelve un listado de U numeros de usuarios. $u es el valor que le enviamos para que nos devuelva esa cantidad de registros.
    public function listUser($u)
    {
        $sql = "SELECT * FROM user ORDER BY user_id DESC LIMIT " . $u;
        $result = $this->Connect()->query($sql);
        $aux = $result->fetch_all();
        return $aux;
    }

    public function totalUser()
    {
        $sql = "SELECT * FROM user";
        $result = $this->Connect()->query($sql);
        return $result->num_rows;
    }

    public function deleteUser($user_id)
    {
        $sql = "DELETE FROM user WHERE user_id=" . $user_id;
        $this->Connect()->query($sql);
    }

    // ======================== METODOS LOG PARA CONTROL DE ACTIVIDAD DE USUARIOS =============
    public function insertLog($date, $user_email, $msg)
    {
        $sql = "INSERT INTO log (log_date, log_user_email, log_description) values('" . $date . "','" . $user_email . "','" . $msg . "')";
        // echo $sql;
        // die("INSERTLOG");
        $this->Connect()->query($sql);
        // var_dump($this);
        // die("INSERTLOG");
    }

    public function listLog()
    {
        $sql = "SELECT * FROM log ORDER BY log_id DESC LIMIT 20";
        $result = $this->Connect()->query($sql);
        $aux = $result->fetch_all();
        return $aux;
    }

    public function deleteLog($log_id)
    {
        $sql = "DELETE FROM log WHERE log_id=" . $log_id;
        $this->Connect()->query($sql);
    }


    // ======================= METODOS DE PRUEBA PARA ELIMINAR =================================

    // Comprueba si existe un usuario
    public function getUser($username, $password)
    {
        $sql = "SELECT * FROM user WHERE username = '$username' AND password ='$password'";

        $result = $this->Connect()->query($sql);

        $numRows = $result->num_rows;
        // die($user_email . ' - ' . $user_password . ' - ' . $_POST['user_email'] . ' - ' . $_POST['user_password']);
        if ($numRows == 1) {
            return true;
        }

        return false;
    }


    public function getUser2()
    {
        // $sql = "SELECT user_name FROM user WHERE user_id=1";
        $sql = "SELECT user_name FROM user";

        $result = $this->Connect()->query($sql);

        return $result;
    }


}
?>