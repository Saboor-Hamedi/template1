<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use App\database\Database;
$db = Database::getInstance();
$db_connection = $db->getConnection();
$event_title = null;
$event_description = null;
$event_speaker = null;
$starttimepicker = null;
$endtimepicker = null;

if (!empty($_POST)) {
    $event_title = validation(mysqli_real_escape_string($db->getConnection(), $_POST['event_title']));
    $event_description = validation(mysqli_real_escape_string($db->getConnection(), $_POST['event_description']));
    $event_speaker = validation(mysqli_real_escape_string($db->getConnection(), $_POST['event_speaker']));
    $starttimepicker = (mysqli_real_escape_string($db->getConnection(), $_POST['starttimepicker']));
    $endtimepicker = (mysqli_real_escape_string($db->getConnection(), $_POST['endtimepicker']));
    try {
        $sql = "INSERT INTO event (`title`, `description`, `speaker`, `start_time`,`start_end`)
                VALUES ('" . $event_title . "', 
                        '" . $event_description .
            "','" . $event_speaker .
            "', '" . $starttimepicker . "' , '" . $endtimepicker . "' )";
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
