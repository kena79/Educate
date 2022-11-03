
<?php

class conectar
{
    public function conexion()
    {
        $conexion = mysqli_connect(
            'localhost',
            'root',
            '12345',
            'educate'
        );
        return $conexion;
    }
}


?>