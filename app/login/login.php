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
    public function getUser($id)
    {
        $query = 'SELECT * FROM login where admin_nim = ?';
        $paramType = 's';
        $paramValue = array(
            $id
        );
        $memberRecord = $this->db->getSelect($query, $paramType, $paramValue);
        return $memberRecord;
    }
    public function loginUser(){
       
        $memberRecord = $this->getUser($_POST['userid']);
        $loginPassword = 0;
        if(!empty($memberRecord)){
            if(!empty($_POST['password'])){
                $password = $_POST['password'];
            }
            $hashPassword = $memberRecord[0]['admin_pass'];
            $loginPassword =0;
            if(\password_verify($password, $hashPassword)){
                $loginPassword = 1;
            }else{
                $loginPassword =0;
            }
            if($loginPassword == 1){
                session_start();
                $_SESSION["userid"] = $memberRecord[0]["admin_nim"];
                session_write_close();
                $url = "main.php";
                header("Location: $url");

            }else if($loginPassword == 0){
                $loginStatus = 'Invalid ID or Password';
                return $loginStatus;
            }
        }
    }
}
