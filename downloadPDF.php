<?php
// Incluir la biblioteca FPDF
require('fpdf/fpdf.php');

// Este código se ejecuta cuando se accede directamente al archivo.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Nombre del archivo a descargar
    $filename = "dummy.pdf";

    // Crear una instancia de FPDF
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(40, 10, 'Este es un texto dummy en un PDF.');
    $pdf->Ln(); // Nueva línea
    $pdf->Cell(40, 10, 'Esto es una segunda línea de texto personalizada.');

    // Generar el PDF como un string
    $pdfContent = $pdf->Output('S'); // 'S' para devolver como string

    // Establecer las cabeceras para la descarga y visualización
    header("Content-Type: application/pdf");
    header("Content-Disposition: inline; filename=\"$filename\""); // Cambiar 'attachment' a 'inline'
    header("Content-Length: " . strlen($pdfContent));

    // Imprimir el contenido del PDF
    echo $pdfContent;
    exit;
}
?>
