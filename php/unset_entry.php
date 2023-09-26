<?
    session_start();
    unset($_SESSION['email']);
    header('Location: '. '/spectr-nn/index.php');

?>