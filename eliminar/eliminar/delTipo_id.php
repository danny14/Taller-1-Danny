<?php

require_once ('../../tablas/DataBaseClass.php');
$cod_tipo_id = $_POST['cod_tipo_id'];
$sql = "DELETE from tipo_id where cod_tipo_id='$cod_tipo_id'";
try {
    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "El registro " . $_POST['cod_tipo_id'] . " Se elimino Correctamente<br>";
    echo "Click <a href='../../tablas/tipo_id.php'>aqui</a> para volver";
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    echo $ex->getMessage();
}
?>