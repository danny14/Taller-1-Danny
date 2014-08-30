<?php

require_once ('../../tablas/DataBaseClass.php');
$cod_centro = $_POST['cod_centro'];
$des_centro = $_POST['des_centro'];
$tel_centro = $_POST['tel_centro'];
$dir_centro = $_POST['dir_centro'];
$cod_ciudad = $_POST['cod_ciudad'];
$sql = "UPDATE centro 
      SET des_centro =
       '$des_centro', tel_centro =
       '$tel_centro', dir_centro =
       '$dir_centro', cod_ciudad =
       '$cod_ciudad'
      WHERE centro.cod_centro = '$cod_centro';";
try {
    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "El registro " . $_POST['cod_centro'] . " Se modifico Correctamente<br>";
    echo "Click <a href='../../tablas/centro.php'>aqui</a> para volver";
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    echo $ex->getMessage();
}
