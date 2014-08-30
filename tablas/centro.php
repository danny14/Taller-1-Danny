<?php
require_once 'DataBaseClass.php';
try {

    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $sql = "SELECT * from centro";
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
        <title>Aprendiz</title>
    </head>

    <body>
        <div align="center">CENTRO</div>
        <div align="center">
            <table width="200" border="1">
                <tr>
                    <td><a href="../insertar/centro.php"><input type='button' value="Insertar"></a></td>
                    <td><a href="../modificar/centro.php"><input type="button" value="modificar"/></a></td>
                    <td><a href="../eliminar/centro.php"><input type="button" value="Eliminar"/></a></td>
                </tr>
            </table>
        </div><br>
    <center>
        <table width="892" border='2'>
            <tr>
                <th>Codigo de centro</th>
                <th>Descripcion del centro</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Codigo de ciudad</th>
            </tr>
            <?php foreach ($arrData as $row): ?>
                <tr>
                    <td><?php echo $row['cod_centro'] ?></td>
                    <td><?php echo $row['des_centro'] ?></td>
                    <td><?php echo $row['tel_centro'] ?></td>
                    <td><?php echo $row['dir_centro'] ?></td>
                    <td><?php echo $row['cod_ciudad'] ?></td>
                </tr>
            <?php endforeach ?>
        </table><br>
        <a href="../index.php"><input type="button" value="Volver al Inicio"/></a>
    </center>
</body>
</html>
