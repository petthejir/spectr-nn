<?
    $db = new PDO("mysql:host=localhost; dbname=spectr", "root", "");
    $rating = $_GET['rating'];
    $card_id = $_GET['id'];
    
    function add_rating($card_id, $rating) {
        global $db;
        $db->query("INSERT INTO rating (card_id, rate) VALUES ($card_id, $rating)");
    }
    add_rating($card_id, $rating);

    header("Location: /spectr-nn/pages/card.php?id=$card_id");
?>