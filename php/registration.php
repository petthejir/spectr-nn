<?
    require_once('connect.php');
    $db = new PDO("mysql:host=localhost; dbname=spectr", "root", "");
    
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $password_repeat = md5($_POST['password_repeat']);
    

    
    $user_by_email = $db->query("SELECT * FROM `user` WHERE `email` = '$email'");




    if ($user_by_email->rowCount() != 0) {
        echo "пользователь с такой электронной почтой уже существует";
    }
    else {
        if ($password != $password_repeat) {
            echo "пароли не совпадают";
        }
        else {
            $add_user = "INSERT INTO `user` (tel, email, password) VALUES ('$tel', '$email', '$password')";
            if ($conn -> query($add_user) === TRUE) {
                echo "пользователь зарегистрирован";
            }
            else {
                echo "ошибка" . $conn -> error;
            }
        }
    }

    




?>