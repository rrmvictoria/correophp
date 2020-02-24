<?php

$destino="viki.203@hotmail.com";
  $nombre= $_POST["nombre"];
  $correo = $_POST["apellido"];
  $contenido="nombre: " . $nombre ."\napellido:" . $apellido;
  mail($destino,"contacto",$contenido);
    
    
    header(location:gracias.html);
    ?>