<?php
$titulo = $_POST['titulo'];
$cuerpo = $_POST['cuerpo'];
$categoria = $_POST['categoria'];
$imagen = $_POST['imagen'];
$autor = $_POST['autor'];

if(!empty($titulo) || !empty($cuerpo) || !empty($categoria) || !empty($imagen) || !empty($autor) ){
  $host = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "noticias";

  $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
  if (mysqli_connect_error()) {
    die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
  }
  else {
    $SELECT = "SELECT imagen from hecho where imagen = ? limit 1";
    $INSERT = "INSERT INTO hecho (titulo,cuerpo,categoria,imagen,autor)values(?,?,?,?,?)";

    $stmt = $conn->prepare($SELECT);
    $stmt ->bind_param("i", $imagen);
    $stmt ->execute();
    $stmt ->bind_result($imagen);
    $stmt ->store_result();
    $rnum =$stmt->num_rows;
    if($rnum == 0){
        $stmt ->close();
        $stmt = $conn->prepare($INSERT);
        $stmt ->bind_param("ssssi", $titulo,$cuerpo,$categoria,$autor,$imagen);
        $stmt ->execute();
        echo "Su noticia se ha registrado.";
        {
          else {
            echo "Alguien ya público esa imagen.";
          }
          $stmt->close();
          $conn->close();
        }
    }

  }

}else {
    echo "todos los datos son OBLIGATORIOS";
    die();
}
?>
