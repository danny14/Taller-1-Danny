<?php
require_once ('../../tablas/DataBaseClass.php');
$cod_rh = $_POST['cod_rh'];
try {
    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $sql = "SELECT * from rh where cod_rh='$cod_rh'";
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
        <form name="datos" method="post" action="modRh.php">
            <div align="center">
                <table border="1">
                    <tr>
                        <th>Descripcion RH</th>
                    </tr>
                    <?php foreach ($arrData as $row): ?>
                        <input type="hidden" name="cod_rh" value="<?php echo $row['cod_rh'] ?>">
                        <tr>
                            <td><input name="des_rh" type="text" value="<?php echo $row['des_rh'] ?>" maxlength="7"></td>
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