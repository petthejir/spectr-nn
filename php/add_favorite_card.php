<?
    $db = new PDO("mysql:host=localhost; dbname=spectr", "root", "");
    $email = $_GET['email'];
    $card_id = $_GET['card_id'];
    $check_favorite_card = $db->query("SELECT * FROM favorite_card WHERE `email` = '$email' AND `card_id` = '$card_id'");
    
    if ($check_favorite_card->rowCount() === 0) {
        $db->query("INSERT INTO favorite_card (email, card_id) VALUES ($email, $card_id)");
    }
    else {
        $db->query("DELETE FROM favorite_card WHERE email=$email AND card_id=$card_id");
    }



?>