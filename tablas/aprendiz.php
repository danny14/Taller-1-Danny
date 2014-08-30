<?php
require_once 'DataBaseClass.php';
try {

    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $sql = "SELECT * from aprendiz";
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
        <div align="center">APRENDIZ</div>
        <div align="center">
            <table width="200" border="1">
                <tr>
                    <td><a href="../insertar/aprendiz.php"><input type='button' value="Insertar"></a></td>
                    <td><a href="../modificar/aprendiz.php"><input type="button" value="modificar"/></a></td>
                    <td><a href="../eliminar/aprendiz.php"><input type="button" value="Eliminar"/></a></td>
                </tr>
            </table>
        </div><br>
    <center>
        <table border='2'>
            <tr>
                <th>Identificacion de Aprendiz</th>
                <th>Nombre Aprendiz</th>
                <th>Apellido Aprendiz</th>
                <th>Telefono</th>
                <th>Codigo de ciudad</th>
                <th>Codigo Tipo ID</th>
                <th>Codigo RH</th>
                <th>Genero</th>
                <th>Edad</th>
            </tr>
            <?php foreach ($arrData as $row): ?>
                <tr>
                    <td><?php echo $row['id_apre'] ?></td>
                    <td><?php echo $row['nom_apre'] ?></td>
                    <td><?php echo $row['apel_apre'] ?></td>
                    <td><?php echo $row['tel_apre'] ?></td>
                    <td><?php echo $row['cod_ciudad'] ?></td>
                    <td><?php echo $row['cod_tipo_id'] ?></td>
                    <td><?php echo $row['cod_rh'] ?></td>
                    <td><?php echo $row['genero'] ?></td>
                    <td><?php echo $row['edad'] ?></td>
                </tr>
            <?php endforeach ?>
        </table><br>
        <a href="../index.php"><input type="button" value="Volver al Inicio"/></a>
    </center>
</body>
</html>
