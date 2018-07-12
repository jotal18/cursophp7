<?php

$filename = "viva.jpg";
//converte binário em texto
$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);
$mimetype = $fileinfo->file($filename);

//data:image/extensão_do_arquivo;base64 . $base64 (variável com o base64_encode)
$base64encode = "data:" . $mimetype . ";base64," . $base64;

?>

<a href="<?=$base64encode?>" target="_blank">Link para imagem.</a>
<img src="<?=$base64encode?>">

