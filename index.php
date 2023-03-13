<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <?php

        $login = "admin";
        $senha = "1234";
        $error = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($login == $_POST["login"] && $senha == $_POST["pass"]) {
                header("Location: pagina2.php");
                exit();
            } else {
                $error = "Login ou senha incorretos.";
            }
        }       
    ?>

    <div class="wrapper">
        <div class="form-box login">
        <h2>Login</h2>
            <form method="post" action="">
                <div class="input-box">
                    <input name="login" type="text" value="<?php if(isset($_POST['login'])) echo $_POST['login']; ?>" required>
                    <label>Login</label>
                </div>
                <div class="input-box">
                    <input name="pass" type="password" value="<?php if(isset($_POST['pass'])) echo $_POST['pass']; ?>" required>
                    <label>Password</label>
                </div>
                <div class="error-message">
                    <?php if(isset($error)) { echo $error; } ?>
                </div>
                <input type="submit" value="Enviar" class="btn">
            </form>
        </div>
    </div>

</body>
</html>