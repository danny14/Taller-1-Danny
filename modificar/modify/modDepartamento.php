<?php

require_once ('../../tablas/DataBaseClass.php');
$cod_depto = $_POST['cod_depto'];
$nom_ciudad = $_POST['nom_depto'];
$sql = "UPDATE depto 
      SET nom_depto =
       '$nom_ciudad'
      WHERE depto.cod_depto = '$cod_depto';";
try {
    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "El registro " . $_POST['cod_depto'] . " Se modifico Correctamente <br>";
    echo "Click <a href='../../tablas/departamento.php'>aqui</a> para volver";
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    echo $ex->getMessage();
}
