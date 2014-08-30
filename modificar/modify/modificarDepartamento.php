<?php
require_once ('../../tablas/DataBaseClass.php');
$cod_depto = $_POST['cod_depto'];
try {
    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $sql = "SELECT * from depto where cod_depto='$cod_depto'";
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
        <form name="datos" method="post" action="modDepartamento.php">
            <div align="center">
                <table border="1">
                    <tr>
                        <th>Nombre del Departamento </th>
                    </tr>
                    <?php foreach ($arrData as $row): ?>
                        <input type="hidden" name="cod_depto" value="<?php echo $row['cod_depto'] ?>">
                        <tr>
                            <td><input name="nom_depto" type="text" value="<?php echo $row['nom_depto'] ?>" maxlength="30"></td>
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