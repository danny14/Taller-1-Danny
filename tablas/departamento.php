<?php
require_once 'DataBaseClass.php';
try {

    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $sql = "SELECT * from depto";
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
        <div align="center">DEPARTAMENTO</div>
        <div align="center">
            <table width="200" border="1">
                <tr>
                    <td><a href="../insertar/departamento.php"><input type='button' value="Insertar"></a></td>
                    <td><a href="../modificar/departamento.php"><input type="button" value="modificar"/></a></td>
                    <td><a href="../eliminar/departamento.php"><input type="button" value="Eliminar"/></a></td>
                </tr>
            </table>
        </div>
        <br>
    <center>
        <table border='2'>
            <tr>
                <th>Codigo Departamento</th>
                <th>Nombre del Departamento</th>
            </tr>
            <?php foreach ($arrData as $row): ?>
                <tr>
                    <td><?php echo $row['cod_depto'] ?></td>
                    <td><?php echo $row['nom_depto'] ?></td>
                </tr>
            <?php endforeach ?>
        </table>
        <br>
        <a href="../index.php"><input type="button" value="Volver al Inicio"/></a>
    </center>
</body>
</html>
