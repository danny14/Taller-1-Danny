<?php

require_once ('../../tablas/DataBaseClass.php');
$cod_rh = $_POST['cod_rh'];
$des_rh = $_POST['des_rh'];
$sql = "UPDATE rh 
      SET des_rh =
       '$des_rh'
      WHERE rh.cod_rh = '$cod_rh';";
try {
    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "El registro " . $_POST['cod_rh'] . " Se modifico Correctamente<br>";
    echo "Click <a href='../../tablas/rh.php'>aqui</a> para volver";
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    echo $ex->getMessage();
}
?>