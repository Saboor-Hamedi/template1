<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use App\database\Database;
use App\fpdf\FPDF;
$db = Database::getInstance();
$db_connection = $db->getConnection();
// =======
$sql = "SELECT student.nim, student.name, student.lastname
        FROM student INNER JOIN certificate ON student.nim=certificate.student_id
                WHERE student.nim = 11446431127385";
    $certificate = $db->select($sql);
    // =========
    $pdf = new FPDF('P','mm', 'A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16); 
	$pdf->Cell(0, 16, 'CERTIFICATE', '0', '1', 'C', false);
    foreach($certificate as $rows):
	$pdf->Cell(0, 16, $rows['name'], false);
    $pdf->SetTitle("Certificate of {$rows['name']} ", 0);
    $pdf->Ln(3);
    $pdf->Line(5,40,205,40);
    endforeach;

    $pdf->Ln(5);
    $pdf->Rect(5, 5, 200, 287, 'D'); //For A4

    $row = $certificate->fetch_assoc();
    
   
     
    $pdf->Output();

