<? 


$db = new PDO("mysql:host=localhost; dbname=spectr", "root", "");


function get_all_cards() {
    global $db;
    $cards = $db->query("SELECT * FROM card");
    return $cards;   
}
$cards = get_all_cards();

foreach ($cards as $cards) {
    $id = $cards["id"];
    $title = $cards["title"];
    $old_price =  $cards["old_price"];
    $new_price = $cards["new_price"];
    $image = $cards["image"];
    $description = $cards["description"];
    $category = $cards["category"];
    $subgroup = $cards["subgroup"];
}


?>