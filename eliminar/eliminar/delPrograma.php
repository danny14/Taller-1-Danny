<?php

require_once '../../tablas/DataBaseClass.php';
$cod_prog = $_POST['cod_prog'];
$sql = "DELETE from programa where cod_prog='$cod_prog'";
try {
    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "El registro " . $_POST['cod_prog'] . " Se elimino Correctamente<br>";
    echo "Click <a href='../../tablas/programa.php'>aqui</a> para volver";
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    echo $ex->getMessage();
}
?>