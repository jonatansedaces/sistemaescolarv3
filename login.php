<?php
use Illuminate\Database\Capsule\Manager as DB;

require 'vendor\autoload.php';
require 'config\database.php';

$users = DB :: table('usuarios')
->leftJoin('perfiles', 'usuarios.idperfil', '=',  'perfiles.idperfil')
->where('nombreusuario', $_POST ['usuario'])->first();

$mensaje = '';
if ($users->password == $_POST['password']){
    $mensaje = "<h1 bienvenido: {$user->nombreperfil} {$user->nombreusuario}</h1>
    <br> <href = inicio.php? idusuario = {$user->idusuario} '> Entrar al sistema escolar </a>";
} else{
    $mensaje = "<h1>usuario y/o contraseña erroneos, porfavor verefique y vuelva auntentificarse</h1>
    <br> <a href = 'index.html'> regresar </a>";
}

echo $mensaje;