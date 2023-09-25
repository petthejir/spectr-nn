<?
    require_once('connect.php');
    $db = new PDO("mysql:host=localhost; dbname=spectr", "root", "");
    
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    

    
    $check_user = $db->query("SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'");




    if ($check_user->rowCount() === 1) {
        echo "вы вошли";
    }
    else {
        echo "неверная почта или пароль";
    }

    




?>