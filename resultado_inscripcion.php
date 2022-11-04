<?php
session_start();


require_once "acceso.php";
$id = base64_decode($_REQUEST['id']);

$info = mysqli_query($conexion, "SELECT IA.id, IA.nombres, IA.primerApellido, IA.segundoApellido, IA.tipoDocumento, IA.noDocumento, IA.
gradoInscripcion, IA.anio, IA.sexo, IA.lugarNacimiento, IA.fechaNacimiento, IA.lugarExpedicion, IA.fechaExpedicion, IA.telefono, IA.
ciudad, IA.direccion, IA.correoElectronico, IA.estado, IA.fechaRegistro, YTD.descripcion
FROM informacionAspirantes AS IA
INNER JOIN yTipoDocumento YTD ON YTD.id = IA.tipoDocumento
WHERE IA.id = '$id' AND IA.estado = 2");
$resInfo = mysqli_fetch_row($info);

?>
<!doctype html>
<html class="" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PRE-INSCRIPCIÓN || IED JERUSALEN</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

    <!--Estilos Start-->
    <?php include("head.php") ?>
    <!--End of Estilos-->
</head>

<body>
    <?php if (!empty($resInfo)) : ?>
        <!--Header Start-->
        <?php include("header.php") ?>
        <!--End of Header-->

        <!--Contenido Start-->
        <div class="contact-form-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto ml-auto">
                        <h4 class="contact-title text-center">Su Pre-Inscripción fué con exito.</h4>
                        <p class="text-justify">Con el diligenciamiento del formulario de inscripción que encontrará a continuación, usted iniciará el proceso de admisión de su hijo(a),
                            además recuerde presentar las notas más recientes del colegio actual para agendar una cita para presentar evaluación Diagnostica, Académica y Psicologíca.</p>
                        <div class="row">
                            <div class="col-md-3 text-center">
                                Tipo Documento.
                                <p class="text-center form-messege"><?= $resInfo[19]; ?></p>

                            </div>
                            <div class="col-md-4 text-center">
                                Identificación del aspirante.
                                <p class="text-center form-messege"><?= $resInfo[5]; ?></p>
                            </div>
                            <div class="col-md-5 text-center">
                                Nombres y Apellidos del aspirante.
                                <p class="text-center form-messege"><?= $resInfo[1] . ' ' . $resInfo[2] . ' ' . $resInfo[3]; ?></p>
                            </div>
                            <div class="col-md-12 text-center mt-2">
                                <p class="text-center form-messege"><?= 'Grado: ' . $resInfo[6] . ' - Año: ' . $resInfo[7]; ?></p>
                                <a href="fpdf/fpdf-complete.php?id=<?= $_REQUEST['id'] ?>" class="btn btn-success">Imprimir Pre-Inscripción</a>
                            </div>
                        </div>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Contenido-->

        <?php include("footer.php") ?>


        <!-- Script js -->
        <?php include("script.php") ?>
    <?php else : header('Location: buscar_inscripcion.php'); ?>
    <?php endif; ?>

</body>

</html>