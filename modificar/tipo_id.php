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
            <form action="modify/modificarTipo_id.php" name="IR" method="post">
                <table width="362" border="1">
                    <tr>
                        <td width="138">Codigo Tipo ID </td>
                        <td width="208"><label>
                                <input name="cod_tipo_id" type="text" maxlength="2" />
                            </label></td>
                    </tr>
                    <tr>
                        <td colspan="2"><div align="center">
                                <input type="submit" name="enviar" value="Buscar y Modificar" />
                            </div></td>
                    </tr>
                </table>
            </form>
            <a href="../index.php"><input type="button" value="Volver al Inicio"/></a>
        </div>
        <p>&nbsp;</p>
    </body>
</html>