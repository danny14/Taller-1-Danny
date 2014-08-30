<?php

require_once ('../../tablas/DataBaseClass.php');
$num_doc = $_POST['num_doc'];
$fecha = $_POST['fecha'];
$id_apre = $_POST['id_apre'];
$num_ficha = $_POST['num_ficha'];
$cod_causa = $_POST['cod_causa'];
$fecha_desercion = $_POST['fecha_desercion'];
$fase_desercion = $_POST['fase_desercion'];
$sql = "UPDATE desercion 
      SET fecha =
       '$fecha',id_apre =
       '$id_apre', num_ficha =
       '$num_ficha',cod_causa =
       '$cod_causa', fecha_desercion =
       '$fecha_desercion', fase_desercion=
       '$fase_desercion'
      WHERE desercion.num_doc = '$num_doc';";
try {
    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "El registro " . $_POST['num_doc'] . " Se modifico Correctamente<br>";
    echo "Click <a href='../../tablas/desercion.php'>aqui</a> para volver";
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    echo $ex->getMessage();
}