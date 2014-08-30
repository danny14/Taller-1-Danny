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
        <div align="center">INSERTAR REGISTRO XD TENGO PEREZA DE TIRAR CODIGO PERO BUENO </div>
        <div align="center">
            <form action="create/InsertarDepartamento.php" name="IR" method="post">
                <table width="339" border="1">
                    <tr>
                        <td width="165">Codigo Departamento </td>
                        <td width="158"><label>
                                <input name="cod_depto" type="text" maxlength="2" />
                            </label></td>
                    </tr>
                    <tr>
                        <td>Nombre Departamento :</td>
                        <td>
                            <input name="nom_depto" type="text" maxlength="30" />      </td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="enviar" value="Insertar Registros"></td>
                        <td><input type="reset" name="reset" value="Resetear" /></td>
                    </tr>
                </table>
                <a href="../index.php"><input type="button" value="Volver al Inicio"/></a>
            </form>
        </div>
        <p>&nbsp;</p>
    </body>
</html>
