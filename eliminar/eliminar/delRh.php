<?php

require_once ('../../tablas/DataBaseClass.php');
$cod_rh = $_POST['cod_rh'];
$sql = "DELETE from rh where cod_rh='$cod_rh'";
try {
    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "El registro " . $_POST['cod_rh'] . " Se elimino Correctamente<br>";
    echo "Click <a href='../../tablas/rh.php'>aqui</a> para volver";
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    echo $ex->getMessage();
}
?>