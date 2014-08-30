<?php

require_once ('../../tablas/DataBaseClass.php');
$num_ficha = $_POST['num_ficha'];
$sql = "DELETE from ficha where num_ficha='$num_ficha'";
try {
    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "El registro " . $_POST['num_ficha'] . " Se elimino Correctamente<br>";
    echo "Click <a href='../../tablas/ficha.php'>aqui</a> para volver";
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    echo $ex->getMessage();
}
?>