<?php
if (isset($_POST['Email'], $_POST['Contrasena'], $_POST['Name'], $_POST['Bio'], $_POST['Phone'])) {
    $Email = $_POST['Email'];
    $Contrasena = $_POST['Contrasena'];
    $Name = $_POST['Name'];
    $Bio = $_POST['Bio'];
    $Phone = $_POST['Phone'];
    $hashed_password = password_hash($Contrasena, PASSWORD_BCRYPT);

    // Verificamos si se cargó una imagen
    if (isset($_FILES['Photo'])) {
        $targetDirectory = "../imag/"; 
        $targetFile = $targetDirectory . basename($_FILES['Photo']['name']);

        // Verificamos si la imagen se cargó correctamente
        if (move_uploaded_file($_FILES['Photo']['tmp_name'], $targetFile)) {
            // La imagen se cargó correctamente, ahora puedes guardar el nombre del archivo en la base de datos
            require_once($_SERVER["DOCUMENT_ROOT"] . "../conec_base/database.php");

            $stmt = $mysqli->prepare("INSERT INTO login_db (Email, Contrasena, Photo, Name, Bio, Phone) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $Email, $hashed_password, $_FILES['Photo']['name'], $Name, $Bio, $Phone);

            if ($stmt->execute()) {
                header("Location: ../views/login.php");
            } else {
                echo "Error al registrar el usuario.";
            }

            $stmt->close();
            $mysqli->close();
        } else {
            header("location:/manejo_errores/cargar_img.php");
        }
    } else {
        echo "Por favor, seleccione una imagen.";
    }
} else {
    echo "Datos de usuario no válidos.";
}
?>
