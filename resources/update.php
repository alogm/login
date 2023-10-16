<?php
extract($_POST);

require_once($_SERVER["DOCUMENT_ROOT"] . "../conec_base/database.php");
$hashedPassword = password_hash($Contrasena, PASSWORD_DEFAULT);

if (isset($_FILES['Photo'])) {
    $targetDirectory = "../imag/"; 
    $targetFile = $targetDirectory . basename($_FILES['Photo']['name']);
    
    if (move_uploaded_file($_FILES['Photo']['tmp_name'], $targetFile)) {
        $mysqli->query("UPDATE login_db SET email='$Email', contrasena='$hashedPassword', photo='{$_FILES['Photo']['name']}', name='$Name', Bio='$Bio', phone='$Phone' WHERE Usuario ='$id'");
    } else {
        header("location:/manejo_errores/errorLogin.php");
    }
} else {
    $mysqli->query("UPDATE login_db SET email='$Email', contrasena='$hashedPassword', name='$Name', Bio='$Bio', phone='$Phone' WHERE Usuario ='$id'");
}

header("Location: ../views/perfil.php");
