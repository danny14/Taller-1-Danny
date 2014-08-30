<?php

require_once ('../../tablas/DataBaseClass.php');
$cod_tipo_id = $_POST['cod_tipo_id'];
$des_tipo_id = $_POST['des_tipo_id'];
$siglas = $_POST['siglas'];
$sql = "UPDATE tipo_id 
      SET des_tipo_id =
       '$des_tipo_id', siglas =
       '$siglas'
      WHERE tipo_id.cod_tipo_id = '$cod_tipo_id';";
try {
    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "El registro " . $_POST['cod_tipo_id'] . " Se modifico Correctamente<br>";
    echo "Click <a href='../../tablas/Tipo_id.php'>aqui</a> para volver";
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    echo $ex->getMessage();
}
