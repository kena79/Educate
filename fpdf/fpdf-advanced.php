<?php
// include class
require('vendor/fpdf/fpdf.php');

// extend class
class KodePDF extends FPDF {
    protected $fontName = 'Arial';

    function renderTitle($text) {
        $this->SetTextColor(0, 0, 0);
        $this->SetFont($this->fontName, 'B', 24);
        $this->Cell(0, 10, utf8_decode($text), 0, 1);
        $this->Ln();
    }

    function renderSubTitle($text) {
        $this->SetTextColor(0, 0, 0);
        $this->SetFont($this->fontName, 'B', 16);
        $this->Cell(0, 10, utf8_decode($text), 0, 1);
        $this->Ln();
    }

    function renderText($text) {
        $this->SetTextColor(51, 51, 51);
        $this->SetFont($this->fontName, '', 12);
        $this->MultiCell(0, 7, utf8_decode($text), 0, 1);
        $this->Ln();
    }
}

// create document
$pdf = new KodePDF();
$pdf->AddPage();

// config document
$pdf->SetTitle('Generar archivos PDF con PHP');
$pdf->SetAuthor('Kodetop');
$pdf->SetCreator('FPDF Maker');

// add title
$pdf->renderTitle('Generar archivos PDF con PHP');
$pdf->renderText('Los archivos PDF se utilizan ampliamente en documentos y reportes por que se mantienen el formato, fuentes e imágenes. Por ello vamos a aprender a crear archivos PDF utilizando PHP.');
$pdf->renderSubTitle('FPDF');
$pdf->renderText('FPDF es una clase PHP que permite la generación de archivos PDF de forma sencilla y sin necesidad de instalar librerías adicionales, cuenta con métodos bien documentados que facilitan su uso.');
$pdf->renderText('Antes de comenzar lo primero es descargar FPDF e incluir los archivos necesarios en nuestro proyecto.');
$pdf->renderSubTitle('Ejemplo básico');
$pdf->renderText('Como ejemplo básico crearemos un documento PDF en donde sólo imprimiremos un texto:');
$pdf->Image('assets/fpdf-code.png', null, null, 180);

// output file
$pdf->Output('', 'fpdf-advanced.pdf');
