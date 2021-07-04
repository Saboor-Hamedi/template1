<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use App\database\Database;
$db = Database::getInstance();
$db->getConnection();
$id = $_POST['id'];
if (!empty($_POST)) {
     try {
        $check = "UPDATE enroll set status = 1 WHERE enrollid = $id";
        $result = $db->query($check);
        $db->close();
     } catch (PDOException $e) {
        echo 'Something wento wrong'.$e->getMessage();
     }
  
}
