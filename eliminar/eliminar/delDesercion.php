<?php

require_once ('../../tablas/DataBaseClass.php');
$num_doc = $_POST['num_doc'];
$sql = "DELETE from desercion where num_doc='$num_doc'";
try {
    /* if (!is_numeric($_POST['num_doc'])) {
      throw new PDOException('num_doc no es numerico');  <---------------para que compruebe que el campo es numerico
      } */
    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "El registro " . $_POST['num_doc'] . " Se elimino Correctamente<br>";
    echo "Click <a href='../../tablas/desercion.php'>aqui</a> para volver";
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    echo $ex->getMessage();
}
?>