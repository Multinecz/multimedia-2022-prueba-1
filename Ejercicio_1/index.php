<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
      <form action="form.php" method="post">
        <table>
          <tr>
            <td>Titulo:</td>
            <td><input type="text" name="Título" required></td>
            <tr>
            <td>Cuerpo:</td>
            <td><input type="text" name="cuerpo de la noticia" required></td>
            </tr>
            <tr>
            <td>Categoria:</td>
  
            <td><input type="radio" required value="En">Entretenimiento</td>
            <td><input type="radio" required value="Dp">Deportes</td>
            <td><input type="radio" required value="Ec">Economía</td>
            <td><input type="radio" required value="Ac">Actualidad </td>
            </tr>
            <tr>
            <td>Imagen:</td>
            <td><input type="text"></td>
            </tr>
            <tr>
            <td>autor:</td>
            <td><input type="text"  name="Nombre del autor" required></td>
            </tr>
          </tr>
          <tr>
            <td><input type="submit" value="Enviar"></td>
          </tr>
        </table>

    </form>
</body>
</html>
