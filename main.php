<?php

$argv = $_SERVER['argv'];

// Verifica si se proporcionaron argumentos
if (empty($argv)) {
  echo "Proporciona un JSON como argumento.";
  return;
}

// El primer argumento es tratado como el JSON
$json_string = $argv[1];

try {
  // analizar el JSON
  $data = json_decode($json_string);

  // Imprime el contenido del JSON
  echo "Contenido del JSON:";
  echo json_encode($data, JSON_PRETTY_PRINT);
} catch (Exception $e) {
  echo "Error al decodificar el JSON: " . $e->getMessage();
}

?>
