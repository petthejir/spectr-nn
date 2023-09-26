<?
    session_start();
    require_once('connect.php');
    $db = new PDO("mysql:host=localhost; dbname=spectr", "root", "");
    
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $password_repeat = md5($_POST['password_repeat']);
    
    $user_by_email = $db->query("SELECT * FROM `user` WHERE `email` = '$email'");

    if ($user_by_email->rowCount() != 0) {
        $_SESSION['message'] = "Пользователь с такой электронной почтой уже существует";
        header('Location: '. '/spectr-nn/pages/registration.php');
    }
    else {
        if ($password != $password_repeat) {
            $_SESSION['message'] = "Пароли не совпадают";
            header('Location: '. '/spectr-nn/pages/registration.php');
        }
        else {
            $add_user = "INSERT INTO `user` (tel, email, password) VALUES ('$tel', '$email', '$password')";
            if ($conn -> query($add_user) === TRUE) {
                header('Location: '. '/spectr-nn/pages/entry.php');
            }
        }
    }

    




?>