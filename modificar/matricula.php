<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Insertar Registros</title>
        <style type="text/css">
            <!--
            body {
                background-color: #000000;
            }
            body,td,th {
                color: #FFFFFF;
            }
            -->
        </style></head>

    <body>
        <div align="center">MODIFICAR REGISTRO</div>
        <div align="center">
            <form action="modify/modificarMatricula.php" name="IR" method="post">
                <table width="362" border="1">
                    <tr>
                        <td width="138">ID Aprendiz </td>
                        <td width="208">
                            <input name="id_apre" type="text" maxlength="10" />      </td>
                    </tr>
                    <tr>
                        <td colspan="2"><div align="center">
                                <input type="submit" name="enviar" value="Buscar y Modificar" />
                            </div></td>
                    </tr>
                </table>
                <a href="../index.php"><input type="button" value="Volver al Inicio"/></a>
            </form>
        </div>
        <p>&nbsp;</p>
    </body>
</html>