<?php
session_start();

$id = $_GET["id"];
require_once("../resources/Usuarios.php");
$data = getByID($id);

if ($data) {
    extract($data);
} else {
    echo "Usuario no encontrado";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="/style/update.css">
    <title>Update</title>
</head>

<body>
<div class="arriba">
    <img src="/assets/devchallenges.svg" alt="" class="logo">
    <?php
if (isset($_SESSION['user_data'])) {
        $Usuario = $_SESSION['user_data'];
        echo '<div class="user-profile">';
        echo '<img src="/imag/' . $Usuario['Photo'] . '" alt="Imagen usuario" class="profile-picture">';
        echo '<p class="user-name">' . $Usuario['Name'] . '</p>';
        echo '</div>';
    } else {
        header("location:../views/login.php");
    }
    ?>
    </div>
    <p class="back"><a href="/views/perfil.php">
            < Back</a>
    </p>
    <section>

        <h1>Change Info</h1>
        <p>Changes will be reflected to every services</p>

        <form method="post" action="../resources/update.php" enctype="multipart/form-data">
            <div class="image-container">
                <img src="/imag/<?php echo $Usuario['Photo']; ?>" alt="Imagen usuario" class="img">
                <input type="file" id="fileInput" name="Photo" accept="image/*" style="display: none;">
                <label for="fileInput" class="custom-file-input">
                    <span class="material-symbols-outlined">
                        photo_camera
                    </span>
                </label>
            </div>

            <h6>Id</h6>
            <input type="number" readonly value="<?= $id ?>" name="id" class="input">

            <h6>Name</h6>
            <input type="text" value="<?= $Name ?>" name="Name" class="input">

            <h6>Bio</h6>
            <textarea type="text" value="<?= $Bio ?>" name="Bio" class="bio" cols="30" rows="10"></textarea>

            <h6>Phone</h6>
            <input type="number" value="<?= $Phone ?>" name="Phone" class="input">

            <h6>Email</h6>
            <input type="text" value="<?= $Email ?>" name="Email" class="input">

            <h6>Password</h6>
            <input type="text" name="Contrasena" class="input">
            <br>

            <button type="submit" class="submit">Save</button>
        </form>
    </section>

    <div class="abajo">
        <p>created by <a href="">username</a></p>
        <p>devChallenges.io</p>
    </div>
</body>

</html>