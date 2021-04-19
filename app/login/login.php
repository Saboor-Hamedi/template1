<?php

namespace App\login;

use App\database\Database;

class Login
{
    // this is login class;
    protected $db = null;
    public function __construct()
    {
        $this->db = database::getInstance();
    }
    // admin
    public function getAdmin($id)
    {
        $query = 'SELECT * FROM login where admin_nim = ?';
        $paramType = 's';
        $paramValue = array(
            $id
        );
        $memberRecord = $this->db->getSelect($query, $paramType, $paramValue);
        return $memberRecord;
    }
    // student
    public function getStudent($id)
    {
        $query = 'SELECT * FROM student where nim = ?';
        $paramType = 's';
        $paramValue = array(
            $id
        );
        $memberRecord = $this->db->getSelect($query, $paramType, $paramValue);
        return $memberRecord;
    }
    // 
    public function loginUser()
    {

        $admin_record = $this->getAdmin($_POST['userid']);
        $admin_login_password = 0;
        if (!empty($admin_record)) {
            if (!empty($_POST['password'])) {
                $password = $_POST['password'];
            }
            $hashPassword = $admin_record[0]['admin_pass'];
            $admin_login_password = 0;
            if (\password_verify($password, $hashPassword)) {
                $admin_login_password = 1;
            } else {
                $admin_login_password = 0;
            }
            if ($admin_login_password == 1) {
                session_start();
                $_SESSION["userid"] = $admin_record[0]["admin_nim"];
                session_write_close();
                $url = "main.php";
                header("Location: $url");
            } else if ($admin_login_password == 0) {
                $loginStatus = 'Invalid ID or Password';
                return $loginStatus;
            }
        }
        //================ student side
        $student_record = $this->getStudent($_POST['userid']);
        $student_login_password = 0;
        if (!empty($student_record)) {
            if (!empty($_POST['password'])) {
                $password = $_POST['password'];
            }
            $hashPassword = $student_record[0]['password'];
            $student_login_password = 0;
            if (\password_verify($password, $hashPassword)) {
                $student_login_password = 1;
            } else {
                $student_login_password = 0;
            }
            if ($student_login_password == 1) {
                if ($student_record[0]['student_level'] == 'student') {
                    session_start();
                    $_SESSION["student_logged_in"] = $student_record[0]["nim"];
                 
                    session_write_close();
                    $url = "student.php";
                    header("Location: $url");
                } else {
                    $student_status = 'Invalid ID or Password';
                    return $student_status;
                }
            } else if ($student_login_password == 0) {
                $student_status = 'Invalid ID or Password';
                return $student_status;
            }
            // 
        }
    }
}
