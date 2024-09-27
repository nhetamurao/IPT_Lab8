<?php
namespace Content;

use FPDF;

class PdfContent extends Content {
    public function __construct() {
        parent::__construct();
    }

    public function render() {
        // Create a new PDF
        $pdf = new FPDF();
        $pdf->AddPage();
        
        // Set the title
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 10, $this->title, 0, 1, 'C');
        $pdf->Ln(10);
        
       
        $imageWidth = 50; 
        $pdf->Image($this->imageUrl, ($pdf->GetPageWidth() - $imageWidth) / 2, 30, $imageWidth); // Center the image
        $pdf->Ln(80); 
        
        // Set the image name
        $pdf->SetFont('Arial', 'I', 12);
        $pdf->Cell(0, 10, "Image: " . $this->imageName, 0, 1, 'C');
        $pdf->Ln(10); 

        // Set the body content
        $pdf->SetFont('Arial', '', 12);
        $pdf->MultiCell(0, 10, $this->body);
        
        // Output the PDF to the browser
        $pdf->Output('I', 'auf_founder.pdf'); // Display inline
    }
}