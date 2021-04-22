<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use App\database\Database;
$db = Database::getInstance();
$db_connection = $db->getConnection();
$course_id = $_GET['id'];
if (isset($_POST['enroll__request'])) {
    try { 
        
        $sql = "INSERT INTO enroll (`course_id`)
                VALUES ('" . $course_id . "')";
        if ($db->insert($sql) === TRUE) {
            echo 'New Event Uploaded';
        } else {
            echo 'Something went wrong';
        }
    } catch (\Throwable $th) {
        echo 'Something went wrong';
    }
}
function validation($data)
{
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
    return $data;
}
