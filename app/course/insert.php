<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use App\database\Database;

$db = Database::getInstance();
$db_connection = $db->getConnection();
$postuserid = "";
$posttitle = "";
$postprice = "";
$postdescription = "";

if (!empty($_POST)) {
    $postuserid = validation(mysqli_real_escape_string($db->getConnection(), $_POST['postuserid']));
    $posttitle = validation(mysqli_real_escape_string($db->getConnection(), $_POST['posttitle']));
    $postprice = validation(mysqli_real_escape_string($db->getConnection(), $_POST['postprice']));
    $postdescription = (mysqli_real_escape_string($db->getConnection(), $_POST['postdescription']));
    try {
        $sql = "INSERT INTO courses (`user_id`, `title`, `price`, `description`)
                VALUES ('" . $postuserid . "', '" . $posttitle . "','" . $postprice . "', '" . $postdescription . "')";
        if ($db->insert($sql) === TRUE) {
            echo 'New Post Uploaded';
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
