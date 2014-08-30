<?php

require_once ('../../tablas/DataBaseClass.php');
$num_ficha = $_POST['num_ficha'];
$id_apre = $_POST['id_apre'];
$estado = $_POST['estado'];
$sql = "UPDATE matricula 
      SET num_ficha =
       '$num_ficha', estado =
       '$estado'
      WHERE matricula.id_apre = '$id_apre';";
try {

    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "El registro " . $_POST['id_apre'] . " Se modifico Correctamente<br>";
    echo "Click <a href='../../tablas/matricula.php'>aqui</a> para volver";
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    echo $ex->getMessage();
}
?>