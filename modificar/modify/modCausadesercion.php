<?php

require_once ('../../tablas/DataBaseClass.php');
$cod_causa = $_POST['cod_causa'];
$des_causa = $_POST['des_causa'];
$estado_causa = $_POST['estado_causa'];
$sql = "UPDATE causadesercion 
      SET des_causa =
       '$des_causa', estado_causa =
       '$estado_causa'   
      WHERE causadesercion.cod_causa = '$cod_causa';";
try {
    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "El registro " . $_POST['cod_causa'] . " Se modifico Correctamente<br>";
    echo "Click <a href='../../tablas/aprendiz.php'>aqui</a> para volver";
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    echo $ex->getMessage();
}
?>