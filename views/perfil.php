<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/perfil.css">

    <title>Perfil</title>
</head>

<body>
    <section class="arriba">
        <img src="/assets/devchallenges.svg" alt="" class="logo">
        <?php
session_start();
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
    </section>

    <a href="../resources/cierre.php" class="logout">Logout</a>


    <form method="post" action="../resources/delete.php">
        <input type="hidden" name="id" value="<?= $Usuario['Usuario'] ?>">
        <button type="submit">Eliminar Perfil</button>
    </form>
    <section class="encabezado">
        <h1>Personal info </h1>
        <p>Basic info, like your name and photo</p>
    </section>

    <section class="container">
        <div class="sub">
        <h3>Profile</h3>
        <p>Some info may be visible to other people</p>
        <button class="bttn"><a href="/views/update.php?id=<?= $Usuario['Usuario']; ?>">Edit</a></button>
        <p class="line"></p>
        </div>
        <br>
        <div class="image-container">
            <p>Photo</p>
            <img src="/imag/<?php echo $Usuario['Photo']; ?>" alt="Imagen usuario" class="img">
        </div>


        <p class="line"></p>

        <p class="line">Name <span><?php echo $Usuario['Name']; ?></span></p>

        <p class="line">Bio <span><?php echo $Usuario['Bio']; ?></span></p>

        <p class="line">Phone <span><?php echo $Usuario['Phone']; ?></span></p>

        <p class="line">Email <span><?php echo $Usuario["Email"]; ?></span></p>

        <p>Password <span>********</span></p>

    </section>
    <div class="abajo">
        <p>created by <a href="">username</a></p>
        <p>devChallenges.io</p>
    </div>
</body>

</html>