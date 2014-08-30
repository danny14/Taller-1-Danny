<?php
require_once 'DataBaseClass.php';
try {

    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $sql = "SELECT * from causadesercion";
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
        <title>Causa de Desercion</title>
    </head>

    <body>
        <div align="center">CAUSA DE DESERCION </div>
        <div align="center">
            <table width="200" border="1">
                <tr>
                    <td><a href="../insertar/causadesercion.php"><input type='button' value="Insertar"></a></td>
                    <td><a href="../modificar/causadesercion.php"><input type="button" value="modificar"/></a></td>
                    <td><a href="../eliminar/causadesercion.php"><input type="button" value="Eliminar"/></a></td>
                </tr>
            </table>
        </div><br>
    <center>
        <table border='2'>
            <tr>
                <th>Codigo de la Causa</th>
                <th>Descripcion de la Causa</th>
                <th>Estado</th>
            </tr>
            <?php foreach ($arrData as $row): ?>
                <tr>
                    <td><?php echo $row['cod_causa'] ?></td>
                    <td><?php echo $row['des_causa'] ?></td>
                    <td><?php echo $row['estado_causa'] ?></td>
                </tr>
            <?php endforeach ?>
        </table><br>
        <a href="../index.php"><input type="button" value="Volver al Inicio"/></a>
    </center>
</body>
</html>
