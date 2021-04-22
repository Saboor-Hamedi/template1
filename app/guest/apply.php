<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use App\database\Database;

$db = Database::getInstance();
$db->getConnection();
$course_apply_id = "";
$guest_apply_id = "";

if (isset($_POST['apply_btn'])) {
    $course_apply_id = mysqli_real_escape_string($db->conn, $_POST['course_apply_id']);
    $guest_apply_id = mysqli_real_escape_string($db->conn, $_POST['guest_apply_id']);
    $sql = $db->insert('INSERT INTO enroll(course_id, guest_apply_id)VALUES("' . $course_apply_id . '","' . $guest_apply_id . '")');

    if ($sql == true) {
        echo 'Apply successfully';
    } else {
        echo 'Somethin went wrong';
    }
}
