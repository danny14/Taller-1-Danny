<?php

require_once ('../../tablas/DataBaseClass.php');
$num_ficha = $_POST['num_ficha'];
$cod_programa = $_POST['cod_programa'];
$fecha_ini = $_POST['fecha_ini'];
$fecha_fin = $_POST['fecha_fin'];
$cod_centro = $_POST['cod_centro'];
$sql = "UPDATE ficha 
      SET cod_programa =
       '$cod_programa', fecha_ini =
       '$fecha_ini',fecha_fin =
       '$fecha_fin', cod_centro =
       '$cod_centro'
      WHERE ficha.num_ficha = '$num_ficha';";
try {
    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "El registro " . $_POST['num_ficha'] . " Se modifico Correctamente<br>";
    echo "Click <a href='../../tablas/ficha.php'>aqui</a> para volver";
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    echo $ex->getMessage();
}
?>