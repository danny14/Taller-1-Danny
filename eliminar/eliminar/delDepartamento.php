<?php

require_once ('../../tablas/DataBaseClass.php');
$cod_depto = $_POST['cod_depto'];
$sql = "DELETE from depto where cod_depto='$cod_depto'";
try {
    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "El registro " . $_POST['cod_depto'] . " Se elimino Correctamente<br>";
    echo "Click <a href='../../tablas/departamento.php'>aqui</a> para volver";
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    echo $ex->getMessage();
}
?>