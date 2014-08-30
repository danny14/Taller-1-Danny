<?php

require_once ('../../tablas/DataBaseClass.php');
$cod_causa = $_POST['cod_causa'];
$sql = "DELETE from causadesercion where cod_causa='$cod_causa'";
try {
    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "El registro " . $_POST['cod_causa'] . " Se elimino Correctamente<br>";
    echo "Click <a href='../../tablas/causadesercion.php'>aqui</a> para volver";
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    echo $ex->getMessage();
}
?>