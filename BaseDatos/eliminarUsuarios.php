<?php

    include("BaseDatos.php");
    $resultado="";
    //0 Recibir el id del registro a eliminar
    $id=$_GET["id"];
    
    //1.Crear un objeto de la clase BaseDatos
    $transaccion=new BaseDatos();

    //2.Consulta SQL para eliminar registros
    $consultaSQL="DELETE FROM usuarios WHERE id='$id'";

    //3. Utilizar el metodo eliminarDatos
    $transaccion->eliminarDatos($consultaSQL);
    
    header("location:listaUsuarios.php");




?>