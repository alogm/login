<?php
session_start();

// Destruye la sesión y redirige al usuario a la página de inicio de sesión
session_destroy();
header("location:../index.php");
