<?php
require_once 'DataBaseClass.php';
try {

    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $sql = "SELECT * from tipo_id";
    $arrData = $objDB->getInstance()
            ->query($sql)
            ->fetchAll(PDO::FETCH_ASSOC);
    //$db= new PDO($dsn,$username,$passwd);
    //$sql='SELECT * FROM usuario';
    //$src=$db->query($sql);
    //$arrData=$src->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOExcepcion $ex) {
    echo $exc->getmessage();
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Tipo_id</title>
    </head>

    <body>
        <div align="center">TIPO IDENTIDAD </div>
        <div align="center">
            <table width="200" border="1">
                <tr>
                    <td><a href="../insertar/tipo_id.php"><input type='button' value="Insertar"></a></td>
                    <td><a href="../modificar/tipo_id.php"><input type="button" value="modificar"/></a></td>
                    <td><a href="../eliminar/tipo_id.php"><input type="button" value="Eliminar"/></a></td>
                </tr>
            </table>
        </div>
    <center>
        <br>
        <table border='2'>
            <tr>
                <th>Codigo Tipo ID</th>
                <th>Descripcion Tipo ID</th>
                <th>Siglas</th>
            </tr>
            <?php foreach ($arrData as $row): ?>
                <tr>
                    <td><?php echo $row['cod_tipo_id'] ?></td>
                    <td><?php echo $row['des_tipo_id'] ?></td>
                    <td><?php echo $row['siglas'] ?></td>
                </tr>
            <?php endforeach ?>
        </table><br>
        <a href="../index.php"><input type="button" value="Volver al Inicio"/></a>
    </center>
</body>
</html>
