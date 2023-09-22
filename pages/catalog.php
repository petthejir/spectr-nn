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
    <? require '../php/db.php' ?>
</head>
<body class="body contacts">
    <div class="wrapper">
        <? require './panticals/header.php' ?>
        <main class="main main-catalog">
            <div class="main__conteiner">
                <div class="bread-crumbs">
                    <ul>
                        <a href="../index.html">
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
                            <p>Каталог</p>
                        </li>
                    </ul>
                </div>         
                <div class="filters">
                    <h1>Каталог товаров</h1>
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
                <div class="main-catalog__content">
                    <div class="main-catalog__left">
                        <div class="main-catalog__category">

                        <? 
                            $categories = $db->query("SELECT category FROM card");
                            $unique_category = [];
                            foreach ($categories as $categories) {
                                array_push($unique_category, $categories["category"]);
                            }
                            $unique_category = array_unique($unique_category);

                            foreach ($unique_category as $unique_category) {
                                $subgroups = $db->query("SELECT subgroup FROM card WHERE category LIKE '$unique_category'");
                                $unique_subgroups = [];
                                foreach ($subgroups as $subgroups) {
                                    array_push($unique_subgroups, $subgroups["subgroup"]);
                                }
                                $unique_subgroups = array_unique($unique_subgroups);
                                echo "
                                    <div class='main-catalog__category-name'>
                                        <p>$unique_category</p>
                                        <div class='main-catalog__category-name-plus'><span class='main-catalog__category-name-plus-vertical'></span></div>
                                    </div>
                                    <div class='main-catalog__category-subgroups main-catalog__category-subgroups_alternative'>
                                    ";                                
                                        foreach ($unique_subgroups as $unique_subgroups) {
                                            $subgroups_count = $db->query("SELECT subgroup FROM card WHERE subgroup LIKE '$unique_subgroups'");
                                            $counter = 0;
                                            foreach ($subgroups_count as $subgroups_count) {
                                                $counter++; 
                                            }
                                            echo "
                                                <li class='subgroup-li' li-data-subgroup='$unique_subgroups'>
                                                    <input class='subgroup-checkbox' type='checkbox'>
                                                    <p class='subgroup-p'>$unique_subgroups</p>
                                                    <h4 class='subgroup-count'>($counter)</h4>
                                                </li>
                                            ";
                                        }
                                    echo "</div>";
                                ;
                            }
                        ?>
                                
                                                   
                        </div>
                    </div>
                    <div class="main-catalog__right">
                        <div class="main-catalog__cards" id="cards">
                            <? 
                                $all_cards = $db->query("SELECT * FROM card");
                                foreach ($all_cards as $all_cards) {
                                    $id = $all_cards["id"];
                                    $title = $all_cards["title"];
                                    $old_price =  $all_cards["old_price"];
                                    $new_price = $all_cards["new_price"];
                                    $image = $all_cards["image"];
                                    $description = $all_cards["description"];
                                    $category = $all_cards["category"];
                                    $subgroup = $all_cards["subgroup"];

                                    echo  "
                                        <div class='card' data-subgroup='$subgroup' data-category='$category'>
                                            <div class='card__conteiner'>
                                                <div class='card__top'>
                                                    <h3 class='card__discount'><span class='card__discount-value'></span>%</h3>
                                                    <div class='card__rating'>
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
                                                        <h3 class='card__rating-value'></h3>
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
                                                    <div class='card__like' data-like>
                                                        <svg height='35px' width='35px' version='1.1' id='Capa_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' 
                                                                 viewBox='0 0 50 50' xml:space='preserve'>
                                                            <path d='M24.85,10.126c2.018-4.783,6.628-8.125,11.99-8.125c7.223,0,12.425,6.179,13.079,13.543
                                                                c0,0,0.353,1.828-0.424,5.119c-1.058,4.482-3.545,8.464-6.898,11.503L24.85,48L7.402,32.165c-3.353-3.038-5.84-7.021-6.898-11.503
                                                                c-0.777-3.291-0.424-5.119-0.424-5.119C0.734,8.179,5.936,2,13.159,2C18.522,2,22.832,5.343,24.85,10.126z'/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ";
                                }
                            ?>


                        </div>
                    </div>
                </div>
            </div>
        </main>
        <? require './panticals/footer.php' ?>
        <div class="registration display-none">
            <div class="registration__block">
                <div class="registration__close-button"></div>
                <h1 class="registration__title">Вход</h1>
                <form class="registration__form" action="">
                    <div class="registration__form-block">
                        <input type="text" name="email" required="" data-reg-input>
                        <label for="email">Электронная почта</label>
                    </div>
                    <div class="registration__form-block">
                        <input type="password" name="password" required="" data-reg-input>
                        <label for="password">Пароль</label>
                        <div class="registration__eye">
                            <svg width="22px" height="22px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.30147 15.5771C4.77832 14.2684 3.6904 12.7726 3.18002 12C3.6904 11.2274 4.77832 9.73158 6.30147 8.42294C7.87402 7.07185 9.81574 6 12 6C14.1843 6 16.1261 7.07185 17.6986 8.42294C19.2218 9.73158 20.3097 11.2274 20.8201 12C20.3097 12.7726 19.2218 14.2684 17.6986 15.5771C16.1261 16.9282 14.1843 18 12 18C9.81574 18 7.87402 16.9282 6.30147 15.5771ZM12 4C9.14754 4 6.75717 5.39462 4.99812 6.90595C3.23268 8.42276 2.00757 10.1376 1.46387 10.9698C1.05306 11.5985 1.05306 12.4015 1.46387 13.0302C2.00757 13.8624 3.23268 15.5772 4.99812 17.0941C6.75717 18.6054 9.14754 20 12 20C14.8525 20 17.2429 18.6054 19.002 17.0941C20.7674 15.5772 21.9925 13.8624 22.5362 13.0302C22.947 12.4015 22.947 11.5985 22.5362 10.9698C21.9925 10.1376 20.7674 8.42276 19.002 6.90595C17.2429 5.39462 14.8525 4 12 4ZM10 12C10 10.8954 10.8955 10 12 10C13.1046 10 14 10.8954 14 12C14 13.1046 13.1046 14 12 14C10.8955 14 10 13.1046 10 12ZM12 8C9.7909 8 8.00004 9.79086 8.00004 12C8.00004 14.2091 9.7909 16 12 16C14.2092 16 16 14.2091 16 12C16 9.79086 14.2092 8 12 8Z"/>
                            </svg>
                        </div>
                    </div>
                    <button class="registration__button" data-ripple>Войти</button>
                </form>
                <form class="registration__form entry__form display-none" action="">
                    <div class="registration__form-block">
                        <input type="tel" name="tel" required="" data-reg-input>
                        <label for="tel">Номер телефона</label>
                    </div>
                    <div class="registration__form-block">
                        <input type="text" name="email" required="" data-reg-input>
                        <label for="email">Электронная почта</label>
                    </div>
                    <div class="registration__form-block">
                        <input type="password" name="password" required="" data-reg-input>
                        <label for="password">Пароль</label>
                        <div class="registration__eye">
                            <svg width="22px" height="22px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.30147 15.5771C4.77832 14.2684 3.6904 12.7726 3.18002 12C3.6904 11.2274 4.77832 9.73158 6.30147 8.42294C7.87402 7.07185 9.81574 6 12 6C14.1843 6 16.1261 7.07185 17.6986 8.42294C19.2218 9.73158 20.3097 11.2274 20.8201 12C20.3097 12.7726 19.2218 14.2684 17.6986 15.5771C16.1261 16.9282 14.1843 18 12 18C9.81574 18 7.87402 16.9282 6.30147 15.5771ZM12 4C9.14754 4 6.75717 5.39462 4.99812 6.90595C3.23268 8.42276 2.00757 10.1376 1.46387 10.9698C1.05306 11.5985 1.05306 12.4015 1.46387 13.0302C2.00757 13.8624 3.23268 15.5772 4.99812 17.0941C6.75717 18.6054 9.14754 20 12 20C14.8525 20 17.2429 18.6054 19.002 17.0941C20.7674 15.5772 21.9925 13.8624 22.5362 13.0302C22.947 12.4015 22.947 11.5985 22.5362 10.9698C21.9925 10.1376 20.7674 8.42276 19.002 6.90595C17.2429 5.39462 14.8525 4 12 4ZM10 12C10 10.8954 10.8955 10 12 10C13.1046 10 14 10.8954 14 12C14 13.1046 13.1046 14 12 14C10.8955 14 10 13.1046 10 12ZM12 8C9.7909 8 8.00004 9.79086 8.00004 12C8.00004 14.2091 9.7909 16 12 16C14.2092 16 16 14.2091 16 12C16 9.79086 14.2092 8 12 8Z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="registration__form-block">
                        <input type="password" name="password_repeat" required="" data-reg-input>
                        <label for="password_repeat">Повторите пароль</label>
                        <div class="registration__eye">
                            <svg width="22px" height="22px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.30147 15.5771C4.77832 14.2684 3.6904 12.7726 3.18002 12C3.6904 11.2274 4.77832 9.73158 6.30147 8.42294C7.87402 7.07185 9.81574 6 12 6C14.1843 6 16.1261 7.07185 17.6986 8.42294C19.2218 9.73158 20.3097 11.2274 20.8201 12C20.3097 12.7726 19.2218 14.2684 17.6986 15.5771C16.1261 16.9282 14.1843 18 12 18C9.81574 18 7.87402 16.9282 6.30147 15.5771ZM12 4C9.14754 4 6.75717 5.39462 4.99812 6.90595C3.23268 8.42276 2.00757 10.1376 1.46387 10.9698C1.05306 11.5985 1.05306 12.4015 1.46387 13.0302C2.00757 13.8624 3.23268 15.5772 4.99812 17.0941C6.75717 18.6054 9.14754 20 12 20C14.8525 20 17.2429 18.6054 19.002 17.0941C20.7674 15.5772 21.9925 13.8624 22.5362 13.0302C22.947 12.4015 22.947 11.5985 22.5362 10.9698C21.9925 10.1376 20.7674 8.42276 19.002 6.90595C17.2429 5.39462 14.8525 4 12 4ZM10 12C10 10.8954 10.8955 10 12 10C13.1046 10 14 10.8954 14 12C14 13.1046 13.1046 14 12 14C10.8955 14 10 13.1046 10 12ZM12 8C9.7909 8 8.00004 9.79086 8.00004 12C8.00004 14.2091 9.7909 16 12 16C14.2092 16 16 14.2091 16 12C16 9.79086 14.2092 8 12 8Z"/>
                            </svg>
                        </div>
                    </div>
                    <button class="registration__button" data-ripple>Зарегистрироваться</button>
                </form>
                <h3 class="registration__question">Ещё нет аккаунта?</h3>
                <h2 class="registration__swap">Зарегистрироваться</h2>
            </div>
            <div class="registration__closer"></div>
        </div>
    </div>
    <script src="../source/js/header.js"></script>
    <script src="../source/js/catalog.js"></script>
</body>
</html>