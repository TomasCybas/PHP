<?php
session_start();
include_once "users.php";

$class = "d-none";
if (isset($_POST["userName"]) && isset($_POST["password"])) {
    $isLoggedIn = false;
    $userName = $_POST["userName"];
    $password = ($_POST["password"]);
    if(password_verify($password, $users[$userName]["password"] )){
        $isLoggedIn = true;
    }else {
        $class = "d-block";
    }
    if($isLoggedIn) {
        if (isset($_POST["remember"])) {
            $remember = $_POST["remember"];
        } else {
            $remember = "off";
        }
        if ($remember == "on") {
            setcookie("user", $userName, time() +60*60*24*30);
            setcookie("isLoggedIn", "true");
            header("Location: index.php");
        } else {
            $_SESSION["user"] = $userName;
            $_SESSION["isLoggedIn"] = true;
            header("Location: index.php");
        }
    }
}
?>


<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    .wrapper {
        height: 100vh;
    }
    .login-box {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .login-form {
        width: 300px;
    }
    .alert-box {
        background-color: #e7c6c6 ;
        font-size: 12px;
        border: 1px solid transparent;
        border-radius: 5px;
        height: 50px;

    }

</style>
<body class="overflow-hidden">
<div class="container-fluid bg-light">
    <div class="container wrapper position-relative">
        <div class="login-box">

            <form class="login-form" action="login.php" method="post">
                <div class="form-group">
                    <label for="user_name">Vartotojas:</label>
                    <input type="text" class="form-control" name="userName" id="user_name"
                           placeholder="Įveskite vartotojo vardą" required>
                </div>
                <div class="form-group">
                    <label for="psw">Slaptažodis:</label>
                    <input type="password" class="form-control" name="password" id="psw"
                           placeholder="Įveskite slaptažodį" required>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" name="remember" value="on" class="form-check-input" id="remember_me">
                    <label class="form-check-label" for="remember_me">Prisiminti mane</label>
                </div>
                <button type="submit" class="btn btn-dark">Prisijungti</button>
            </form>
            <br>
            <div class="<?php echo $class ?> alert-box"
            <p>
                <span class="font-weight-bold">Klaida!</span>
                <br>
                Vartotojo vardas arba slaptažodis nesutampa.
            </p>
        </div>
        </div>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
