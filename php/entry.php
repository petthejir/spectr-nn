<?
    session_start();
    $db = new PDO("mysql:host=localhost; dbname=spectr", "root", "");
    
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $check_user = $db->query("SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'");


    if ($check_user->rowCount() === 1) {
        foreach ($check_user as $check_user) {
            $email = $check_user["email"];
        }
        $_SESSION['email'] = $email;
        header('Location: '. '/spectr-nn/pages/favorite_products.php');
    }
    else {
        $_SESSION['message'] = "Неверная почта или пароль";
        header('Location: '. '/spectr-nn/pages/entry.php');
    }

    




?>