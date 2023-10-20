<?php
// Define la URL de destino
$url = 'http://novasegurolatam.com/';

// Establece la cookie
setcookie('redirect_url', $url, time() + 300);

// Muestra un mensaje de cargando animado
echo '<div class="cargando">Cargando...</div>';

// Finaliza el script
exit();
?>
