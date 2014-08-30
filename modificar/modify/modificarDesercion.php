<?php
require_once ('../../tablas/DataBaseClass.php');
$num_doc = $_POST['num_doc'];
try {
    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $sql = "SELECT * from desercion where num_doc='$num_doc'";
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
        <form name="datos" method="post" action="modDesercion.php">
            <div align="center">
                <table border="1">
                    <tr>
                        <th>Fecha</th>
                        <th>ID Aprendiz</th>
                        <th>Numero de Ficha</th>
                        <th>codigo de la Causa</th>
                        <th>Fecha de Desercion</th>
                        <th>Fase de la Desercion</th>
                    </tr>
                    <?php foreach ($arrData as $row): ?>
                        <input type="hidden" name="num_doc" value="<?php echo $row['num_doc'] ?>">
                        <tr>
                            <td><input name="fecha" type="text" value="<?php echo $row['fecha'] ?>" maxlength="20"></td>
                            <td><input name="id_apre" type="text" value="<?php echo $row['id_apre'] ?>" maxlength="15"></td>
                            <td><input name="num_ficha" type="text" value="<?php echo $row['num_ficha'] ?>" maxlength="7"></td>
                            <td><input name="cod_causa" type="text" value="<?php echo $row['cod_causa'] ?>" maxlength="2"></td>
                            <td><input name="fecha_desercion" type="text" value="<?php echo $row['fecha_desercion'] ?>" maxlength="20"></td>
                            <td><input name="fase_desercion" type="text" value="<?php echo $row['fase_desercion'] ?>" maxlength="12"></td>
                        </tr>
                        <tr>
                            <td colspan="8"><div align="center"><input name="submit" type="submit" value="Modificar"></div></td>
                        </tr>
                    <?php endforeach ?>
                </table>
                <p></p>	
            </div>
        </form>
    </body>
</html>