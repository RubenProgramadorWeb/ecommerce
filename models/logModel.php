<?php
include_once DATABASE_FOLDER . 'classDatabase.php';
class logModel extends Database
{
    public function insertLog($date, $user_email, $msg)
    {
        $sql = "INSERT INTO log (log_date, log_user_email, log_description) values('" . $date . "','" . $user_email . "','" . $msg . ")";
        $this->Connect()->query($sql);
    }

}
?>