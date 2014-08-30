<?php
require_once ('../../tablas/DataBaseClass.php');
$cod_centro = $_POST['cod_centro'];
try {
    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $sql = "SELECT * from centro where cod_centro='$cod_centro'";
    $arrData = $objDB->getInstance()
            ->query($sql)
            ->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOExcepcion $ex) {
    echo $exc->getmessage();
}
?>
<html>
    <head>
        <title>Campos a Modificar</title>
    </head>
    <body>
        <form name="datos" method="post" action="modCentro.php">
            <div align="center">
                <table border="1">
                    <tr>
                        <th>Descripcion Centro </th>
                        <th>Telefono Centro</th>
                        <th>Direccion Centro</th>
                        <th>Codigo Ciudad</th>
                    </tr>
                    <?php foreach ($arrData as $row): ?>
                        <input type="hidden" name="cod_centro" value="<?php echo $row['cod_centro'] ?>">
                        <tr>
                            <td><input name="des_centro" type="text" value="<?php echo $row['des_centro'] ?>" maxlength="80"></td>
                            <td><input name="tel_centro" type="text" value="<?php echo $row['tel_centro'] ?>" maxlength="10"></td>
                            <td><input name="dir_centro" type="text" value="<?php echo $row['dir_centro'] ?>" maxlength="40"></td>
                            <td><input name="cod_ciudad" type="text" value="<?php echo $row['cod_ciudad'] ?>" maxlength="5"></td>
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