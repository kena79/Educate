<?php
// include class
require('vendor/fpdf/fpdf.php');

require_once "../acceso.php";
$id = base64_decode($_REQUEST['id']);

mysqli_query($conexion, "UPDATE informacionAspirantes SET estado = 3 WHERE id = $id AND estado = 2;");

$info = mysqli_query($conexion, "SELECT IA.id, IA.nombres, IA.primerApellido, IA.segundoApellido, IA.tipoDocumento, IA.noDocumento, IA.
gradoInscripcion, IA.anio, IA.sexo, IA.lugarNacimiento, IA.fechaNacimiento, IA.lugarExpedicion, IA.fechaExpedicion, IA.telefono, IA.
ciudad, IA.direccion, IA.correoElectronico, IA.estado, IA.fechaRegistro, YTD.alias
FROM informacionAspirantes AS IA
INNER JOIN yTipoDocumento YTD ON YTD.id = IA.tipoDocumento
WHERE IA.id = '$id' AND IA.estado IN (2,3)");
$resInfo = mysqli_fetch_array($info);

$infoMadre = mysqli_query($conexion, "SELECT IP.id, IP.idAspirante, UPPER(IP.parentesco) As parentesco, IP.nombres, IP.primerApellido, IP.segundoApellido, 
IP.tipoDocumento, IP.noDocumento, IP.lugarNacimiento, IP.fechaNacimiento, IP.lugarExpedicion, IP.fechaExpedicion, IP.telefono, IP.ciudad, 
direccion, IP.correoElectronico, IP.nivelAcademico, IP.profesion, IP.tipoTrabajo, IP.nombreLugarTrabajo, IP.cargo, IP.fechaRegistro, YTD.alias
FROM informacionParentesco AS IP
INNER JOIN yTipoDocumento YTD ON YTD.id = IP.tipoDocumento
WHERE IP.idAspirante = '$id'");
$resMadre = mysqli_fetch_array($infoMadre);

$infoAdicional = mysqli_query($conexion, "SELECT idAspirante, preguntaUno, preguntaDos, preguntaTres
FROM informacionAdicional 
WHERE idAspirante = '$id'");
$resAdicional = mysqli_fetch_array($infoAdicional);


// create document
$pdf = new FPDF();
$pdf->AddPage();
$y = $pdf->GetY();

$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(5, $y);
$pdf->MultiCell(60, 53, utf8_decode(""), 1, 'C');
$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(65, $y);
$pdf->MultiCell(80, 53, utf8_decode(""), 1, 'C');
$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(145, $y);
$pdf->MultiCell(60, 53, utf8_decode(""), 1, 'C');

$pdf->Image('../img/logo/logo_iedj.png', 10, 12, 50);

$ancho = 190;
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetY(20);
$pdf->Cell($ancho, 10, utf8_decode('INSTITUCIÓN EDUCATIVA'), 0, 0, 'C');
$pdf->SetY(26);
$pdf->Cell($ancho, 10, 'JERUSALEN', 0, 0, 'C');
$pdf->SetY(31);
$pdf->Cell($ancho, 10, utf8_decode('Aprobado por la Secretaría de Educación'), 0, 0, 'C');
$pdf->SetY(36);
$pdf->Cell($ancho, 10, utf8_decode('No. 19 - 85 de 2019 y 2480 de 2022'), 0, 0, 'C');
$pdf->SetY(41);
$pdf->Cell($ancho, 10, utf8_decode('Nit. 901.158.042-7'), 0, 0, 'C');
$pdf->SetY(46);
$pdf->Cell($ancho, 10, utf8_decode('Candelaria - Atlántico'), 0, 0, 'C');

$ancho = 330;
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetY(25);
$pdf->Cell($ancho, 10, utf8_decode('INFORME'), 0, 0, 'C');
$pdf->SetY(33);
$pdf->Cell($ancho, 10, 'ACADEMICO', 0, 0, 'C');
$pdf->SetY(41);
$pdf->Cell($ancho, 10, utf8_decode('INSTITUCIONAL'), 0, 0, 'C');


$yy = 22;
$y = $pdf->GetY();
$x = 12;

$pdf->SetFont('helvetica', 'B', 13);
$pdf->SetXY(0, $y + $yy);
$pdf->Cell(220, 10, utf8_decode("FORMULARIO DE INSCRIPCIÓN 2023"), 0, 1, 'C');

$pdf->SetFont('helvetica', 'B', 10);
$y = $pdf->GetY();
$pdf->SetXY(0, $y);
$pdf->Cell(220, 10, utf8_decode("GRADO AL QUE ASPIRA: " . $resInfo['gradoInscripcion'] . "º - FECHA DE INSCRIPCIÓN: " . $resInfo['fechaRegistro']), 0, 1, 'C');

$y = $pdf->GetY();
$pdf->SetXY(0, $y);
$pdf->Cell(220, 10, "DATOS DEL ESTUDIANTE", 0, 1, 'C');

$y = $pdf->GetY();
$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(5, $y);
$pdf->MultiCell(50, 4, utf8_decode("NOMBRES:"), 1, 'L');
$pdf->SetFont('arial', '', 8);
$pdf->SetXY(55, $y);
$pdf->MultiCell(50, 4, utf8_decode($resInfo['nombres']), 1, 'L');
$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(105, $y);
$pdf->MultiCell(50, 4, utf8_decode("APELLIDOS:"), 1, 'L');
$pdf->SetFont('arial', '', 8);
$pdf->SetXY(155, $y);
$pdf->MultiCell(50, 4, utf8_decode($resInfo['primerApellido'] . ' ' . $resInfo['segundoApellido']), 1, 'L');

$y = $pdf->GetY();
$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(5, $y);
$pdf->MultiCell(50, 4, utf8_decode("FECHA DE NACIMIENTO:"), 1, 'L');
$pdf->SetFont('arial', '', 8);
$pdf->SetXY(55, $y);
$pdf->MultiCell(50, 4, utf8_decode($resInfo['fechaNacimiento']), 1, 'L');
$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(105, $y);
$pdf->MultiCell(50, 4, utf8_decode("LUGAR DE NACIMIENTO:"), 1, 'L');
$hoy = date('Y-m-d');
$edad = $hoy - $resInfo['fechaNacimiento'];
$pdf->SetFont('arial', '', 8);
$pdf->SetXY(155, $y);
$pdf->MultiCell(50, 4, utf8_decode($resInfo['lugarNacimiento']), 1, 'L');

$y = $pdf->GetY();
$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(5, $y);
$pdf->MultiCell(50, 4, utf8_decode("IDENTIFICACIÓN:"), 1, 'L');
$pdf->SetFont('arial', '', 8);
$pdf->SetXY(55, $y);
$pdf->MultiCell(50, 4, utf8_decode($resInfo['alias'] . ': ' . $resInfo['noDocumento']), 1, 'L');
$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(105, $y);
$pdf->MultiCell(50, 4, utf8_decode("LUGAR EXPEDICIÓN:"), 1, 'L');
$pdf->SetFont('arial', '', 8);
$pdf->SetXY(155, $y);
$pdf->MultiCell(50, 4, utf8_decode($resInfo['lugarExpedicion']), 1, 'L');

$y = $pdf->GetY();
$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(5, $y);
$pdf->MultiCell(50, 4, utf8_decode("TELÉFONO:"), 1, 'L');
$pdf->SetFont('arial', '', 8);
$pdf->SetXY(55, $y);
$pdf->MultiCell(50, 4, utf8_decode($resInfo['telefono']), 1, 'L');
$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(105, $y);
$pdf->MultiCell(50, 4, utf8_decode("DIRECCIÓN:"), 1, 'L');
$pdf->SetFont('arial', '', 8);
$pdf->SetXY(155, $y);
$pdf->MultiCell(50, 4, utf8_decode($resInfo['direccion']), 1, 'L');

$y = $pdf->GetY();
$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(5, $y);
$pdf->MultiCell(50, 4, utf8_decode("SEXO:"), 1, 'L');
$pdf->SetFont('arial', '', 8);
$pdf->SetXY(55, $y);
$pdf->MultiCell(50, 4, utf8_decode($resInfo['sexo']), 1, 'L');

$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(105, $y);
$pdf->MultiCell(50, 4, utf8_decode("EDAD:"), 1, 'L');

$pdf->SetFont('arial', '', 8);
$pdf->SetXY(155, $y);
$pdf->MultiCell(50, 4, utf8_decode($edad), 1, 'L');


$y = $pdf->GetY();
$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(5, $y);
$pdf->MultiCell(50, 4, utf8_decode("CIUDAD:"), 1, 'L');

$pdf->SetFont('arial', '', 8);
$pdf->SetXY(55, $y);
$pdf->MultiCell(50, 4, utf8_decode($resInfo['ciudad']), 1, 'L');

$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(105, $y);
$pdf->MultiCell(50, 4, utf8_decode("CORREO ELECTRONICO:"), 1, 'L');

$pdf->SetFont('arial', '', 8);
$pdf->SetXY(155, $y);
$pdf->MultiCell(50, 4, utf8_decode($resInfo['correoElectronico']), 1, 'L');

$y = $pdf->GetY();
$pdf->SetXY(0, $y);
$pdf->SetFont('arial', 'B', 10);
$pdf->Cell(220, 10, "DATOS FAMILIARES", 0, 1, 'C');

foreach ($infoMadre as $r) {


    $y = $pdf->GetY();
    $pdf->SetFont('arial', 'B', 8);
    $pdf->SetXY(5, $y);
    $pdf->MultiCell(200, 4, utf8_decode($r['parentesco']), 1, 'C');

    $y = $pdf->GetY();
    $pdf->SetFont('arial', 'B', 8);
    $pdf->SetXY(5, $y);
    $pdf->MultiCell(50, 4, utf8_decode("NOMBRES:"), 1, 'L');
    $pdf->SetFont('arial', '', 8);
    $pdf->SetXY(55, $y);
    $pdf->MultiCell(50, 4, utf8_decode($r['nombres']), 1, 'L');
    $pdf->SetFont('arial', 'B', 8);
    $pdf->SetXY(105, $y);
    $pdf->MultiCell(50, 4, utf8_decode("APELLIDOS:"), 1, 'L');
    $pdf->SetFont('arial', '', 8);
    $pdf->SetXY(155, $y);
    $pdf->MultiCell(50, 4, utf8_decode($r['primerApellido'] . ' ' . $r['segundoApellido']), 1, 'L');

    $y = $pdf->GetY();
    $pdf->SetFont('arial', 'B', 8);
    $pdf->SetXY(5, $y);
    $pdf->MultiCell(50, 4, utf8_decode("FECHA DE NACIMIENTO:"), 1, 'L');
    $pdf->SetFont('arial', '', 8);
    $pdf->SetXY(55, $y);
    $pdf->MultiCell(50, 4, utf8_decode($r['fechaNacimiento']), 1, 'L');
    $pdf->SetFont('arial', 'B', 8);
    $pdf->SetXY(105, $y);
    $pdf->MultiCell(50, 4, utf8_decode("LUGAR DE NACIMIENTO:"), 1, 'L');
    $hoy = date('Y-m-d');
    $edad = $hoy - $r['fechaNacimiento'];
    $pdf->SetFont('arial', '', 8);
    $pdf->SetXY(155, $y);
    $pdf->MultiCell(50, 4, utf8_decode($r['lugarNacimiento']), 1, 'L');

    $y = $pdf->GetY();
    $pdf->SetFont('arial', 'B', 8);
    $pdf->SetXY(5, $y);
    $pdf->MultiCell(50, 4, utf8_decode("IDENTIFICACIÓN:"), 1, 'L');
    $pdf->SetFont('arial', '', 8);
    $pdf->SetXY(55, $y);
    $pdf->MultiCell(50, 4, utf8_decode($r['alias'] . ': ' . $r['noDocumento']), 1, 'L');
    $pdf->SetFont('arial', 'B', 8);
    $pdf->SetXY(105, $y);
    $pdf->MultiCell(50, 4, utf8_decode("LUGAR EXPEDICIÓN:"), 1, 'L');
    $pdf->SetFont('arial', '', 8);
    $pdf->SetXY(155, $y);
    $pdf->MultiCell(50, 4, utf8_decode($r['lugarExpedicion']), 1, 'L');

    $y = $pdf->GetY();
    $pdf->SetFont('arial', 'B', 8);
    $pdf->SetXY(5, $y);
    $pdf->MultiCell(50, 4, utf8_decode("TELÉFONO:"), 1, 'L');
    $pdf->SetFont('arial', '', 8);
    $pdf->SetXY(55, $y);
    $pdf->MultiCell(50, 4, utf8_decode($r['telefono']), 1, 'L');
    $pdf->SetFont('arial', 'B', 8);
    $pdf->SetXY(105, $y);
    $pdf->MultiCell(50, 4, utf8_decode("DIRECCIÓN:"), 1, 'L');
    $pdf->SetFont('arial', '', 8);
    $pdf->SetXY(155, $y);
    $pdf->MultiCell(50, 4, utf8_decode($r['direccion']), 1, 'L');

    $y = $pdf->GetY();
    $pdf->SetFont('arial', 'B', 8);
    $pdf->SetXY(5, $y);
    $pdf->MultiCell(50, 4, utf8_decode("CIUDAD:"), 1, 'L');

    $pdf->SetFont('arial', '', 8);
    $pdf->SetXY(55, $y);
    $pdf->MultiCell(50, 4, utf8_decode($r['ciudad']), 1, 'L');

    $pdf->SetFont('arial', 'B', 8);
    $pdf->SetXY(105, $y);
    $pdf->MultiCell(50, 4, utf8_decode("CORREO ELECTRONICO:"), 1, 'L');

    $pdf->SetFont('arial', '', 8);
    $pdf->SetXY(155, $y);
    $pdf->MultiCell(50, 4, utf8_decode($r['correoElectronico']), 1, 'L');


    $y = $pdf->GetY();
    $pdf->SetFont('arial', 'B', 8);
    $pdf->SetXY(5, $y);
    $pdf->MultiCell(50, 4, utf8_decode("NIVEL ACADEMICO:"), 1, 'L');
    $pdf->SetFont('arial', '', 8);
    $pdf->SetXY(55, $y);
    $pdf->MultiCell(50, 4, utf8_decode($r['nivelAcademico']), 1, 'L');
    $pdf->SetFont('arial', 'B', 8);
    $pdf->SetXY(105, $y);
    $pdf->MultiCell(50, 4, utf8_decode("PROFESION:"), 1, 'L');
    $pdf->SetFont('arial', '', 8);
    $pdf->SetXY(155, $y);
    $pdf->MultiCell(50, 4, utf8_decode($r['profesion']), 1, 'L');


    $y = $pdf->GetY();
    $pdf->SetFont('arial', 'B', 8);
    $pdf->SetXY(5, $y);
    $pdf->MultiCell(50, 4, utf8_decode("TIPO DE TRABAJO:"), 1, 'L');
    $pdf->SetFont('arial', '', 8);
    $pdf->SetXY(55, $y);
    $pdf->MultiCell(50, 4, utf8_decode($r['tipoTrabajo']), 1, 'L');
    $pdf->SetFont('arial', 'B', 8);
    $pdf->SetXY(105, $y);
    $pdf->MultiCell(50, 4, utf8_decode("NOMBRE LUGAR DE TRABAJO:"), 1, 'L');
    $pdf->SetFont('arial', '', 8);
    $pdf->SetXY(155, $y);
    $pdf->MultiCell(50, 4, utf8_decode($r['nombreLugarTrabajo']), 1, 'L');
}
$y = $pdf->GetY(40);
$pdf->SetXY(0, $y + 40);

$pdf->SetXY(40, $y);
$pdf->SetFont('arial', '', 8);
$pdf->SetXY(5, $y);
$pdf->MultiCell(65, 4, utf8_decode(""), 0, 'C');
$pdf->SetFont('arial', '', 8);
$pdf->SetXY(80, $y);
$pdf->MultiCell(65, 4, utf8_decode(""), 0, 'C');
$pdf->SetFont('arial', '', 8);
$pdf->SetXY(145, $y);
$pdf->MultiCell(65, 4, utf8_decode(''), 0, 'C');
$y = $pdf->GetY(40);
$pdf->SetXY(0, $y + 40);

$pdf->SetXY(40, $y);
$pdf->SetFont('arial', '', 8);
$pdf->SetXY(5, $y);
$pdf->MultiCell(65, 4, utf8_decode(""), 0, 'C');
$pdf->SetFont('arial', '', 8);
$pdf->SetXY(80, $y);
$pdf->MultiCell(65, 4, utf8_decode(""), 0, 'C');
$pdf->SetFont('arial', '', 8);
$pdf->SetXY(145, $y);
$pdf->MultiCell(65, 4, utf8_decode(''), 0, 'C');

$y = $pdf->GetY();
$pdf->SetXY(10, $y);
$pdf->SetFont('arial', 'B', 10);
$pdf->MultiCell(190, 6, utf8_decode("¿Con quién vive el estudiante?"), 0, 'L');
$pdf->SetFont('arial', '', 8);
$pdf->MultiCell(190, 6, utf8_decode("R: " . $resAdicional['preguntaUno']), 0, 'L');
$y = $pdf->GetY();
$pdf->SetXY(10, $y);
$pdf->SetFont('arial', 'B', 10);
$pdf->MultiCell(190, 6, utf8_decode("Explique en las siguientes líneas las razones por las cuales desea ingresar a su hijo(a) en esta IED: "), 0, 'L');
$pdf->SetFont('arial', '', 8);
$pdf->MultiCell(190, 6, utf8_decode("R: " . $resAdicional['preguntaDos']), 0, 'J');
$y = $pdf->GetY();
$pdf->SetXY(10, $y);
$pdf->SetFont('arial', 'B', 10);
$pdf->MultiCell(190, 6, utf8_decode("Señale si viene recomendado (a) por alguien en especial: "), 0, 'L');
$pdf->SetFont('arial', '', 8);
$pdf->MultiCell(190, 6, utf8_decode("R: " . $resAdicional['preguntaTres']), 0, 'L'); 


$y = $pdf->GetY(40);
$pdf->SetXY(0, $y + 40);

$pdf->SetXY(40, $y);
$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(5, $y);
$pdf->MultiCell(65, 4, utf8_decode(""), 0, 'C');
$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(80, $y);
$pdf->MultiCell(65, 4, utf8_decode(""), 0, 'C');
$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(145, $y);
$pdf->MultiCell(65, 4, utf8_decode(''), 0, 'C');
$y = $pdf->GetY(40);
$pdf->SetXY(0, $y + 40);
$pdf->SetXY(40, $y);
$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(5, $y);
$pdf->MultiCell(65, 4, utf8_decode(""), 0, 'C');
$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(80, $y);
$pdf->MultiCell(65, 4, utf8_decode(""), 0, 'C');
$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(145, $y);
$pdf->MultiCell(65, 4, utf8_decode(''), 0, 'C');
$y = $pdf->GetY(40);
$pdf->SetXY(0, $y + 40);
$pdf->SetXY(40, $y);
$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(5, $y);
$pdf->MultiCell(65, 4, utf8_decode(""), 0, 'C');
$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(80, $y);
$pdf->MultiCell(65, 4, utf8_decode(""), 0, 'C');
$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(145, $y);
$pdf->MultiCell(65, 4, utf8_decode(''), 0, 'C');
$y = $pdf->GetY(40);
$pdf->SetXY(0, $y + 40);
$pdf->SetXY(40, $y);
$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(5, $y);
$pdf->MultiCell(65, 4, utf8_decode(""), 0, 'C');
$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(80, $y);
$pdf->MultiCell(65, 4, utf8_decode(""), 0, 'C');
$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(145, $y);
$pdf->MultiCell(65, 4, utf8_decode(''), 0, 'C');
$y = $pdf->GetY(40);
$pdf->SetXY(0, $y + 40);

$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(5, $y);
$pdf->MultiCell(66, 4, utf8_decode("______________________________"), 0, 'C');
$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(71, $y);
$pdf->MultiCell(66, 4, utf8_decode("______________________________"), 0, 'C');
$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(137, $y);
$pdf->MultiCell(66, 4, utf8_decode('______________________________'), 0, 'C');

$y = $pdf->GetY();
$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(5, $y);
$pdf->MultiCell(66, 4, utf8_decode("FIRMA DEL PADRE"), 0, 'C');
$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(71, $y);
$pdf->MultiCell(66, 4, utf8_decode("FIRMA DE LA MADRE"), 0, 'C');
$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(137, $y);
$pdf->MultiCell(66, 4, utf8_decode('FIRMA DEL ALUMNO'), 0, 'C');
$y = $pdf->GetY();
$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(13, $y);
$pdf->MultiCell(66, 4, utf8_decode("CC."), 0, 'L');
$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(79, $y);
$pdf->MultiCell(66, 4, utf8_decode("CC."), 0, 'L');
$pdf->SetFont('arial', 'B', 8);
$pdf->SetXY(145, $y);
$pdf->MultiCell(66, 4, utf8_decode($resInfo['alias'] . '.'), 0, 'L');


$pdf->SetY(0);
$pdf->SetFont('Arial', 'I', 8);
// $pdf->Cell(0, 10, utf8_decode('Página ') . $pdf->PageNo(), 0, 0, 'C');
$pdf->SetX(0);
$pdf->Cell(292, 10, utf8_decode('Creado por el ' . $pdf->Author), 0, 0, 'R');

$pdf->Ln();
// output file

// config document
$pdf->SetTitle(utf8_decode('Formulario de Pre-Inscripción - ' . $resInfo['nombres']));
$pdf->SetAuthor('IED  JERUSALEN');
$pdf->SetCreator('IED  JERUSALEN');
// $pdf->SetProtection($resInfo['noDocumento']);

$pdf->Output('', utf8_decode('Formulario de Pre-Inscripción - ' . $resInfo['nombres'] . '.pdf'));
