<?php
// Este código se ejecuta cuando se accede directamente al archivo, puedes eliminarlo si no lo necesitas.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Nombre del archivo a descargar
    $filename = "dummy.txt";

    // Contenido del archivo
    $content = "Este es un texto dummy.\nEsto es una segunda línea de texto./";

    // Establecer las cabeceras para la descarga
    header("Content-Type: text/plain");
    //header("Content-Type: text/plain"): Esta cabecera le dice al navegador que el contenido que se va a enviar es de tipo texto plano. Esto es importante para que el navegador sepa cómo manejar el archivo.

    header("Content-Disposition: attachment; filename=\"$filename\"");
    //header("Content-Disposition: attachment; filename=\"$filename\""): Esta cabecera indica al navegador que debe tratar la respuesta como un archivo adjunto que el usuario puede descargar. El filename especifica el nombre del archivo sugerido para la descarga.

    header("Content-Length: " . strlen($content));
    //header("Content-Length: " . strlen($content)): Esta cabecera establece la longitud del contenido que se va a enviar. Esto puede ayudar al navegador a manejar la descarga de manera más eficiente.

    // Imprimir el contenido del archivo
    echo $content;
    exit;
}
?>