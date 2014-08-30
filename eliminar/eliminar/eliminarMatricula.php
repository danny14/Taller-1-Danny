<?php
require_once '../../tablas/DataBaseClass.php';
$id_apre = $_POST['id_apre'];
try {
    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $sql = "SELECT * from matricula where id_apre='$id_apre'";
    $arrData = $objDB->getInstance()
            ->query($sql)
            ->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOExcepcion $ex) {
    echo $exc->getmessage();
}
?>
<html>
    <head>
        <title>Campos a Eliminar</title>
    </head>
    <body>
        <form name="datos" method="post" action="delMatricula.php">
            <div align="center">
                <table border="1">
                    <tr>
                        <th>Numero de Ficha</th>
                        <th>Estado</th>
                    </tr>
                    <?php foreach ($arrData as $row): ?>
                        <input type="hidden" name="id_apre" value="<?php echo $row['id_apre'] ?>">
                        <tr>
                            <td><input type="text" name="num_ficha" value="<?php echo $row['num_ficha'] ?>"></td>
                            <td><input type="text" name="estado" value="<?php echo $row['estado'] ?>" size="5"></td>
                        </tr>
                        <tr>
                            <td colspan="8"><div align="center"><input name="submit" type="submit" value="Eliminar"></div></td>
                        </tr>
                    <?php endforeach ?>
                </table>
                <p>&nbsp;</p>

            </div>
        </form>
    </body>
</html>