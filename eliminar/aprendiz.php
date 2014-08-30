<html>
    <head>
        <title>Buscar y Eliminar</title>
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
        <div align="center">ELIMINAR REGISTROS  </div>
        <div align="center">
            <form action="eliminar/eliminarAprendiz.php" name="IR" method="post">
                <table border="1" align="center">
                    <tr>
                        <td width="138">ID APRENDIZ:</td>
                        <td width="208"><label>
                                <input type="text" name="id_apre" />
                            </label></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" name="enviar" value="Buscar y Eliminar"></td>
                    </tr>
                </table>
                <a href="../index.php"><input type="button" value="Volver al Inicio"/></a>
            </form>
        </div>
        <p>&nbsp;</p>
    </body>
</html>