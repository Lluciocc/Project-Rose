<?php
$hash = '$2y$10$qHqM69zE9OoR2r.LRd1xjOsuz8B4pHtnPqIDkgRlK8x/SMrddCIfe';

if (password_verify($_POST["password"],$hash)){

    header("Location : https://spcrose.fr/home.php");
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login - SPC Rose</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Images/Icon/rose_icon.png">
</head>

<body id="login-page">

    <header>
        <input class="logo" type="image" src="Images/rose logo.png" alt="Rose">
        <h1 class="title">SPC Rose</h1>
    </header>

    <form method="post" class="login">
        <input id="password" type="password" name="password" placeholder="Password">
        <p id="error-message"></p>
        <input class="submit" type="submit" value="LOGIN">
    </form>

</body>



</html>
      
