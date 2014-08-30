<?php
require_once '../../tablas/DataBaseClass.php';
$cod_prog = $_POST['cod_prog'];
try {
    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $sql = "SELECT * from programa where cod_prog='$cod_prog'";
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
        <form name="datos" method="post" action="modPrograma.php">
            <div align="center">
                <table border="1">
                    <tr>
                        <th>Numero de Ficha</th>
                        <th>Estado</th>
                    </tr>
                    <?php foreach ($arrData as $row): ?>
                        <input type="hidden" name="cod_prog" value="<?php echo $row['cod_prog'] ?>">
                        <tr>
                            <td><input name="des_prog" type="text" value="<?php echo $row['des_prog'] ?>" maxlength="70"></td>
                            <td><input name="estado" type="text" value="<?php echo $row['estado'] ?>" size="5" maxlength="2"></td>
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