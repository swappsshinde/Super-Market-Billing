<?php
if(!empty($_POST['submit']))
{

	$p_id = $_POST['pid'];
	$id=1;
	$val = $_POST['submit'];
	$total=0;

// Page header

	// Logo
	$this->Image('fcritlogo.png',10,6,30);
	// Arial bold 15
	$this->SetFont('Arial','',14);
	// Move to the right
	$this->Cell(38);
	// Title
	$this->Cell(30,10,'Agnel Charities\'',0,0,'C');
	// Line break
	$this->Ln(7);
	$this->SetFont('Arial','B',18);
	$this->Cell(90);
	// Title
	$this->Cell(30,10,'Fr. C Rodrigues Institute of Technology, Vashi',0,0,'C');
	$this->SetFont('Arial','',10);
	$this->Ln(5);
	$this->Cell(90);
	$this->Cell(30,10,'Sector 9A, Vashi, Navi Mumbai-400703',0,0,'C');
	$this->Ln(20);
	
	$this->SetFont('Arial','B',13);
	$this->Cell(80);
	$this->Cell(30,10,'Department of '.$_POST["dept"]." Engineering",0,1,'C');
	$this->Ln(1);
	$this->SetFont('Arial','',13);
	$this->Cell(80);
	$this->Cell(30,10,'Report on Professional Activities',0,1,'C');
	$this->Ln(1);
	$this->SetFont('Arial','',11);
	$this->Cell(190,10,'Date: '.date("d/m/Y"),0,1,'R');


// Page footer

	// Position at 1.5 cm from bottom
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	// Page number
	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');



require('fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->setFont('Arial','B',14);
$pdf->Cell(40,10,'This Is The End I Feel');
$pdf->output();
}
?>