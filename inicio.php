<?php
use Illuminate\Database\Capsule\Manager as DB;

require 'vendor\autoload.php';
require 'config\database.php';

$user = DB::table('usuarios')
->leftJoin('perfiles', 'usuarios.idperfil', '=', 'perfiles.idperfil')
->where('usuarios.idusuarios', $_GET['idusuario'])->first();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema escolar </title>
    <link rel="stylesheet" href="node_modules\bulma\css\bulma.min.css">
</head>
<body>
  <div class='container'>
      <h1>sistema escolar</h1>
      <?php if ($user->nombreperfil == 'profesor') { ?>

        <h2>agregar calificacion</h2>

        <form action="insertar.php" method="post">
        <label for="calificacions">calificacion:</label>
        <br>
        <input id="calificacion" type="text" name="calificacion">
        <br>
        <input type="submit" value="Guardar">
     </form> 
      <?php } ?>
      <form action="insertar.php" method="post">
      <input type="submit" value="Guardar">
      </form>
      </div>
</body>