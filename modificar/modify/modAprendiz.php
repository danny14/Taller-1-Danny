<?php

require_once ('../../tablas/DataBaseClass.php');
$id_apre = $_POST['id_apre'];
$nom_apre = $_POST['nom_apre'];
$apel_apre = $_POST['apel_apre'];
$tel_apre = $_POST['tel_apre'];
$cod_ciudad = $_POST['cod_ciudad'];
$cod_tipo_id = $_POST['cod_tipo_id'];
$cod_rh = $_POST['cod_rh'];
$genero = $_POST['genero'];
$edad = $_POST['edad'];
$sql = "UPDATE aprendiz 
      SET nom_apre =
       '$nom_apre', apel_apre =
       '$apel_apre',tel_apre =
       '$tel_apre', cod_ciudad =
       '$cod_ciudad', cod_tipo_id =
       '$cod_tipo_id', cod_rh  = 
       '$cod_rh', genero =
       '$genero', edad  =
       '$edad'   
      WHERE aprendiz.id_apre = '$id_apre';";
try {
    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "El registro " . $_POST['id_apre'] . " Se modifico Correctamente<br>";
    echo "Click <a href='../../tablas/aprendiz.php'>aqui</a> para volver";
} catch (PDOException $exc) {
    $objDB->getInstance()->rollback();
    echo $exc->getMessage();
}
