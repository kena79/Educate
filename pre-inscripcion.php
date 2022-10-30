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

    <!--Header Area Start-->
    <?php include("header.php") ?>
    <!--End of Header Area-->

    <!--Contenido de la pagna Start-->
    <div class="about-page-area mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>¡Haz tu pre-inscripción aquí!</h3>
                            <p>Ya están abiertas las inscripciones para todos nuestros cursos de prescolar, básica primaria, secundaria y medía. No te quedes sin tú cupo, inscríbete ya!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-form-area">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <a class="btn contact-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    INFORMACION DEL ESTUDIANTE:
                                </a>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <div class="col-lg-12 col-12">
                                    <form id="frmDatosAspirante" action="#" method="post">
                                        <div class="row">
                                            <div class="col-md-2">
                                                Año:
                                                <input type="number" name="anio" value="2023" readonly required placeholder="Año">
                                            </div>
                                            <div class="col-md-4">
                                                Nombres Completos: (*)
                                                <input type="text" name="txtNombresCompletos" required placeholder="Nombres completos">
                                            </div>
                                            <div class="col-md-3">
                                                Primer Apellido: (*)
                                                <input type="text" name="txtPrimerApellido" required placeholder="Primer apellido">
                                            </div>
                                            <div class="col-md-3">
                                                Segundo Apellido: (*)
                                                <input type="text" name="txtSegundoApellido" required placeholder="Segundo apellido">
                                            </div>

                                            <div class="col-md-3">
                                                Grado a inscribirse: (*)
                                                <div class="select large">
                                                    <select name="txtGrado" required id="txtGrado">
                                                        <option value="">Seleccione...</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                Sexo: (*)
                                                <div class="select large">
                                                    <select name="txtSexo" required id="txtSexo">
                                                        <option value="">Seleccione...</option>
                                                        <option>Masculino</option>
                                                        <option>Femenino</option>
                                                        <option>Prefiero no decirlo</option>
                                                        <!-- <option>Pasaporte</option> -->
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                Tipo Doc.
                                                <div class="select large">
                                                    <select name="txtTipoDoc" required id="txtTipoDoc">
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
                                            <div class="col-md-3">
                                                No. Documento: (*)
                                                <input type="number" name="NoDocumento" required placeholder="No Documento" min="0" value="<?= base64_decode($_REQUEST['no_documento']); ?>" readonly>
                                            </div>

                                            <div class="col-md-3">
                                                Lugar de nacimiento: (*)
                                                <input type="text" name="txtLugarNacimiento" required placeholder="Lugar de nacimiento">
                                            </div>
                                            <div class="col-md-3">
                                                Fecha de nacimiento: (*)
                                                <input type="date" name="txtFechaNacimiento" required placeholder="Fecha de nacimiento">
                                            </div>
                                            <div class="col-md-3">
                                                Lugar de Expedicion: (*)
                                                <input type="text" name="txtLugarExpedicion" required placeholder="lugar de expedición">
                                            </div>
                                            <div class="col-md-3">
                                                Fecha de Expedicion: (*)
                                                <input type="date" name="txtFechaExpedicion" required placeholder="Fecha de expedición">
                                            </div>

                                            <div class="col-md-2">
                                                Teléfono: (*)
                                                <input type="number" name="txtTelefono" required placeholder="Teléfono" min="0">
                                            </div>
                                            <div class="col-md-3">
                                                Ciudad: (*)
                                                <input type="text" name="txtCiudad" required placeholder="Ciudad">
                                            </div>
                                            <div class="col-md-3">
                                                Dirección: (*)
                                                <input type="text" name="txtDireccion" required placeholder="Dirección">
                                            </div>
                                            <div class="col-md-4">
                                                Email: (*)
                                                <input type="email" name="txtCorreoElectronico" required placeholder="Correo electronico">
                                            </div>
                                        </div>
                                        <p class="form-messege"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <a class="btn contact-title" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    INFORMACIÓN FAMILIAR:
                                </a>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <div class="col-lg-12 col-12">
                                    <div class="row">
                                        <div class="col-md-2">
                                            Parentesco:
                                            <input type="text" name="txtParentescoM" value="Madre" readonly required placeholder="Madre">
                                        </div>
                                        <div class="col-md-4">
                                            Nombres Completos: (*)
                                            <input type="text" name="txtNombresCompletosM" required placeholder="Nombres completos">
                                        </div>
                                        <div class="col-md-3">
                                            Primer Apellido: (*)
                                            <input type="text" name="txtPrimerApellidoM" required placeholder="Primer apellido">
                                        </div>
                                        <div class="col-md-3">
                                            Segundo Apellido: (*)
                                            <input type="text" name="txtSegundoApellidoM" required placeholder="Segundo apellido">
                                        </div>
                                        <div class="col-md-3">
                                            Tipo Doc.
                                            <div class="select large">
                                                <select name="txtTipoDocM" required id="txtTipoDocM">
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
                                        <div class="col-md-3">
                                            No. Documento: (*)
                                            <input type="number" name="NoDocumentoM" required placeholder="No Documento" min="0">
                                        </div>
                                        <div class="col-md-3">
                                            Lugar de nacimiento: (*)
                                            <input type="text" name="txtLugarNacimientoM" required placeholder="Lugar de nacimiento">
                                        </div>
                                        <div class="col-md-3">
                                            Fecha de nacimiento: (*)
                                            <input type="date" name="txtFechaNacimientoM" required placeholder="Fecha de nacimiento">
                                        </div>
                                        <div class="col-md-3">
                                            Lugar de Expedicion: (*)
                                            <input type="text" name="txtLugarExpedicionM" required placeholder="lugar de expedición">
                                        </div>
                                        <div class="col-md-3">
                                            Fecha de Expedicion: (*)
                                            <input type="date" name="txtFechaExpedicionM" required placeholder="Fecha de expedición">
                                        </div>
                                        <div class="col-md-3">
                                            Teléfono: (*)
                                            <input type="number" name="txtTelefonoM" required placeholder="Teléfono" min="0">
                                        </div>
                                        <div class="col-md-3">
                                            Ciudad: (*)
                                            <input type="text" name="txtCiudadM" required placeholder="Ciudad">
                                        </div>
                                        <div class="col-md-3">
                                            Dirección: (*)
                                            <input type="text" name="txtDireccionM" required placeholder="Dirección">
                                        </div>
                                        <div class="col-md-3">
                                            Email: (*)
                                            <input type="email" name="txtCorreoElectronicoM" required placeholder="Correo electronico">
                                        </div>
                                        <div class="col-md-3">
                                            Nivel Acádemico: (*)
                                            <input type="text" name="txtNivelAcademicoM" required placeholder="Nivel acádemico">
                                        </div>
                                        <div class="col-md-3">
                                            Profesión: (*)
                                            <input type="text" name="txtProfesionM" required placeholder="Profesión">
                                        </div>
                                        <div class="col-md-3">
                                            Tipo de trabajo: (*)
                                            <input type="text" name="txtTipoTrabajoM" required placeholder="Tipo de trabajo">
                                        </div>
                                        <div class="col-md-4">
                                            Nombre lugar trabajo: (*)
                                            <input type="text" name="txtNombreLugarM" required placeholder="Lugar de trabajo">
                                        </div>
                                        <div class="col-md-5">
                                            Cargo: (*)
                                            <input type="text" name="txtCargoM" required placeholder="Cargo">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-2">
                                            Parentesco:
                                            <input type="text" name="txtParentescoP" value="Padre" readonly required placeholder="Madre">
                                        </div>
                                        <div class="col-md-4">
                                            Nombres Completos: (*)
                                            <input type="text" name="txtNombresCompletosP" required placeholder="Nombres completos">
                                        </div>
                                        <div class="col-md-3">
                                            Primer Apellido: (*)
                                            <input type="text" name="txtPrimerApellidoP" required placeholder="Primer apellido">
                                        </div>
                                        <div class="col-md-3">
                                            Segundo Apellido: (*)
                                            <input type="text" name="txtSegundoApellidoP" required placeholder="Segundo apellido">
                                        </div>
                                        <div class="col-md-3">
                                            Tipo Doc.
                                            <div class="select large">
                                                <select name="txtTipoDocP" required id="txtTipoDoc">
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
                                        <div class="col-md-3">
                                            No. Documento: (*)
                                            <input type="number" name="NoDocumentoP" required placeholder="No Documento" min="0">
                                        </div>
                                        <div class="col-md-3">
                                            Lugar de nacimiento: (*)
                                            <input type="text" name="txtLugarNacimientoP" required placeholder="Lugar de nacimiento">
                                        </div>
                                        <div class="col-md-3">
                                            Fecha de nacimiento: (*)
                                            <input type="date" name="txtFechaNacimientoP" required placeholder="Fecha de nacimiento">
                                        </div>
                                        <div class="col-md-3">
                                            Lugar de Expedicion: (*)
                                            <input type="text" name="txtLugarExpedicionP" required placeholder="lugar de expedición">
                                        </div>
                                        <div class="col-md-3">
                                            Fecha de Expedicion: (*)
                                            <input type="date" name="txtFechaExpedicionP" required placeholder="Fecha de expedición">
                                        </div>
                                        <div class="col-md-3">
                                            Teléfono: (*)
                                            <input type="number" name="txtTelefonoP" required placeholder="Teléfono" min="0">
                                        </div>
                                        <div class="col-md-3">
                                            Ciudad: (*)
                                            <input type="text" name="txtCiudadP" required placeholder="Ciudad">
                                        </div>
                                        <div class="col-md-3">
                                            Dirección: (*)
                                            <input type="text" name="txtDireccionP" required placeholder="Dirección">
                                        </div>
                                        <div class="col-md-3">
                                            Email: (*)
                                            <input type="email" name="txtCorreoElectronicoP" required placeholder="Correo electronico">
                                        </div>
                                        <div class="col-md-3">
                                            Nivel Acádemico: (*)
                                            <input type="text" name="txtNivelAcademicoP" required placeholder="Nivel acádemico">
                                        </div>
                                        <div class="col-md-3">
                                            Profesión: (*)
                                            <input type="text" name="txtProfesionP" required placeholder="Profesión">
                                        </div>
                                        <div class="col-md-3">
                                            Tipo de trabajo: (*)
                                            <input type="text" name="txtTipoTrabajoP" required placeholder="Tipo de trabajo">
                                        </div>
                                        <div class="col-md-4">
                                            Nombre lugar trabajo: (*)
                                            <input type="text" name="txtNombreLugarP" required placeholder="Lugar de trabajo">
                                        </div>
                                        <div class="col-md-5">
                                            Cargo: (*)
                                            <input type="text" name="txtCargoP" required placeholder="Cargo">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            ¿Con quién vive el estudiante?: (*)
                                            <input type="text" name="txtPreguntaUno" required placeholder="Nombres completos">
                                        </div>
                                        <div class="cod-md-12">
                                            Explique en las siguientes líneas las razones por las cuales desea ingresar a su hijo(a) en esta Institución Educativa: (*)
                                            <textarea name="txtPreguntaDos" cols="30" rows="10" required placeholder="Message"></textarea>
                                        </div>
                                        <div class="cod-md-12">
                                            Señale si viene recomendado (a) por alguien en especial: (*)
                                            <textarea name="txtPreguntaTres" cols="30" rows="10" required placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <p class="form-messege text-center">Al hacer clic en "Guardar Pre-Inscripción", aceptas las Condiciones y confirmas que has leído nuestra Política de tratamiento de datos.</p>
                                    <button type="submit" class="button-default btn-block">Guardar Pre-Inscripción</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <br><br>
    <!--End of Contenido de la pagna-->

    <?php include("footer.php") ?>

    <!-- Script js -->
    <?php include("script.php") ?>

</body>

</html>

<!-- Funcion del buscar con consumo de servicio -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#frmDatosAspirante').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: 'procesos/add_aspirantes.php',
                data: $(this).serialize(),
                success: function(response) {
                    console.log(response)
                    var jsonData = JSON.parse(response);
                    console.table(jsonData.op)
                    var no_documento = jsonData.no_documento
                    if (jsonData.op == "1") {
                        Swal.fire(
                            'Pre-Inscripción!',
                            +jsonData.msj +
                            'success'
                        );
                        location.href = 'resultado_inscripcion.php?id=' + jsonData.id;
                    } else if (jsonData.op == "2") {
                        location.href = 'pre-inscripcion.php?no_documento=' + no_documento;
                    } else {
                        Swal.fire(
                            'Error!',
                            'Lo sentimos, ya tiene una pre-inscripción en proceso, espere respuesta a su correo!',
                            'error'
                        );
                    }
                }
            });
        });
    });
</script>