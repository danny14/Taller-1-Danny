<html>
    <head>
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
        <div align="center">INSERTAR REGISTRO</div>
        <div align="center">
            <form action="create/InsertarAprendiz.php" name="IR" method="post">
                <table width="362" border="1">
                    <tr>
                        <td width="138">ID APRENDIZ:</td>
                        <td width="208"><label>
                                <input name="id_apre" type="text" maxlength="20" />
                            </label></td>
                    </tr>
                    <tr>
                        <td>Nombre Aprendiz:</td>
                        <td>
                            <input name="nom_apre" type="text" maxlength="50" />
                        </td>
                    </tr>
                    <tr>
                        <td>Apellido Aprendiz</td>
                        <td>
                            <input name="apel_apre" type="text" maxlength="50" />
                        </td>
                    </tr>
                    <tr>
                        <td>Telefono Aprendiz</td>
                        <td>
                            <input name="tel_apre" type="text" maxlength="15" />
                        </td>
                    </tr>
                    <tr>
                        <td>Codigo Ciudad</td>
                        <td>
                            <input name="cod_ciudad" type="text" maxlength="5" />
                        </td>
                    </tr>
                    <tr>
                        <td>Codigo Tipo ID</td>
                        <td>
                            <input name="cod_tipo_id" type="text" maxlength="2" />
                        </td>
                    </tr>
                    <tr>
                        <td>Codigo RH</td>
                        <td>
                            <input name="cod_rh" type="text" maxlength="2" />
                        </td>
                    </tr>
                    <tr>
                        <td>Genero</td>
                        <td>
                            <input name="genero" type="text" maxlength="2" />
                        </td>
                    </tr>
                    <tr>
                        <td>Edad</td>
                        <td>
                            <input type="text" name="edad" />
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="enviar" value="Insertar Registros" onClick="javascript:alert('listo se ingresaron')"></td>
                        <td><input type="reset" name="reset" value="Resetear" /></td>
                    </tr>
                </table>
                <a href="../index.php"><input type="button" value="Volver al Inicio"/></a>
            </form>
        </div>
        <p>&nbsp;</p>
    </body>
</html>