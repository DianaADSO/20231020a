<?php

//Función para consultar los datos de la tabla  tb_usuarios
function consultar(){

    $salida = " ";

    //Conexión con la base de datos
    $connexion  = mysqli_connect('localhost', 'root', 'root', 'db_proyecto_ddm');  //Conexión con la base de datos
    $sql        = "select * from tb_usuarios";
    $resultado  = $connexion->query($sql);

    //Recorre el recordset
    while( $fila = mysqli_fetch_assoc($resultado)){

        $salida .= $fila['nombres']."<br>"; //Recibe el valor de la columna nombres
        $salida .= $fila['usuario'] . "<br>"; //Recibe el valor de la columna usuario
        $salida .= $fila['email'] . "<br>" . "<br>"; //Recibe el valor de la columna email
       
    }

    $connexion->close();//Cerrar conexion
    return $salida; //Retorna la operación

}




?>