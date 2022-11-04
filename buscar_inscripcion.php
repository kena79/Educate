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

    <!--Header Start-->
    <?php include("header.php") ?>
    <!--End of Header-->

    <!--Contenido Start-->
    <div class="contact-form-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto ml-auto">
                    <h4 class="contact-title text-center">Pre-Inscripciones en Línea</h4>
                    <p class="text-justify">Con el diligenciamiento del formulario de inscripción que encontrará a continuación, usted iniciará el proceso de admisión de su hijo(a),
                        además recuerde presentar las notas más recientes del colegio actual para agendar una cita para presentar evaluación Diagnostica, Académica y Psicologíca.</p>
                    <form id="frmBuscarAspirante" action="#" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                Tipo Documento.
                                <div class="select large">
                                    <select name="txtTipoDoc" id="txtTipoDoc" required>
                                        <option value="">Seleccione...</option>
                                        <option value="1">Tarjeta de Identidad</option>
                                        <option value="2">Registro Civil</option>
                                        <option value="3">Cédula de Ciudadanía</option>
                                        <option value="4">Cédula de Extranjería</option>
                                        <option value="5">Pasaporte</option>
                                        <option value="6">NUIP</option>
                                        <option value="7">Número de Secretaría</option>
                                        <option value="8">Permiso Especial de Permanencia</option>
                                        <option value="9">Permiso Protección Temporal</option>
                                        <option value="10">Acta</option>
                                        <option value="11">NIT</option>
                                        <option value="12">VISA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                Identificación del aspirante: (*)
                                <input type="number" name="txtNoDocumento" id="txtNoDocumento" placeholder="No Documento" min="0" required>
                            </div>
                            <div class="col-md-4"><br>
                                <button type="submit" class="button-default btn-block" style="height: 48px;">Consultar</button>
                            </div>
                        </div>
                    </form>
                    <p class="form-messege"></p>
                </div>
            </div>
        </div>
    </div>
    <!--End of Contenido-->

    <?php include("footer.php") ?>


    <!-- Script js -->
    <?php include("script.php") ?>

</body>

</html>
<!-- Funcion del buscar con consumo de servicio -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#frmBuscarAspirante').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: 'procesos/add_usuario.php',
                data: $(this).serialize(),
                success: function(response) {
                    console.log(response)
                    var jsonData = JSON.parse(response);
                    console.table(jsonData.op)
                    var no_documento = jsonData.no_documento
                    if (jsonData.op == "4") {
                        location.href = 'pre-inscripcion.php?no_documento=' + no_documento;
                    } else if (jsonData.op == "2") {
                        location.href = 'pre-inscripcion.php?no_documento=' + no_documento;
                    } else if (jsonData.op == "3") {
                        var id = jsonData.id
                        location.href = 'resultado_inscripcion.php?id=' + id;
                    } else if (jsonData.op == "1") {
                        Swal.fire(
                            'Advertencia!',
                            'Lo sentimos, ya tiene una pre-inscripción finalizada, espere respuesta a su correo!',
                            'warning'
                        );
                        document.getElementById('frmBuscarAspirante').reset();
                    } else {
                        Swal.fire(
                            'Error!',
                            'Lo sentimos, ya tiene una pre-inscripción en proceso, espere respuesta a su correo!',
                            'error'
                        );
                        document.getElementById('frmBuscarAspirante').reset();
                    }
                }
            });
        });
    });
</script>