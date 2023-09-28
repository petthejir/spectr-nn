<? 
    session_start(); 
    $email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../pics/logo.png" type="image/x-icon">
    <title>Избранное</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/index.css">
    <? require '../php/db.php' ?>
</head>
<body class="body contacts">
    <div class="wrapper">
        <? require './panticals/header.php' ?>
        <main class="main">
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
                        <li>
                            <p>Избранное</p>
                        </li>
                    </ul>
                </div>      
                <div class="filters">
                    <h1>Избранные товары</h1>
                    <div class="filters__filters">
                        <div class="filters__filters-wrapper">
                            <div class="filters__sort">
                                <div class="filters__sort-block filters-block">
                                    <p class="filters__sort-value" data-sort-active="current_price">Сначала дешевле</p>
                                    <svg class="filters__sort-svg" width="20px" height="20px" viewBox="0 0 35 35" data-name="Layer 2" id="Layer_2" xmlns="http://www.w3.org/2000/svg"><path d="M5.42,34.44a1.25,1.25,0,0,1-1.25-1.25V1.81a1.25,1.25,0,0,1,2.5,0V33.19A1.25,1.25,0,0,1,5.42,34.44Z"/><path d="M9.34,27.41H1.5a1.25,1.25,0,0,1,0-2.5H9.34a1.25,1.25,0,0,1,0,2.5Z"/><path d="M29.58,34.44a1.25,1.25,0,0,1-1.25-1.25V1.81a1.25,1.25,0,1,1,2.5,0V33.19A1.25,1.25,0,0,1,29.58,34.44Z"/><path d="M33.5,27.41H25.66a1.25,1.25,0,0,1,0-2.5H33.5a1.25,1.25,0,0,1,0,2.5Z"/><path d="M17.5,34.44a1.25,1.25,0,0,1-1.25-1.25V1.81a1.25,1.25,0,1,1,2.5,0V33.19A1.25,1.25,0,0,1,17.5,34.44Z"/><path d="M21.42,10.09H13.58a1.25,1.25,0,0,1,0-2.5h7.84a1.25,1.25,0,0,1,0,2.5Z"/></svg>   
                                </div>
                                <div class="filters__sort-choice">
                                    <li class="sort-choice" data-sort="current_price">Сначала дешевле</li>
                                    <li class="sort-choice" data-sort="_current_price">Сначала дороже</li>
                                    <li class="sort-choice" data-sort="rating">Высокий рейтинг</li>
                                    <li class="sort-choice" data-sort="discount">По размеру скидки</li>
                                </div>
                            </div>
                            <div class="discont-filter filters-block">
                                <h3 class="discont-filter__name">Со скидкой</h3>
                                <label class="discont-filter__switch">
                                    <input class="discont-filter__input" type="checkbox">
                                    <span class="discont-filter__switch-circle"></span>
                                </label>
                            </div> 
                        </div>
                    </div>
                </div>
                    <?
                        $favorite_cards_id = $db->query("SELECT * FROM favorite_card WHERE `email` = '$email'");
                        $favorite_cards_id_array = [];
                        foreach ($favorite_cards_id as $favorite_cards_id) {
                            array_push($favorite_cards_id_array, $favorite_cards_id['card_id']);
                        }
                        if (count($favorite_cards_id_array) != 0) {
                            echo "<div class='favorite__cards' id='cards'> ";
                            foreach ($favorite_cards_id_array as $favorite_cards_id_array) {
                            $cards_by_id = $db->query("SELECT * FROM card WHERE id LIKE '$favorite_cards_id_array'");
                            foreach ($cards_by_id as $cards_by_id) {
                                $id = $cards_by_id["id"];
                                $title = $cards_by_id["title"];
                                $old_price =  $cards_by_id["old_price"];
                                $new_price = $cards_by_id["new_price"];
                                $image = $cards_by_id["image"];
                                $description = $cards_by_id["description"];
                                $subgroup = $cards_by_id["subgroup"];
                                $category = $cards_by_id["category"];
                        
                                $get_rating = rating($id);
                                $rating_avg = $get_rating[0];
                           
                                echo "
                                    <a href='/spectr-nn/pages/card.php?id=$id' class='card' main-card data-subgroup='$subgroup' data-category='$category'>
                                        <div class='card__conteiner'>
                                            <div class='card__top'>
                                                <h3 class='card__discount' data-discount><span class='card__discount-value'></span>%</h3>
                                                <div class='card__rating remove'>
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
                                                    <h3 class='card__rating-value'>$rating_avg</h3>
                                                </div>
                                            </div>
                                            <img class='card__img-block' src='$image' alt=''>
                                            <div class='card__title'>
                                                <h4 class='card__title-value'>$title</h4>
                                            </div>
                                            <div class='card__bottom'>
                                                <div class='card__price'>
                                                    <h2 class='card__price-old' data-old-price='$old_price'>$old_price,99 ₽</h2>
                                                    <h2 class='card__price-new' data-new-price='$new_price'>$new_price,99 ₽</h2>
                                                </div>
                                                <div class='card__like card__like_alternative' data-href='/spectr-nn/php/add_favorite_card.php?email=$email&card_id=$id'>
                                                    <svg height='35px' width='35px' version='1.1' id='Capa_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' 
                                                                 viewBox='0 0 50 50' xml:space='preserve'>
                                                                <path d='M24.85,10.126c2.018-4.783,6.628-8.125,11.99-8.125c7.223,0,12.425,6.179,13.079,13.543
                                                                c0,0,0.353,1.828-0.424,5.119c-1.058,4.482-3.545,8.464-6.898,11.503L24.85,48L7.402,32.165c-3.353-3.038-5.84-7.021-6.898-11.503
                                                                c-0.777-3.291-0.424-5.119-0.424-5.119C0.734,8.179,5.936,2,13.159,2C18.522,2,22.832,5.343,24.85,10.126z'/>
                                                    </svg>
                                                </div> 
                                            </div>
                                        </div>
                                    </a>
                                ";
                            }
                            
                            }
                            echo "</div>";
                        }
                        else {
                            echo "
                                <div class='favorite__no-card'>
                                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 39 32'><symbol xmlns='http://www.w3.org/2000/svg' id='85051' viewBox='0 0 39 32'>
                                        <path fill='#8864ff' style='fill: var(--color1, #8864ff)' d='M36.557 16.207h-34.408l1.475 12.158c0.246 1.842 1.782 3.254 3.687 3.254h24.209c1.843 0 3.441-1.412 3.687-3.254l1.352-12.158z'></path>
                                        <path fill='#7348ff' style='fill: var(--color2, #7348ff)' d='M16.649 23.883c-5.038 0-9.524 2.272-12.535 5.895 0.676 1.105 1.843 1.781 3.134 1.781h24.209c1.843 0 3.441-1.412 3.687-3.254l1.475-12.096h-6.083c-2.949 4.667-8.049 7.675-13.886 7.675z'></path>
                                        <path fill='#7348ff' style='fill: var(--color2, #7348ff)' d='M19.404 11.989c-0.029 0.027-0.075 0.027-0.104-0l-0.788-0.74c-2.982-2.792-4.951-4.634-4.951-6.894 0-1.842 1.401-3.288 3.185-3.288 0.976 0 1.915 0.455 2.546 1.179 0.031 0.036 0.088 0.036 0.119 0 0.631-0.724 1.57-1.179 2.546-1.179 1.783 0 3.185 1.447 3.185 3.288 0 2.26-1.969 4.102-4.951 6.9l-0.788 0.735z'></path>
                                        <path fill='#8864ff' style='fill: var(--color1, #8864ff)' d='M16.48 9.31c1.214-0.462 2.345-1.18 3.355-2.102v-0.031c1.543-1.459 2.849-3.375 3.738-5.67-0.471-0.281-1.022-0.441-1.615-0.441-0.976 0-1.915 0.455-2.546 1.179-0.031 0.036-0.088 0.036-0.119 0-0.631-0.724-1.57-1.179-2.546-1.179-1.783 0-3.185 1.447-3.185 3.288 0 1.695 1.107 3.154 2.918 4.955z'></path>
                                        <path fill='none' stroke='#505852' style='stroke: var(--color3, #505852)' stroke-linejoin='miter' stroke-linecap='butt' stroke-miterlimit='4' stroke-width='0.6095' d='M18.722 11.027l-0-0c-1.497-1.402-2.715-2.543-3.563-3.613-0.844-1.065-1.291-2.025-1.291-3.058 0-1.682 1.274-2.984 2.88-2.984 0.883 0 1.739 0.413 2.316 1.075 0.153 0.175 0.426 0.175 0.579 0 0.577-0.662 1.433-1.075 2.316-1.075 1.606 0 2.88 1.301 2.88 2.984 0 1.033-0.447 1.993-1.291 3.059-0.847 1.069-2.062 2.21-3.556 3.612l-0.006 0.006-0.001 0.001-0.63 0.588-0.632-0.594z'></path>
                                        <path fill='#fffbef' style='fill: var(--color4, #fffbef)' d='M19.353 18.663c-1.045 0-1.905 0.86-1.905 1.903v6.631c0 1.044 0.86 1.903 1.905 1.903s1.905-0.86 1.905-1.903v-6.57c0-1.105-0.86-1.965-1.905-1.965zM11.672 18.663c-1.045 0-1.905 0.86-1.905 1.904v6.631c0 1.044 0.86 1.904 1.905 1.904s1.905-0.86 1.905-1.904v-6.57c0-1.105-0.86-1.965-1.905-1.965zM25.128 20.567c0-1.044 0.86-1.903 1.905-1.903s1.905 0.86 1.905 1.965v6.57c0 1.044-0.86 1.903-1.905 1.903s-1.905-0.86-1.905-1.903v-6.631z'></path>
                                        <path fill='#505852' style='fill: var(--color3, #505852)' d='M17.753 20.567c0-0.875 0.724-1.599 1.6-1.599v-0.61c-1.213 0-2.21 0.996-2.21 2.208h0.61zM17.753 27.198v-6.631h-0.61v6.631h0.61zM19.353 28.797c-0.877 0-1.6-0.723-1.6-1.599h-0.61c0 1.212 0.997 2.208 2.21 2.208v-0.61zM20.953 27.198c0 0.875-0.724 1.599-1.6 1.599v0.61c1.213 0 2.21-0.996 2.21-2.208h-0.61zM20.953 20.628v6.57h0.61v-6.57h-0.61zM19.353 18.968c0.87 0 1.6 0.717 1.6 1.66h0.61c0-1.267-0.991-2.27-2.21-2.27v0.61zM10.072 20.567c0-0.875 0.724-1.599 1.6-1.599v-0.61c-1.213 0-2.21 0.996-2.21 2.208h0.61zM10.072 27.198v-6.631h-0.61v6.631h0.61zM11.672 28.797c-0.876 0-1.6-0.723-1.6-1.599h-0.61c0 1.212 0.997 2.208 2.21 2.208v-0.61zM13.272 27.198c0 0.875-0.724 1.599-1.6 1.599v0.61c1.213 0 2.21-0.996 2.21-2.208h-0.61zM13.272 20.628v6.57h0.61v-6.57h-0.61zM11.672 18.968c0.87 0 1.6 0.717 1.6 1.66h0.61c0-1.267-0.991-2.27-2.21-2.27v0.61zM27.033 18.359c-1.213 0-2.21 0.996-2.21 2.208h0.61c0-0.875 0.724-1.599 1.6-1.599v-0.61zM29.242 20.628c0-1.267-0.99-2.27-2.21-2.27v0.61c0.87 0 1.6 0.717 1.6 1.66h0.61zM29.242 27.198v-6.57h-0.61v6.57h0.61zM27.033 29.406c1.213 0 2.21-0.996 2.21-2.208h-0.61c0 0.875-0.724 1.599-1.6 1.599v0.61zM24.823 27.198c0 1.212 0.997 2.208 2.21 2.208v-0.61c-0.876 0-1.6-0.723-1.6-1.599h-0.61zM24.823 20.567v6.631h0.61v-6.631h-0.61z'></path>
                                        <path fill='none' stroke='#505852' style='stroke: var(--color3, #505852)' stroke-linejoin='miter' stroke-linecap='butt' stroke-miterlimit='4' stroke-width='0.6095' d='M36.557 16.207h-34.408l1.475 12.158c0.246 1.842 1.782 3.254 3.687 3.254h24.209c1.843 0 3.441-1.412 3.687-3.254l1.352-12.158z'></path>
                                        <path fill='#8864ff' style='fill: var(--color1, #8864ff)' d='M38.4 12.831c-0.061-0.246-0.307-0.43-0.553-0.43h-5.591c-0.43 1.351-0.983 2.64-1.782 3.807h7.312c0.246 0 0.492-0.184 0.553-0.43v-2.947h0.061z'></path>
                                        <path fill='none' stroke='#505852' style='stroke: var(--color3, #505852)' stroke-linejoin='miter' stroke-linecap='butt' stroke-miterlimit='4' stroke-width='0.6095' d='M37.785 16.208h-36.866c-0.307 0-0.614-0.246-0.614-0.614v-2.579c0-0.307 0.246-0.614 0.614-0.614h36.866c0.307 0 0.614 0.246 0.614 0.614v2.64c0 0.307-0.246 0.553-0.614 0.553z'></path>
                                        <path fill='#fffbef' style='fill: var(--color4, #fffbef); stroke: var(--color3, #505852)' stroke='#505852' stroke-linejoin='miter' stroke-linecap='butt' stroke-miterlimit='4' stroke-width='0.6095' d='M19.352 13.629c-0.307 0-0.614-0.123-0.86-0.368-0.492-0.491-0.492-1.228 0-1.719l10.876-10.868c0.491-0.491 1.229-0.491 1.72 0s0.492 1.228 0 1.719l-10.876 10.868c-0.246 0.246-0.553 0.368-0.86 0.368z'></path>
                                        </symbol><use xlink:href='#85051'></use>
                                    </svg>
                                    <h1>Любимых товаров нет</h1>
                                    <h2>Составляйте список любимых товаров, чтобы они всегда <br> были под рукой</h2>
                                
                                </div>
                            ";                           
                        }
                    
                    ?>
                
            </div>
        </main>
        <? require './panticals/footer.php' ?>
    </div>
    <script src="../source/js/header.js"></script>
    <script src="../source/js/sort.js"></script>
</body>
</html>