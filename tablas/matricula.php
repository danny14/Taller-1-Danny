<?php
require_once 'DataBaseClass.php';
try {

    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $sql = "SELECT * from matricula";
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
        <title>Matricula</title>
    </head>

    <body>
        <div align="center">MATRICULA</div>
        <div align="center">
            <table width="200" border="1">
                <tr>
                    <td><a href="../insertar/matricula.php"><input type='button' value="Insertar"></a></td>
                    <td><a href="../modificar/matricula.php"><input type="button" value="modificar"/></a></td>
                    <td><a href="../eliminar/matricula.php"><input type="button" value="Eliminar"/></a></td>
                </tr>
            </table>
        </div>
        <br>
    <center>
        <table border='2'>
            <tr>
                <th>Numero de Ficha</th>
                <th>ID del Aprendiz</th>
                <th>Estado</th>
            </tr>
            <?php foreach ($arrData as $row): ?>
                <tr>
                    <td><?php echo $row['num_ficha'] ?></td>
                    <td><?php echo $row['id_apre'] ?></td>
                    <td><?php echo $row['estado'] ?></td>
                </tr>
            <?php endforeach ?>
        </table><br>
        <a href="../index.php"><input type="button" value="Volver al Inicio"/></a>
    </center>
</body>
</html>
