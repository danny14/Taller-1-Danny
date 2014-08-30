<?php
require_once '../../tablas/DataBaseClass.php';
$num_ficha = $_POST['num_ficha'];
try {
    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $sql = "SELECT * from ficha where num_ficha='$num_ficha'";
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
        <form name="datos" method="post" action="modFicha.php">
            <div align="center">
                <table border="1">
                    <tr>
                        <th>codigo del Programa </th>
                        <th>Fecha de Inicio</th>
                        <th>Fecha de finalizacion</th>
                        <th>Codigo del Centro</th>
                    </tr>
                    <?php foreach ($arrData as $row): ?>
                        <input type="hidden" name="num_ficha" value="<?php echo $row['num_ficha'] ?>">
                        <tr>
                            <td><input name="cod_programa" type="text" value="<?php echo $row['cod_programa'] ?>" size="5" maxlength="2"></td>
                            <td><input name="fecha_ini" type="text" value="<?php echo $row['fecha_ini'] ?>" maxlength="20"></td>
                            <td><input name="fecha_fin" type="text" value="<?php echo $row['fecha_fin'] ?>" maxlength="20"></td>
                            <td><input name="cod_centro" type="text" value="<?php echo $row['cod_centro'] ?>" size="5" maxlength="2"></td>
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