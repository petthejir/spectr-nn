<?
    session_start();
    $email = $_SESSION['email'];
    $db = new PDO("mysql:host=localhost; dbname=spectr", "root", "");
    $rating = $_GET['rating'];
    $card_id = $_GET['id'];
    $check_rating_by_email = $db->query("SELECT * FROM `rating` WHERE email = '$email' AND card_id = '$card_id'");

    if ($check_rating_by_email->rowCount() < 1) {
        $db->query("INSERT INTO rating (card_id, rate, email) VALUES ($card_id, $rating, $email)");
    }
    else {
        $db->query("DELETE FROM rating WHERE email = '$email' AND card_id = '$card_id'");
        $db->query("INSERT INTO rating (card_id, rate, email) VALUES ($card_id, $rating, $email)");
    }
    


    header("Location: /spectr-nn/pages/card.php?id=$card_id");
?>