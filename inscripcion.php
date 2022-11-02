<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/app.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home One || Educat</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Header - Menú-->
    <link href="header.html" rel="import" />
    <!-- favicon
            ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <!-- Google Fonts
            ============================================ -->
    <link href='../../../css?family=Raleway:400,300,500,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Color Swithcer CSS
            ============================================ -->
    <link rel="stylesheet" href="css/color-switcher.css">

    <!-- Fontawsome CSS
            ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Metarial Iconic Font CSS
            ============================================ -->
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">

    <!-- Bootstrap CSS
            ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Plugins CSS
            ============================================ -->
    <link rel="stylesheet" href="css/plugins.css">

    <!-- Style CSS
            ============================================ -->
    <link rel="stylesheet" href="style.css">

    <!-- Color CSS
            ============================================ -->
    <link rel="stylesheet" href="css/color.css">

    <!-- Responsive CSS
            ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Modernizr JS
            ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- Color Css Files
            ============================================ -->
    <link rel="alternate stylesheet" type="text/css" href="switcher/color-one.css" title="color-one" media="screen">
    <link rel="alternate stylesheet" type="text/css" href="switcher/pattren1.css" title="pattren1" media="screen">
    <link rel="alternate stylesheet" type="text/css" href="switcher/background1.css" title="background1" media="screen">

</head>

<body>
    <!--Header - Menú-->
    <?php include 'header.php'; ?>

    <form action="" method="post">

        <table align="center">
            <tbody>

                <tr>
                    <td colspan="8">
                        <h5 align="center">INFORMACIÓN DEL ESTUDIANTE</h5>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Año:</p>
                    </td>
                    <td><input type="text"></td>
                    <td rowspan="6">
                        <h1>D<br>4<br>5<br>G<br>&<br>9</h1>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Grado:</p>
                    </td>
                    <td><input type="text"></td>
                </tr>

                <tr>
                    <td>
                        <p>Primer Nombre:</p>
                    </td>
                    <td><input type="text"></td>
                </tr>

                <tr>
                    <td>
                        <p>Segundo Nombre:</p>
                    </td>
                    <td><input type="text"></td>
                </tr>

                <tr>
                    <td>
                        <p>Primer Apellido:</p>
                    </td>
                    <td><input type="text"></td>
                </tr>

                <tr>
                    <td>
                        <p>Segundo Apellido:</p>
                    </td>
                    <td><input type="text"></td>
                </tr>

                <tr>
                    <td colspan="8">
                        <h5 align="center">INFORMACIÓN ADICIONAL</h5>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Tipo de ID:</p>
                    </td>
                    <td>
                        <Select>
                            <option value="" selected disabled>Seleccione</option>
                            <option value="">Tarjeta de Identidad</option>
                            <option value="">Registro Civil</option>
                            <option value="">Cédula de Ciudadanía</option>
                            <option value="">Cédula de Extranjería</option>
                            <option value="">Pasaporte</option>
                            <option value="">Permiso Especial de Permanencia</option>
                            <option value="">Permiso Protección Temporal</option>
                        </Select>
                    </td>
                    <td>
                        <p>Lugar de Exp.:</p>
                    </td>
                    <td>
                        <input type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Fecha de Nac.:</p>
                    </td>
                    <td>
                        <input type="date">
                    </td>
                    <td>
                        <p>Sexo:</p>
                    </td>
                    <td>
                        <select>
                            <option value="" selected disabled>Seleccione</option>
                            <option value="">Femenino</option>
                            <option value="">Masculino</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Teléfono:</p>
                    </td>
                    <td>
                        <input type="number">
                    </td>
                    <td>
                        <p>Celular</p>
                    </td>
                    <td>
                        <input type="number">
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Dirección:</p>
                    </td>
                    <td>
                        <input type="text">
                    </td>
                    <td>
                        <p>Discapacidad:</p>
                    </td>
                    <td>
                        <select>
                            <option value="" selected disabled>Seleccione</option>
                            <option value="">Auditiva</option>
                            <option value="">Física</option>
                            <option value="">Visual</option>
                            <option value="">Trastono Espectro Autista</option>
                            <option value="">Psicosocial Mental</option>
                            <option value="">Ninguna</option>
                            <option value="">Otra</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Correo Electrónico:</p>
                    </td>
                    <td>
                        <input type="email">
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Inst. de Procedencia:</p>
                    </td>
                    <td>
                        <input type="text">
                    </td>
                    <td>
                        <p>Ciudad de la Inst.:</p>
                    </td>
                    <td>
                        <input type="text">
                    </td>
                </tr>

                <tr>
                    <td colspan="8">
                        <h5 align="center">INFORMACIÓN DEL PADRE</h5>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>ID del Padre:</p>
                    </td>
                    <td>
                        <input type="number">
                    </td>
                    <td>
                        <p>Lugar de Exp.:</p>
                    </td>
                    <td>
                        <input type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Tipo de ID:</p>
                    </td>
                    <td>
                        <Select>
                            <option value="" selected disabled>Seleccione</option>
                            <option value="">Tarjeta de Identidad</option>
                            <option value="">Registro Civil</option>
                            <option value="">Cédula de Ciudadanía</option>
                            <option value="">Cédula de Extranjería</option>
                            <option value="">Pasaporte</option>
                            <option value="">Permiso Especial de Permanencia</option>
                            <option value="">Permiso Protección Temporal</option>
                        </Select>
                    </td>
                    <td>
                        <p>Fecha de Nac.:</p>
                    </td>
                    <td>
                        <input type="date">
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Primer Nombre:</p>
                    </td>
                    <td><input type="text"></td>
                </tr>

                <tr>
                    <td>
                        <p>Segundo Nombre:</p>
                    </td>
                    <td><input type="text"></td>
                </tr>

                <tr>
                    <td>
                        <p>Primer Apellido:</p>
                    </td>
                    <td><input type="text"></td>
                </tr>

                <tr>
                    <td>
                        <p>Segundo Apellido:</p>
                    </td>
                    <td><input type="text"></td>
                </tr>

                <tr>
                    <td>
                        <p>Teléfono:</p>
                    </td>
                    <td>
                        <input type="number">
                    </td>
                    <td>
                        <p>Celular</p>
                    </td>
                    <td>
                        <input type="number">
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Correo Electónico:</p>
                    </td>
                    <td>
                        <input type="text">
                    </td>
                    <td>
                        <p>Dirección:</p>
                    </td>
                    <td>
                        <input type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Nivel Académico:</p>
                    </td>
                    <td>
                        <input type="text">
                    </td>
                    <td>
                        <p>Profesión:</p>
                    </td>
                    <td>
                        <input type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Tipo de Trabajo:</p>
                    </td>
                    <td>
                        <select>
                            <option value="" selected disabled>Seleccione</option>
                            <option value="">Empresario</option>
                            <option value="">Empleado</option>
                            <option value="">Independiente</option>
                            <option value="">Inversionista</option>
                            <option value="">Retirado</option>
                            <option value="">No Aplica</option>
                        </select>
                    </td>
                    <td>
                        <p>Nombre Lugar de Trabajo:</p>
                    </td>
                    <td>
                        <input type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Cargo:</p>
                    </td>
                    <td>
                        <input type="text">
                    </td>
                </tr>

                <tr>
                    <td colspan="8">
                        <h5 align="center">INFORMACIÓN DE LA MADRE</h5>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>ID de la Madre:</p>
                    </td>
                    <td>
                        <input type="number">
                    </td>
                    <td>
                        <p>Lugar de Exp.:</p>
                    </td>
                    <td>
                        <input type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Tipo de ID:</p>
                    </td>
                    <td>
                        <Select>
                            <option value="" selected disabled>Seleccione</option>
                            <option value="">Tarjeta de Identidad</option>
                            <option value="">Registro Civil</option>
                            <option value="">Cédula de Ciudadanía</option>
                            <option value="">Cédula de Extranjería</option>
                            <option value="">Pasaporte</option>
                            <option value="">Permiso Especial de Permanencia</option>
                            <option value="">Permiso Protección Temporal</option>
                        </Select>
                    </td>
                    <td>
                        <p>Fecha de Nac.:</p>
                    </td>
                    <td>
                        <input type="date">
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Primer Nombre:</p>
                    </td>
                    <td><input type="text"></td>
                </tr>

                <tr>
                    <td>
                        <p>Segundo Nombre:</p>
                    </td>
                    <td><input type="text"></td>
                </tr>

                <tr>
                    <td>
                        <p>Primer Apellido:</p>
                    </td>
                    <td><input type="text"></td>
                </tr>

                <tr>
                    <td>
                        <p>Segundo Apellido:</p>
                    </td>
                    <td><input type="text"></td>
                </tr>

                <tr>
                    <td>
                        <p>Teléfono:</p>
                    </td>
                    <td>
                        <input type="number">
                    </td>
                    <td>
                        <p>Celular</p>
                    </td>
                    <td>
                        <input type="number">
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Correo Electónico:</p>
                    </td>
                    <td>
                        <input type="text">
                    </td>
                    <td>
                        <p>Dirección:</p>
                    </td>
                    <td>
                        <input type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Nivel Académico:</p>
                    </td>
                    <td>
                        <input type="text">
                    </td>
                    <td>
                        <p>Profesión:</p>
                    </td>
                    <td>
                        <input type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Tipo de Trabajo:</p>
                    </td>
                    <td>
                        <select>
                            <option value="" selected disabled>Seleccione</option>
                            <option value="">Empresario</option>
                            <option value="">Empleado</option>
                            <option value="">Independiente</option>
                            <option value="">Inversionista</option>
                            <option value="">Retirado</option>
                            <option value="">No Aplica</option>
                        </select>
                    </td>
                    <td>
                        <p>Nombre Lugar de Trabajo:</p>
                    </td>
                    <td>
                        <input type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Cargo:</p>
                    </td>
                    <td>
                        <input type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>¿Con quién vive el estudiante?:</p>
                    </td>
                    <td>
                        <input type="text">
                    </td>
                </tr>

                <!-- <tr>
                    <td>
                        <p>Explique en las siguientes líneas las razones por las cuales desea ingresar a su hijo(a) <br/> en
                            esta Institución Educativa:</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea name="" id="" cols="30" rows="5"></textarea>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Señale si viene recomendado (a) por alguien en especial:</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea name="" id="" cols="30" rows="5"></textarea>
                    </td>
                </tr> -->

                <tr>
                    <td colspan="8">
                        <h6 align="center"><a class="btn btn-success" href="#">Pre-Inscribirse</a></h6>
                    </td>                
                </tr>
            </tbody>
        </table>
    </form>
</body>

</html>