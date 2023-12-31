<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../pics/logo.png" type="image/x-icon">
    <title>Каталог</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/index.css">
    <? session_start(); ?>
    <? require '../php/db.php' ?>
</head>
<body class="body contacts">
    <?
        $card = get_card_by_id($_GET['id']);
        $id = $card["id"];
        $title = $card["title"];
        $old_price =  $card["old_price"];
        $new_price = $card["new_price"];
        $image = $card["image"];
        $description = $card["description"];
        $subgroup = $card["subgroup"];
        $category = $card["category"];  
    ?>    
    <div class="choise-rating choise-rating_alternative">
        <div class="choise-rating__block">
            <h2>Оценить товар</h2>
            <div class="choise-rating__stars" data-total-value="">
                <?
                    for ($i = 5; $i > 0; $i--) {
                        echo "
                            <a class='choise-rating__stars-li' href='/spectr-nn/php/add_rating.php?id=$id&rating=$i' data-item-value='$i'>
                                <svg height='20px' width='20px' version='1.1' id='Capa_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' 
                                     viewBox='0 0 47.94 47.94' xml:space='preserve'>
                                    <path d='M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757
                                    c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042
                                    c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685
                                    c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528
                                    c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956
                                    C22.602,0.567,25.338,0.567,26.285,2.486z'/>
                                </svg>
                            </a>
                        ";
                    }
                ?>
            </div>
        </div>
        <div class="choise-rating__closer"></div>
    </div>
    <div class="wrapper">
        <? require './panticals/header.php' ?>
        <main class="main main-card">
            <div class="main__conteiner">
                <div class="bread-crumbs">
                    <ul>
                        <a href="/spectr-nn/index.php">
                            <li>
                                <svg class="bread-crumbs__home" version="1.0" xmlns="http://www.w3.org/2000/svg"
                                    width="1024.000000pt" height="1024.000000pt" viewBox="0 0 1024.000000 1024.000000"
                                    preserveAspectRatio="xMidYMid meet">
                                    <g transform="translate(0.000000,1024.000000) scale(0.100000,-0.100000)"
                                    stroke="none">
                                    <path d="M5025 8860 c-23 -12 -383 -346 -855 -794 l-815 -775 -3 350 -2 349
                                    -575 0 -575 0 0 -898 0 -898 -430 -408 c-236 -224 -439 -423 -451 -443 -15
                                    -23 -23 -57 -26 -101 -4 -59 -2 -73 24 -122 18 -34 45 -66 72 -85 37 -26 53
                                    -30 119 -33 66 -3 83 0 119 20 24 13 805 747 1765 1659 948 900 1726 1638
                                    1729 1640 4 2 784 -734 1733 -1636 950 -902 1746 -1650 1769 -1663 36 -20 53
                                    -23 119 -20 66 3 82 7 119 33 88 62 124 193 80 291 -14 31 -451 451 -1844
                                    1775 -1037 984 -1844 1744 -1868 1757 -56 29 -147 30 -204 2z"/>
                                    <path d="M5073 7757 c-30 -17 -2593 -2480 -2620 -2519 l-23 -31 0 -1834 c0
                                    -1620 2 -1837 15 -1863 33 -63 -14 -60 980 -60 l905 0 0 1103 c0 1088 0 1102
                                    20 1135 39 64 19 62 775 62 756 0 736 2 775 -62 20 -33 20 -47 20 -1135 l0
                                    -1103 905 0 c994 0 947 -3 980 60 13 26 15 242 15 1852 -1 1411 -3 1828 -13
                                    1844 -7 12 -87 93 -178 180 -91 88 -675 654 -1298 1259 -623 605 -1142 1105
                                    -1154 1112 -12 7 -35 12 -52 12 -16 0 -40 -5 -52 -12z"/>
                                </g>
                                </svg>
                                <p>Главная</p>
                            </li>
                        </a>
                        <svg class="bread-crumbs__arrow" version="1.0" xmlns="http://www.w3.org/2000/svg"
                            width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                            preserveAspectRatio="xMidYMid meet">
    
                           <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                           stroke="none">
                           <path d="M1400 5098 c-44 -17 -77 -44 -171 -137 -144 -143 -163 -177 -164
                           -286 0 -58 5 -91 19 -120 13 -27 333 -355 995 -1018 l976 -977 -977 -978
                           c-760 -760 -982 -987 -997 -1022 -14 -30 -21 -67 -21 -110 0 -103 29 -153 168
                           -291 98 -97 127 -119 175 -137 73 -28 131 -28 204 -1 56 20 108 71 1230 1193
                           1297 1296 1223 1214 1223 1346 0 132 74 50 -1223 1346 -1123 1123 -1174 1173
                           -1230 1193 -72 26 -136 26 -207 -1z"/>
                           </g>
                        </svg>
                        <a href="./catalog.html">
                            <li>
                                <p>Каталог</p>
                            </li>
                        </a>
                        <svg class="bread-crumbs__arrow" version="1.0" xmlns="http://www.w3.org/2000/svg"
                            width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                            preserveAspectRatio="xMidYMid meet">

                               <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                               stroke="none">
                               <path d="M1400 5098 c-44 -17 -77 -44 -171 -137 -144 -143 -163 -177 -164
                               -286 0 -58 5 -91 19 -120 13 -27 333 -355 995 -1018 l976 -977 -977 -978
                               c-760 -760 -982 -987 -997 -1022 -14 -30 -21 -67 -21 -110 0 -103 29 -153 168
                               -291 98 -97 127 -119 175 -137 73 -28 131 -28 204 -1 56 20 108 71 1230 1193
                               1297 1296 1223 1214 1223 1346 0 132 74 50 -1223 1346 -1123 1123 -1174 1173
                               -1230 1193 -72 26 -136 26 -207 -1z"/>
                               </g>
                        </svg>
                        <?
                            $email = $_SESSION['email'];
                            $id = $card["id"];
                            $title = $card["title"];
                            $old_price =  $card["old_price"];
                            $new_price = $card["new_price"];
                            $image = $card["image"];
                            $description = $card["description"];
                            $subgroup = $card["subgroup"];
                            $category = $card["category"];
                            $check_favorite_card = $db->query("SELECT * FROM favorite_card WHERE `email` = '$email' AND `card_id` = '$id'");  
                            echo "
                                <a href='/spectr-nn/pages/catalog.php?category=$category'>
                                    <li>
                                        <p>$category</p>
                                    </li>
                                </a>
                                <svg class='bread-crumbs__arrow' version='1.0' xmlns='http://www.w3.org/2000/svg'
                                    width='512.000000pt' height='512.000000pt' viewBox='0 0 512.000000 512.000000'
                                    preserveAspectRatio='xMidYMid meet'>

                                    <g transform='translate(0.000000,512.000000) scale(0.100000,-0.100000)'
                                    stroke='none'>
                                    <path d='M1400 5098 c-44 -17 -77 -44 -171 -137 -144 -143 -163 -177 -164
                                    -286 0 -58 5 -91 19 -120 13 -27 333 -355 995 -1018 l976 -977 -977 -978
                                    c-760 -760 -982 -987 -997 -1022 -14 -30 -21 -67 -21 -110 0 -103 29 -153 168
                                    -291 98 -97 127 -119 175 -137 73 -28 131 -28 204 -1 56 20 108 71 1230 1193
                                    1297 1296 1223 1214 1223 1346 0 132 74 50 -1223 1346 -1123 1123 -1174 1173
                                    -1230 1193 -72 26 -136 26 -207 -1z'/>
                                    </g>
                                </svg>
                                <li>
                                    <p>$subgroup</p>
                                </li>                        
                            ";
                        ?>
                    </ul>
                </div>         
                <div class="main-card__block">
                    <?  
                        if ($new_price != '') {
                            $discount =  round(($old_price-$new_price)/$old_price*100);
                            echo "
                                <h2 class='main-card__discount'>-$discount%</h2>
                            ";
                        }
                        echo "
                            <img src='$image' alt=''>
                        "; 
                    ?>
                    <div class="main-card__right">
                        <?
                            $get_rating = rating($id);
                            $rating_avg = $get_rating[0];
                            $rating_count = $get_rating[1];

                            echo "
                                <div class='main-card__title'>
                                    <h1>$title</h1>
                                </div>
                                <div class='main-card__info'>
                                    <div class='main-card__article'>
                                        <h2>Арт: <span>$id</span></h2>
                                    </div>
                                    <div class='main-card__rating'>
                                        <div class='main-card__rating-block'>
                                            <div class='card__rating-icon'>
                                            <svg height='20px' width='20px' version='1.1' id='Capa_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' 
                                                     viewBox='0 0 47.94 47.94' xml:space='preserve'>
                                                <path d='M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757
                                                    c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042
                                                    c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685
                                                    c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528
                                                    c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956
                                                    C22.602,0.567,25.338,0.567,26.285,2.486z'/>
                                            </svg>
                                            </div>
                                            <h3 class='main-card__rating-value'>$rating_avg</h3>
                                            <h3 class='main-card__rating-quantity'>$rating_count</h3>
                                        </div>
                                        <button class='main-card__rating-new'>";
                                        $check_rating_by_email = $db->query("SELECT * FROM `rating` WHERE email = '$email' AND card_id = '$id'");
                                        if ($check_rating_by_email->rowCount() === 0) {
                                            echo "
                                                    <svg height='20px' width='20px' version='1.1' id='Capa_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' 
                                                        viewBox='0 0 47.94 47.94' xml:space='preserve'>
                                                        <path d='M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757
                                                        c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042
                                                        c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685
                                                        c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528
                                                        c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956
                                                        C22.602,0.567,25.338,0.567,26.285,2.486z'/>
                                                    </svg>
                                                    <h2>Оценить</h2>
                                                ";
                                            }
                                            else {
                                                foreach ($check_rating_by_email as $check_rating_by_email) {
                                                    echo "
                                                        <h2>$check_rating_by_email[rate] - Моя оценка</h2>
                                                    ";
                                                }
                                            }
                                            echo "
                                        </button>
                                    </div>
                                </div>
                                <div class='main-card__main-data'>
                                    <div class='main-card__price-block'>
                                        <h2 class='card__price-old' data-card-old-price='$old_price'>$old_price,99 ₽</h2>
                                        <h2 class='card__price-new' data-card-new-price='$new_price'>$new_price,99 ₽</h2>
                                    </div>
                                    <a class='main-card__add-to-favorite' href='/spectr-nn/php/add_favorite_card.php?email=$email&card_id=$id' data-ripple>
                                        <svg height='20px' width='20px' version='1.1' id='Capa_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' 
                                            viewBox='0 0 50 50' xml:space='preserve'>
                                            <path d='M24.85,10.126c2.018-4.783,6.628-8.125,11.99-8.125c7.223,0,12.425,6.179,13.079,13.543
                                            c0,0,0.353,1.828-0.424,5.119c-1.058,4.482-3.545,8.464-6.898,11.503L24.85,48L7.402,32.165c-3.353-3.038-5.84-7.021-6.898-11.503
                                            c-0.777-3.291-0.424-5.119-0.424-5.119C0.734,8.179,5.936,2,13.159,2C18.522,2,22.832,5.343,24.85,10.126z'/>
                                        </svg>";
                                        if ($check_favorite_card->rowCount() === 0) {
                                            echo "
                                                <h2>В избранное</h2>
                                            ";
                                        }
                                        else {
                                            echo "
                                                <h2>В избранном</h2>
                                            ";
                                        }
                                        echo "
                                    </a>
                                </div>
                                <div class='main-card__description'>
                                    <h2>Описание</h2>
                                    <p>$description</p>
                                </div>
                            ";
                        ?>
                    </div>
                </div>
                
            </div>
        </main>
        <? require './panticals/footer.php' ?>
    </div>
    <script src="../source/js/header.js"></script>
    <script src="../source/js/card.js"></script>
</body>
</html>