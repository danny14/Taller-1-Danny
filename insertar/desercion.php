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
            <form action="create/InsertarDesercion.php" name="IR" method="post">
                <table width="362" border="1">
                    <tr>
                        <td width="138">Numero de Documento </td>
                        <td width="208"><label>
                                <input name="num_doc" type="text" maxlength="4" />
                            </label></td>
                    </tr>
                    <tr>
                        <td>Fecha:</td>
                        <td>
                            <input name="fecha" type="text" maxlength="20" />      </td>
                    </tr>
                    <tr>
                        <td>ID Aprendiz </td>
                        <td>
                            <input name="id_apre" type="text" maxlength="15" />      </td>
                    </tr>
                    <tr>
                        <td>Numero de Ficha </td>
                        <td><input name="num_ficha" type="text" maxlength="7" /></td>
                    </tr>
                    <tr>
                        <td>Codigo Causa </td>
                        <td><input name="cod_causa" type="text" maxlength="2" /></td>
                    </tr>
                    <tr>
                        <td>Fecha Desercion </td>
                        <td><input name="fecha_desercion" type="text" maxlength="20" /></td>
                    </tr>
                    <tr>
                        <td>Fase Desercion </td>
                        <td><input type="text" name="fase_desercion" /></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="enviar" value="Insertar Registros" /></td>
                        <td><input type="reset" name="reset" value="Resetear" /></td>
                    </tr>
                </table>
                <a href="../index.php"><input type="button" value="Volver al Inicio"/></a>
            </form>
        </div>
        <p>&nbsp;</p>
    </body>
</html>
