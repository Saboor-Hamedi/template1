<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use App\database\Database;

session_start();

$db = Database::getInstance();
$db->getConnection();
$course_apply_id = "";
$guest_apply_id = "";
$guest_id = $_SESSION["guest_login_id"];
if (!empty($_POST)) {
     try {
        $course_apply_id = mysqli_real_escape_string($db->conn, $_POST['course_apply_id']);
        $guest_apply_id = mysqli_real_escape_string($db->conn, $_POST['guest_apply_id']);
        $check = "SELECT * FROM enroll WHERE guest_apply_id = $guest_id  AND status = 0";
        $result = mysqli_query($db->conn, $check);
        if ($result) {
            $rows = $result->fetch_array();
            // random key 
            $d=date ("d");
            $m=date ("m");
            $y=date ("Y");
            $t=time();
            $dmt=$d+$m+$y+$t;    
            $ran= rand(0,10000000);
            $dmtran= $dmt+$ran;
            $un=  uniqid();
            $dmtun = $dmt.$un;
            $mdun = md5($dmtran.$un);
            $sort=substr($mdun, 50); // if you want sort length code.
            // end
            if (isset($rows['status'])  == 0) {
                $sql = "INSERT INTO enroll (course_id, guest_apply_id, token)VALUES('$course_apply_id', '$guest_apply_id', ' $mdun' )";
                if ($db->insert($sql) == TRUE) {
                    echo 'Apply successfully';
                } else {
                    echo 'Somethin went wrong';
                }
            } else {
                echo 'Purchase pending';
            }
        }
        $db->close();
     } catch (PDOException $e) {
        echo 'Something wento wrong'.$e->getMessage();
     }
  
}
