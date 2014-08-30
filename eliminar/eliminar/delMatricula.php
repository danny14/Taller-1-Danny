<?php

require_once ('../../tablas/DataBaseClass.php');
$num_ficha = $_POST['num_ficha'];
$id_apre = $_POST['id_apre'];
$estado = $_POST['estado'];
$sql = "DELETE from matricula where id_apre='$id_apre'";
try {
    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "El registro " . $_POST['num_ficha'] . " Se elimino Correctamente<br>";
    echo "Click <a href='../../tablas/matricula.php'>aqui</a> para volver";
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    echo $ex->getMessage();
}
?>