<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use App\database\Database;

$db = Database::getInstance();
$db->getConnection();
$course_apply_id = "";
$guest_apply_id = "";
$is_active = "";
session_start();
if (!empty($_POST)) {
    $query = "SELECT course_id, guest_apply_id, status FROM enroll WHERE guest_apply_id = '$guest_apply_id'  LIMIT 1";
    $result = mysqli_query($db->conn, $query);
    if(mysqli_num_rows($result) >0){
        echo 'nope';
    }else{
        $course_apply_id = mysqli_real_escape_string($db->conn, $_POST['course_apply_id']);
        $guest_apply_id = mysqli_real_escape_string($db->conn, $_POST['guest_apply_id']);
        $is_active = mysqli_real_escape_string($db->conn, $_POST['is_active']);
        $sql = "INSERT INTO enroll (course_id, guest_apply_id, status)VALUES('$course_apply_id', '$guest_apply_id', '$is_active' )";
        if ($db->insert($sql) == TRUE) {
            echo 'Apply successfully';
        } else {
            echo 'Somethin went wrong';
        }
    }
    $db->close();
}
