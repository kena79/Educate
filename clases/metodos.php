<?php

class crud
{

	public function agregarUsusario($datos)
	{
		$obj = new conectar();
		$conexion = $obj->conexion();
		$tildes = $conexion->query("SET NAMES 'utf8'");

		$res =  mysqli_fetch_row(mysqli_query($conexion, "SELECT id, tipo_doc, no_documento, activo, fecha_reg 
		FROM validacionAspirantes 
		WHERE tipo_doc = '$datos[0]' AND no_documento = '$datos[1]'"));

		$id = $res[0];
		$tipo_doc = $res[1];
		$no_documento = $res[2];
		$activo = $res[3];

		if (($datos[0] == $tipo_doc) && ($datos[1] == $no_documento) && ($activo == 0)) {

			$resInfo =  mysqli_fetch_row(mysqli_query($conexion, "SELECT id
			FROM informacionAspirantes 
			WHERE tipoDocumento = '$tipo_doc' AND noDocumento = '$no_documento' AND estado = 2"));
			$idExiste = $resInfo[0];
			if ($idExiste > 0) {
				return ['op' => 3, 'id' => base64_encode($idExiste)]; //Quedo con existo falta descargar el pdff
			} else {
				return ['op' => 1]; //Quedo con exito
			}

		} elseif (($datos[0] == $tipo_doc) && ($datos[1] == $no_documento) && ($activo == 1)) {

			return ['op' => 2, 'no_documento' => base64_encode($datos[1])]; //quedó en proceso

		} else {

			mysqli_query($conexion, "INSERT INTO validacionAspirantes(tipo_doc, no_documento) 
			VALUES ('$datos[0]','$datos[1]')");

			$success =  mysqli_fetch_row(mysqli_query($conexion, "SELECT max(id) As id 
			FROM validacionAspirantes 
			WHERE tipo_doc = '$datos[0]' AND no_documento = '$datos[1]' AND activo = 1"));
			$idMax = $success[0];
			if ($idMax) {
				return ['op' => 4, 'no_documento' => base64_encode($datos[1])]; //no existe
			} else {
				return ['op' => 5, 'msj' => 'Falló']; //no existe
			}
		}
	}

	public function agregarAspirantes($datos)
	{
		$obj = new conectar();
		$conexion = $obj->conexion();
		$tildes = $conexion->query("SET NAMES 'utf8'");

		mysqli_query($conexion, "INSERT INTO informacionAspirantes (nombres, primerApellido, segundoApellido, 
		tipoDocumento, noDocumento, gradoInscripcion, anio, sexo, lugarNacimiento, fechaNacimiento, lugarExpedicion, 
		fechaExpedicion, telefono, ciudad, direccion, correoElectronico, estado) 
		VALUES ('$datos[1]','$datos[2]','$datos[3]','$datos[6]','$datos[7]','$datos[4]','$datos[0]','$datos[5]','$datos[8]',
		'$datos[9]','$datos[10]','$datos[11]','$datos[12]','$datos[13]','$datos[14]','$datos[15]',1)");

		$successRegister =  mysqli_fetch_row(mysqli_query($conexion, "SELECT max(id) As id 
			FROM informacionAspirantes 
			WHERE tipoDocumento = '$datos[6]' AND noDocumento = '$datos[7]' AND estado = 1"));
		$idAspirante = $successRegister[0];
		if ($idAspirante) {

			mysqli_query($conexion, "INSERT INTO informacionParentesco (idAspirante, parentesco, nombres, primerApellido, segundoApellido, 
			tipoDocumento, noDocumento, lugarNacimiento, fechaNacimiento, lugarExpedicion, fechaExpedicion, telefono, ciudad, direccion, 
			correoElectronico, nivelAcademico, profesion, tipoTrabajo, nombreLugarTrabajo, cargo) 
			VALUES ($idAspirante, '$datos[16]','$datos[17]','$datos[18]','$datos[19]','$datos[20]','$datos[21]','$datos[22]','$datos[23]','$datos[24]'
			,'$datos[25]','$datos[26]','$datos[27]','$datos[28]','$datos[29]','$datos[30]','$datos[31]','$datos[32]','$datos[33]','$datos[34]')");

			mysqli_query($conexion, "INSERT INTO informacionParentesco (idAspirante, parentesco, nombres, primerApellido, segundoApellido, 
			tipoDocumento, noDocumento, lugarNacimiento, fechaNacimiento, lugarExpedicion, fechaExpedicion, telefono, ciudad, direccion, 
			correoElectronico, nivelAcademico, profesion, tipoTrabajo, nombreLugarTrabajo, cargo) 
			VALUES ($idAspirante, '$datos[35]','$datos[36]','$datos[37]','$datos[38]','$datos[39]','$datos[40]','$datos[41]','$datos[42]','$datos[43]','$datos[44]'
			,'$datos[45]','$datos[46]','$datos[47]','$datos[48]','$datos[49]','$datos[50]','$datos[51]','$datos[52]','$datos[53]')");

			mysqli_query($conexion, "INSERT INTO informacionAdicional (idAspirante, preguntaUno, preguntaDos, preguntaTres) 
			VALUES ($idAspirante, '$datos[54]','$datos[55]','$datos[56]')");

			mysqli_query($conexion, "UPDATE informacionAspirantes SET estado = 2 WHERE id = $idAspirante AND estado = 1;");
			mysqli_query($conexion, "UPDATE validacionAspirantes SET activo = 0 WHERE tipo_doc = $datos[6] AND no_documento = $datos[7] AND activo = 1;");

			return ['op' => 1, 'msj' => 'Se ha registrado correctamente su Pre-Inscripción!', 'id' => base64_encode($idAspirante)];
		}
	}

	public function agregarEmpresa($datos)
	{
		$obj = new conectar();
		$conexion = $obj->conexion();
		$tildes = $conexion->query("SET NAMES 'utf8'");


		$valNit = mysqli_fetch_row(mysqli_query($conexion, "SELECT count(nit) FROM empresa WHERE nit ='$datos[1]'"))[0];

		if ($valNit > 0) {
			return 3;
		} else {
			$f = explode('/', $datos[4]);
			$d = $f[1];
			$m = $f[0];
			$a = $f[2];
			$fecha = $a . '-' . $m . '-' . $d;
			$sql = "INSERT INTO empresa (nombre, nit, trabajadores_directos, trabajadores_indirectos, fecha_realizacion, cargo, asesorado_por,realizado_por, ciudad, departamento, sector, clase_riesgo, numero_contacto, direccion, representante, correo_representante, logo) 
				VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$fecha 00:00:00','$datos[5]','$datos[7]','$datos[6]','$datos[8]','$datos[9]','$datos[10]','$datos[11]', '$datos[12]', '$datos[13]', '$datos[14]', '$datos[15]', '$datos[16]')";
			// echo $sql;
			$sqlEmp = mysqli_query($conexion, $sql);
			$valId = mysqli_fetch_row(mysqli_query($conexion, "SELECT id FROM empresa WHERE nit ='$datos[1]'"))[0];
			$sqlCab = mysqli_query($conexion, "INSERT INTO cab_evaluacion (id_empresa) VALUES ('$valId')");

			if ($sqlEmp && $sqlCab) {

				$sumTrabajadores = mysqli_fetch_row(mysqli_query($conexion, "SELECT SUM(trabajadores_directos + trabajadores_indirectos) AS sumTotalTrabajadores FROM empresa where nit = '$datos[1]'"))[0];

				if ($sumTrabajadores > 0 && $sumTrabajadores <= 10) {
					$estandares  = 7;
					$id_in = 'IN (1, 4, 9, 15, 26, 42, 45)';
				} else if ($sumTrabajadores > 10 && $sumTrabajadores <= 50) {
					$estandares = 21;
					$id_in = 'IN (1, 3, 4, 6, 8, 9, 15, 16, 23, 24, 26, 28, 32, 33, 42, 49, 50, 51, 52, 55)';
				} else if ($sumTrabajadores > 50) {
					$estandares = 60;
				}

				$cabId = mysqli_fetch_row(mysqli_query($conexion, "SELECT C.id FROM cab_evaluacion C
					INNER JOIN empresa E ON E.id = C.id_empresa 
					WHERE E.id = '$valId'"))[0];
				$sqlEstandares = mysqli_query($conexion, "SELECT id FROM estandares;");
				while ($row = mysqli_fetch_array($sqlEstandares)) {
					mysqli_query($conexion, "INSERT INTO det_evaluacion (id_cab, id_estandar) VALUES ('$cabId', {$row['id']})");
				}
				mysqli_query($conexion, "UPDATE det_evaluacion SET no_aplica = 0 WHERE id_cab = '$cabId' AND id_estandar $id_in");

				// Crear carpetas para la biblioteca
				$resDet = mysqli_query($conexion, "SELECT E.numeral FROM estandares AS E
				INNER JOIN det_evaluacion D ON D.id_estandar = E.id
				WHERE D.id_cab = '$cabId' AND D.no_aplica = 0");

				while ($d = mysqli_fetch_array($resDet)) {
					$estID = $d['numeral'];
					mkdir('../drive/' . $datos[1] . '/' . $estID, 0777, true);
				}

				return 1;
			} else if ($sqlEmp && !$sqlCab) {
				return 4;
			} else if (!$sqlEmp && $sqlCab) {
				return 4;
			} else if (!$sqlEmp && !$sqlCab) {
				return 4;
			}
		}
	}

	public function recoveryEmail($datos)
	{
		$obj = new conectar();
		$conexion = $obj->conexion();
		$tildes = $conexion->query("SET NAMES 'utf8'");


		$contarId = mysqli_fetch_row(mysqli_query($conexion, "SELECT count(id) FROM users WHERE correo_electronico ='$datos[0]'"))[0];

		if ($contarId == 0) {
			return 3;
		} else {

			$passWord = mysqli_fetch_row(mysqli_query($conexion, "SELECT password FROM users WHERE correo_electronico ='$datos[0]'"))[0];

			if ($passWord) {
				return 1;
			} else if (!$passWord) {
				return 4;
			}
		}
	}

	public function agregarEvaluacion($datos)
	{
		$obj =  new conectar();
		$conexion = $obj->conexion();
		$tildes = $conexion->query("SET NAMES 'utf8'");

		if (count($datos) == 5) {
			$sql = "UPDATE det_evaluacion SET fundamentos='$datos[0]', tipo_archivo = '$datos[3]', nombre_archivo = '$datos[4]' 
			WHERE id_cab='$datos[2]' AND id_estandar= '$datos[1]'";
		} else {
			$f = explode('/', $datos[4]);
			$d = $f[1];
			$m = $f[0];
			$a = $f[2];
			$fecha = $a . '-' . $m . '-' . $d;
			$sql = "UPDATE det_evaluacion SET cumple='$datos[0]', no_cumple='$datos[1]', 
			plan_accion='$datos[2]', responsable='$datos[3]', fecha_cumplimiento='$fecha 00:00:00', recursos='$datos[5]', 
			evidencias='$datos[6]' WHERE id_cab='$datos[8]' AND id_estandar= '$datos[7]'";
		}
		mysqli_query($conexion, $sql);
	}

	public function obtenDatos($id)
	{
		$obj =  new conectar();
		$conexion = $obj->conexion();
		$tildes = $conexion->query("SET NAMES 'utf8'");
		$sql = "SELECT id, nombre, apellidos, ciudad, correo, mensaje FROM solicitudes WHERE id = '$id'";
		$result = mysqli_query($conexion, $sql);
		$ver = mysqli_fetch_row($result);

		$datos = array(
			'id' => $ver[0],
			'nombre' => $ver[1],
			'apellido' => $ver[2],
			'ciudad' => $ver[3],
			'correo' => $ver[4],
			'mensaje' => $ver[5]
		);
		return $datos;
	}

	public function obtenDatosUsuarios($id)
	{
		$obj =  new conectar();
		$conexion = $obj->conexion();
		$tildes = $conexion->query("SET NAMES 'utf8'");
		$sql = "SELECT U.id, A.user_id, U.documento, U.correo_electronico, A.nombres, A.apellidos, A.presentacion, YP.nombre 
			FROM users U 
			INNER JOIN abogados A ON U.id = A.user_id 
			INNER JOIN y_profesiones YP ON YP.id = A.profesion_id 
			WHERE U.id = '$id'";
		$result = mysqli_query($conexion, $sql);
		$ver = mysqli_fetch_row($result);

		$datos = array(
			'id' => $ver[0],
			'documento' => $ver[2],
			'correo_electronico' => $ver[3],
			'nombres' => $ver[4],
			'apellidos' => $ver[5],
			'presentacion' => $ver[6],
			'profesion' => $ver[7]
		);
		return $datos;
	}

	public function actualizar($datos)
	{
		$obj = new conectar();
		$conexion = $obj->conexion();
		$tildes = $conexion->query("SET NAMES 'utf8'");

		$sql = "UPDATE solicitudes SET respuesta ='$datos[1]', estado = 0 WHERE id='$datos[0]' AND estado = 1";



		//correo

		return mysqli_query($conexion, $sql);
	}

	public function actualizarUsuario($datos)
	{
		$obj = new conectar();
		$conexion = $obj->conexion();
		$tildes = $conexion->query("SET NAMES 'utf8'");

		$sqlUsers = mysqli_query($conexion, "UPDATE users SET documento ='$datos[1]', correo_electronico = '$datos[5]' WHERE id='$datos[0]'");
		$sqlAbogados = mysqli_query($conexion, "UPDATE abogados SET documento = '$datos[1]', nombres = '$datos[2]', apellidos = '$datos[3]', presentacion='$datos[6]' WHERE id='$datos[0]'");

		if ($sqlUsers && $sqlAbogados) {
			return 1;
		} else if ($sqlUsers && !$sqlAbogados) {
			return 3;
		} elseif (!$sqlUsers && $sqlAbogados) {
			return 3;
		} elseif (!$sqlUsers && !$sqlAbogados) {
			return 3;
		}
	}

	public function eliminarUsuario($datos)
	{
		$obj = new conectar();
		$conexion = $obj->conexion();
		$tildes = $conexion->query("SET NAMES 'utf8'");

		$sqlUsers = mysqli_query($conexion, "UPDATE users SET estado = 1 WHERE id='$datos[0]' AND estado = 0");
		$sqlAbogados = mysqli_query($conexion, "UPDATE abogados SET estado = 1 WHERE user_id ='$datos[0]' AND estado = 0");

		if ($sqlUsers && $sqlAbogados) {
			return 1;
		} else if ($sqlUsers && !$sqlAbogados) {
			return 3;
		} elseif (!$sqlUsers && $sqlAbogados) {
			return 3;
		} elseif (!$sqlUsers && !$sqlAbogados) {
			return 3;
		}
	}

	public function agregarUsuario($datos)
	{
		$obj = new conectar();
		$conexion = $obj->conexion();
		$tildes = $conexion->query("SET NAMES 'utf8'");

		$sqlUsers = mysqli_query($conexion, "INSERT INTO users(documento, correo_electronico, password) 
			VALUES ('$datos[0]','$datos[4]',12345)");

		$tildes = $conexion->query("SET NAMES 'utf8'");
		$sql = "SELECT MAX(id)
			FROM users
			WHERE documento = $datos[0] AND estado = 0";
		$id_users = mysqli_fetch_row(mysqli_query($conexion, $sql));

		$sqlAbogados = mysqli_query($conexion, "INSERT INTO abogados(documento, nombres, apellidos, presentacion, profesion_id, user_id)
			VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[5]','$datos[3]', $id_users[0])");

		if ($sqlUsers && $sqlAbogados) {
			return 1;
		} else if ($sqlUsers && !$sqlAbogados) {
			return 3;
		} elseif (!$sqlUsers && $sqlAbogados) {
			return 3;
		} elseif (!$sqlUsers && !$sqlAbogados) {
			return 3;
		}
	}
}
