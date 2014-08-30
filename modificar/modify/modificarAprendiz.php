<?php
require_once ('../../tablas/DataBaseClass.php');
$id_apre = $_POST['id_apre'];
try {
    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $sql = "SELECT * from aprendiz where id_apre='$id_apre'";
    $arrData = $objDB->getInstance()
            ->query($sql)
            ->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOExcepcion $exc) {
    echo $exc->getmessage();
}
?>
<html>
    <head>
        <title>Campos a Modificar</title>
    </head>
    <body>
        <form name="datos" method="post" action="modAprendiz.php">
            <div align="center">
                <table width="1204" border="1">
                    <tr>
                        <th width="144">Nombre Aprendiz </th>
                        <th width="144">Apellido Aprendiz </th>
                        <th width="144">Telefono</th>
                        <th width="144">Codigo Ciudad </th>
                        <th width="144">Codigo TipoID</th>
                        <th width="144">Codigo RH </th>
                        <th width="144">Genero  </th>
                        <th width="144">Edad</th>
                    </tr>
                    <?php foreach ($arrData as $row): ?>
                        <input type="hidden" name="id_apre" value="<?php echo $row['id_apre'] ?>">
                        <tr>
                            <td><input name="nom_apre" type="text" value="<?php echo $row['nom_apre'] ?>" maxlength="50"></td>
                            <td><input name="apel_apre" type="text" value="<?php echo $row['apel_apre'] ?>" maxlength="50"></td>
                            <td><input name="tel_apre" type="text" value="<?php echo $row['tel_apre'] ?>" maxlength="15"></td>
                            <td><input name="cod_ciudad" type="text" value="<?php echo $row['cod_ciudad'] ?>" size="5" maxlength="5"></td>
                            <td><input name="cod_tipo_id" type="text" value="<?php echo $row['cod_tipo_id'] ?>" size='5' maxlength="2"></td>
                            <td><input name="cod_rh" type="text" value="<?php echo $row['cod_rh'] ?>" size='5' maxlength="2"></td>
                            <td><input name="genero" type="text" value="<?php echo $row['genero'] ?>" size="5" maxlength="2"></td>
                            <td><input name="edad" type="text" value="<?php echo $row['edad'] ?>" size="5" maxlength="5"></td>
                        </tr>
                        <tr>
                            <td colspan="8"><div align="center"><input name="submit" type="submit" value="Modificar"></div></td>
                        </tr>
                    <?php endforeach ?>
                </table>
                <p>&nbsp;</p>

            </div>
        </form>
    </body>
</html>