<? 


$db = new PDO("mysql:host=localhost; dbname=spectr", "root", "");


function get_all_cards() {
    global $db;
    $cards = $db->query("SELECT * FROM card");
    return $cards;   
}
$cards = get_all_cards();

function get_cards_by($category) {
    global $db;
    $cards_by_category = $db->query("SELECT * FROM card WHERE category LIKE '$category'");
    return $cards_by_category;   
}
$cards_by_category = get_cards_by('Молочные продукты');




/* foreach ($cards_by_category as $cards_by_category) {
    $id = $cards_by_category["id"];
    $title = $cards_by_category["title"];
    $old_price =  $cards_by_category["old_price"];
    $new_price = $cards_by_category["new_price"];
    $image = $cards_by_category["image"];
    $description = $cards_by_category["description"];
    $category = $cards_by_category["category"];
    $subgroup = $cards_by_category["subgroup"];
}
 */

?>

