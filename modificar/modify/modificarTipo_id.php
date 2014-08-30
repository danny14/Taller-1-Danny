<?php
require_once ('../../tablas/DataBaseClass.php');
$cod_tipo_id = $_POST['cod_tipo_id'];
try {
    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $sql = "SELECT * from tipo_id where cod_tipo_id='$cod_tipo_id'";
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
        <form name="datos" method="post" action="modTipo_id.php">
            <div align="center">
                <table border="1">
                    <tr>
                        <th>Descripcion Tipo ID</th>
                        <th>Siglas</th>
                    </tr>
                    <?php foreach ($arrData as $row): ?>
                        <input type="hidden" name="cod_tipo_id" value="<?php echo $row['cod_tipo_id'] ?>">
                        <tr>
                            <td><input name="des_tipo_id" type="text" value="<?php echo $row['des_tipo_id'] ?>" maxlength="30"></td>
                            <td><input name="siglas" type="text" value="<?php echo $row['siglas'] ?>" size="5" maxlength="2"></td>
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