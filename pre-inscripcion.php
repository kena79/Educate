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
                                <button class="btn contact-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    INFORMACION DEL ESTUDIANTE:
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <div class="col-lg-12 col-12">
                                    <form id="contact-form" action="#" method="post">
                                        <div class="row">
                                            <div class="col-md-2">
                                                Año:
                                                <input type="number" name="anio" value="2023" disabled placeholder="Año">
                                            </div>
                                            <div class="col-md-4">
                                                Nombres Completos: (*)
                                                <input type="text" name="txtNombresCompletos" placeholder="Nombres completos" required>
                                            </div>
                                            <div class="col-md-3">
                                                Primer Apellido: (*)
                                                <input type="text" name="txtPrimerApellido" placeholder="Primer apellido" required>
                                            </div>
                                            <div class="col-md-3">
                                                Segundo Apellido: (*)
                                                <input type="text" name="txtSegundoApellido" placeholder="Segundo apellido" required>
                                            </div>

                                            <div class="col-md-3">
                                                Grado a inscribirse: (*)
                                                <input type="number" name="txtGrado" placeholder="No Documento" min="0" max="11">
                                            </div>
                                            <div class="col-md-3">
                                                Sexo: (*)
                                                <div class="select large">
                                                    <select name="txtSexo" id="txtSexo">
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
                                                    <select name="txtTipoDoc" id="txtTipoDoc">
                                                        <option value="">Seleccione...</option>
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
                                                <input type="number" name="NoDocumento" placeholder="No Documento" min="0" value="<?= $_REQUEST['no_documento'] ?>" readonly>
                                            </div>

                                            <div class="col-md-3">
                                                Lugar de nacimiento: (*)
                                                <input type="text" name="txtLugarNacimiento" placeholder="Lugar de nacimiento">
                                            </div>
                                            <div class="col-md-3">
                                                Fecha de nacimiento: (*)
                                                <input type="date" name="txtFechaNacimiento" placeholder="Fecha de nacimiento">
                                            </div>
                                            <div class="col-md-3">
                                                Lugar de Expedicion: (*)
                                                <input type="text" name="txtLugarExpedicion" placeholder="lugar de expedición">
                                            </div>
                                            <div class="col-md-3">
                                                Fecha de Expedicion: (*)
                                                <input type="date" name="txtFechaExpedicion" placeholder="Fecha de expedición">
                                            </div>

                                            <div class="col-md-2">
                                                Teléfono: (*)
                                                <input type="number" name="txtTelefono" placeholder="Teléfono" min="0">
                                            </div>
                                            <div class="col-md-3">
                                                Ciudad: (*)
                                                <input type="text" name="txtCiudad" placeholder="Ciudad">
                                            </div>
                                            <div class="col-md-3">
                                                Dirección: (*)
                                                <input type="text" name="txtDireccion" placeholder="Dirección">
                                            </div>
                                            <div class="col-md-4">
                                                Email: (*)
                                                <input type="email" name="txtCorreoElectronico" placeholder="Correo electronico">
                                            </div>
                                        </div>
                                    </form>
                                    <p class="form-messege"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn contact-title" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    INFORMACIÓN FAMILIAR:
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <div class="col-lg-12 col-12">
                                    <form id="contact-form" action="#" method="post">
                                        <div class="row">
                                            <div class="col-md-2">
                                                Parentesco:
                                                <input type="text" name="anio" value="Madre" readonly placeholder="Madre">
                                            </div>
                                            <div class="col-md-4">
                                                Nombres Completos: (*)
                                                <input type="text" name="txtNombresCompletos" placeholder="Nombres completos" required>
                                            </div>
                                            <div class="col-md-3">
                                                Primer Apellido: (*)
                                                <input type="text" name="txtPrimerApellido" placeholder="Primer apellido" required>
                                            </div>
                                            <div class="col-md-3">
                                                Segundo Apellido: (*)
                                                <input type="text" name="txtSegundoApellido" placeholder="Segundo apellido" required>
                                            </div>

                                            <div class="col-md-3">
                                                Tipo Doc.
                                                <div class="select large">
                                                    <select name="txtTipoDoc" id="txtTipoDoc">
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
                                                <input type="number" name="NoDocumento" placeholder="No Documento" min="0" value="<?= $_REQUEST['no_documento'] ?>" readonly>
                                            </div>

                                            <div class="col-md-3">
                                                Lugar de nacimiento: (*)
                                                <input type="text" name="txtLugarNacimiento" placeholder="Lugar de nacimiento">
                                            </div>
                                            <div class="col-md-3">
                                                Fecha de nacimiento: (*)
                                                <input type="date" name="txtFechaNacimiento" placeholder="Fecha de nacimiento">
                                            </div>
                                            <div class="col-md-3">
                                                Lugar de Expedicion: (*)
                                                <input type="text" name="txtLugarExpedicion" placeholder="lugar de expedición">
                                            </div>
                                            <div class="col-md-3">
                                                Fecha de Expedicion: (*)
                                                <input type="date" name="txtFechaExpedicion" placeholder="Fecha de expedición">
                                            </div>

                                            <div class="col-md-3">
                                                Teléfono: (*)
                                                <input type="number" name="txtTelefono" placeholder="Teléfono" min="0">
                                            </div>
                                            <div class="col-md-3">
                                                Ciudad: (*)
                                                <input type="text" name="txtCiudad" placeholder="Ciudad">
                                            </div>
                                            <div class="col-md-3">
                                                Dirección: (*)
                                                <input type="text" name="txtDireccion" placeholder="Dirección">
                                            </div>
                                            <div class="col-md-3">
                                                Email: (*)
                                                <input type="email" name="txtCorreoElectronico" placeholder="Correo electronico">
                                            </div>
                                            <div class="col-md-3">
                                                Nivel Acádemico: (*)
                                                <input type="email" name="txtCorreoElectronico" placeholder="Correo electronico">
                                            </div>
                                            <div class="col-md-3">
                                                Profesión: (*)
                                                <input type="email" name="txtCorreoElectronico" placeholder="Correo electronico">
                                            </div>
                                            <div class="col-md-3">
                                                Tipo de trabajo: (*)
                                                <input type="email" name="txtCorreoElectronico" placeholder="Correo electronico">
                                            </div>
                                            <div class="col-md-4">
                                                Nombre lugar trabajo: (*)
                                                <input type="email" name="txtCorreoElectronico" placeholder="Correo electronico">
                                            </div>
                                            <div class="col-md-5">
                                                Cargo: (*)
                                                <input type="email" name="txtCorreoElectronico" placeholder="Correo electronico">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-2">
                                                Parentesco:
                                                <input type="text" name="anio" value="Padre" readonly placeholder="Madre">
                                            </div>
                                            <div class="col-md-4">
                                                Nombres Completos: (*)
                                                <input type="text" name="txtNombresCompletos" placeholder="Nombres completos" required>
                                            </div>
                                            <div class="col-md-3">
                                                Primer Apellido: (*)
                                                <input type="text" name="txtPrimerApellido" placeholder="Primer apellido" required>
                                            </div>
                                            <div class="col-md-3">
                                                Segundo Apellido: (*)
                                                <input type="text" name="txtSegundoApellido" placeholder="Segundo apellido" required>
                                            </div>

                                            <div class="col-md-3">
                                                Tipo Doc.
                                                <div class="select large">
                                                    <select name="txtTipoDoc" id="txtTipoDoc">
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
                                                <input type="number" name="NoDocumento" placeholder="No Documento" min="0" value="<?= $_REQUEST['no_documento'] ?>" readonly>
                                            </div>

                                            <div class="col-md-3">
                                                Lugar de nacimiento: (*)
                                                <input type="text" name="txtLugarNacimiento" placeholder="Lugar de nacimiento">
                                            </div>
                                            <div class="col-md-3">
                                                Fecha de nacimiento: (*)
                                                <input type="date" name="txtFechaNacimiento" placeholder="Fecha de nacimiento">
                                            </div>
                                            <div class="col-md-3">
                                                Lugar de Expedicion: (*)
                                                <input type="text" name="txtLugarExpedicion" placeholder="lugar de expedición">
                                            </div>
                                            <div class="col-md-3">
                                                Fecha de Expedicion: (*)
                                                <input type="date" name="txtFechaExpedicion" placeholder="Fecha de expedición">
                                            </div>

                                            <div class="col-md-3">
                                                Teléfono: (*)
                                                <input type="number" name="txtTelefono" placeholder="Teléfono" min="0">
                                            </div>
                                            <div class="col-md-3">
                                                Ciudad: (*)
                                                <input type="text" name="txtCiudad" placeholder="Ciudad">
                                            </div>
                                            <div class="col-md-3">
                                                Dirección: (*)
                                                <input type="text" name="txtDireccion" placeholder="Dirección">
                                            </div>
                                            <div class="col-md-3">
                                                Email: (*)
                                                <input type="email" name="txtCorreoElectronico" placeholder="Correo electronico">
                                            </div>
                                            <div class="col-md-3">
                                                Nivel Acádemico: (*)
                                                <input type="email" name="txtCorreoElectronico" placeholder="Correo electronico">
                                            </div>
                                            <div class="col-md-3">
                                                Profesión: (*)
                                                <input type="email" name="txtCorreoElectronico" placeholder="Correo electronico">
                                            </div>
                                            <div class="col-md-3">
                                                Tipo de trabajo: (*)
                                                <input type="email" name="txtCorreoElectronico" placeholder="Correo electronico">
                                            </div>
                                            <div class="col-md-4">
                                                Nombre lugar trabajo: (*)
                                                <input type="email" name="txtCorreoElectronico" placeholder="Correo electronico">
                                            </div>
                                            <div class="col-md-5">
                                                Cargo: (*)
                                                <input type="email" name="txtCorreoElectronico" placeholder="Correo electronico">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                ¿Con quién vive el estudiante?: (*)
                                                <input type="text" name="txtNombresCompletos" placeholder="Nombres completos" required>
                                            </div>
                                            <div class="cod-md-12">
                                                Explique en las siguientes líneas las razones por las cuales desea ingresar a su hijo(a) en esta Institución Educativa: (*)
                                                <textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
                                            </div>
                                            <div class="cod-md-12">
                                                Señale si viene recomendado (a) por alguien en especial: (*)
                                                <textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
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