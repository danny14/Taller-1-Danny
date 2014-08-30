<?php
require_once ('../../tablas/DataBaseClass.php');
$cod_ciudad = $_POST['cod_ciudad'];
try {
    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $sql = "SELECT * from ciudad where cod_ciudad='$cod_ciudad'";
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
        <form name="datos" method="post" action="modCiudad.php">
            <div align="center">
                <table border="1">
                    <tr>
                        <th>Nombre de la Ciudad </th>
                        <th>Codigo de Departamento</th>
                        <th>Habitantes</th>
                    </tr>
                    <?php foreach ($arrData as $row): ?>
                        <input type="hidden" name="cod_ciudad" value="<?php echo $row['cod_ciudad'] ?>">
                        <tr>
                            <td><input name="nom_ciudad" type="text" value="<?php echo $row['nom_ciudad'] ?>" maxlength="60"></td>
                            <td><input name="cod_depto" type="text" value="<?php echo $row['cod_depto'] ?>" maxlength="2"></td>
                            <td><input name="habitantes" type="text" value="<?php echo $row['habitantes'] ?>" maxlength="6"></td>
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