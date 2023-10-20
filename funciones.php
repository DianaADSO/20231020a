<?php

/** Esta es una función de uso doble se encarda de consultar todos los datos de la tabla  tb_usuarios o de un solo usuario 
 *  @param      texto       se utiliza como parámetro opcional para consultar los datos de un solo usuario
 *  @Return     número     retorna el resultado de consultar los datos de la tabla
 */
//Función para consultar los datos de la tabla  tb_usuarios
function consultar($usuario = null){

    $salida = " "; // Inicializa la variable

    //Conexión con la base de datos
    $connexion  = mysqli_connect('localhost', 'root', 'root', 'db_proyecto_ddm');  //Conexión con la base de datos
    $sql        = " select * from tb_usuarios"; //slecet para consultar los datos de todos los usuarios
    

    if ($usuario != null) $sql .= " where usuario = '$usuario'"; // Valida si el parametro es null 

    $resultado  = $connexion->query($sql);  //Resultado de ejecutar el query
    
    //Recorre el recordset
    while( $fila = mysqli_fetch_assoc($resultado)){

        $salida .= $fila['nombres']."<br>"; //Recibe el valor de la columna nombres
        $salida .= $fila['usuario'] . "<br>"; //Recibe el valor de la columna usuario
        $salida .= $fila['email'] . "<br>" . "<br>"; //Recibe el valor de la columna email
       
    }

    $connexion->close();//Cerrar conexion
    return $salida; //Retorna el resultado

}



?>