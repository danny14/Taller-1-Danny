<?php

require_once ('../../tablas/DataBaseClass.php');
$id_apre = $_POST['id_apre2'];
$sql = "DELETE from aprendiz WHERE id_apre='$id_apre';";
try {
    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "El registro " . $_POST['id_apre2'] . " Se elimino Correctamente<br>";
    echo "Click <a href='../../tablas/aprendiz.php'>aqui</a> para volver";
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    echo $ex->getMessage();
}
echo "Se modifico Correctamente";
?>