<?php
require_once 'DataBaseClass.php';
try {

    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $sql = "SELECT * from desercion";
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
        <div align="center">DESERCION</div>
        <div align="center">
            <table width="200" border="1">
                <tr>
                    <td><a href="../insertar/desercion.php"><input type='button' value="Insertar"></a></td>
                    <td><a href="../modificar/desercion.php"><input type="button" value="modificar"/></a></td>
                    <td><a href="../eliminar/desercion.php"><input type="button" value="Eliminar"/></a></td>
                </tr>
            </table>
        </div><br>
    <center>
        <table border='2'>
            <tr>
                <th>Numero de Documento</th>
                <th>Fecha</th>
                <th>ID del Aprendiz</th>
                <td>Numero de Ficha</td>
                <th>Codigo de Causa</th>
                <th>Fecha de Desercion</th>
                <th>Fase de Desercion</th>
            </tr>
            <?php foreach ($arrData as $row): ?>
                <tr>
                    <td><?php echo $row['num_doc'] ?></td>
                    <td><?php echo $row['fecha'] ?></td>
                    <td><?php echo $row['id_apre'] ?></td>
                    <td><?php echo $row['num_ficha'] ?></td>
                    <td><?php echo $row['cod_causa'] ?></td>
                    <td><?php echo $row['fecha_desercion'] ?></td>
                    <td><?php echo $row['fase_desercion'] ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </center>
    <div align="center"><a href="../index.php">
            <input type="button" value="Volver al Inicio"/>
        </a>
    </div>
</body>
</html>
