<?php
require_once ('../../tablas/DataBaseClass.php');
$cod_causa = $_POST['cod_causa'];
try {
    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $sql = "SELECT * from causadesercion where cod_causa='$cod_causa'";
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
        <form name="datos" method="post" action="modCausadesercion.php">
            <div align="center">
                <table border="1">
                    <tr>
                        <th>Descripcion de Causa </th>
                        <th>Estado Causa</th>
                    </tr>
                    <?php foreach ($arrData as $row): ?>
                        <input type="hidden" name="cod_causa" value="<?php echo $row['cod_causa'] ?>">
                        <tr>
                            <td><input name="des_causa" type="text" value="<?php echo $row['des_causa'] ?>" maxlength="30"></td>
                            <td><input name="estado_causa" type="text" value="<?php echo $row['estado_causa'] ?>" maxlength="2"></td>
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