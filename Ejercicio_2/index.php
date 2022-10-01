
<?php
 require 'phpqrcode/qrlib.php';

$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];

echo $nombre. "<br>";
echo $apellido. "<br>";
 $dir = 'temp/';

 if(!file_exists($dir))
     mkdir($dir);

 $filename = $dir.'test.png';

 $tamanio = 25;
 $level =  'H';
 $frameSize = 10;
 $content = 'Formulario con QR';

 QRcode::png($content, $filename, $level, $frameSize, $tamanio);

 echo '<img src="'.$filename.'"/>';

?>
