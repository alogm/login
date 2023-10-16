<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="./style/index.css">
    <title>Devchallenges</title>
</head>

<body>
    <section>
        <img src="/assets/devchallenges.svg" alt="" class="img">
        <h1>Join thousands of learners from around the world</h1>
        <p>Master web development by making real-life projects. There are multiple paths for you to choose</p>
        
        <form method="post" action="../resources/index.php">
            <div class="input-container">
                <input type="email" name="Email" placeholder="Email" required>
                <span class="material-symbols-outlined">mail</span>
            </div>
            <div class="input-container">
                <input type="password" name="Contrasena" placeholder="Password" required>
                <span class="material-symbols-outlined">lock</span>
            </div>
            <button type="submit" class="submit">Start coding now</button>
        </form>

        <div class="center">
            <p>or continue with these social profile</p>

            <a href=""><img src="/assets/Google.svg" alt=""></a>
            <a href=""><img src="/assets/Facebook.svg" alt=""></a>
            <a href=""><img src="/assets/Twitter.svg" alt=""></a>
            <a href=""><img src="/assets/Gihub.svg" alt=""></a>

            <p>Adready a member? <a href="/views/login.php">Login</a></p>
        </div>
    </section>
    <div class="abajo">
        <p>created by <a href="">username</a></p>
        <p>devChallenges.io</p>
    </div>

</body>

</html>