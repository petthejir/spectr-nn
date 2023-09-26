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
    <div class="wrapper">
        <? require './panticals/header.php' ?>
        <main class="main main-catalog">
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
                        <?
                            $get_category = $_GET['category']; 
                            if (isset($_GET['category'])) {
                                echo "
                                    <a href='/spectr-nn/pages/catalog.php'>
                                        <li>
                                            <p>Каталог</p>
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
                                        <p>$get_category</p>
                                    </li>
                                ";
                            }
                            else {
                                echo "
                                    <li>
                                        <p>Каталог</p>
                                    </li>
                                ";
                            }
                        ?>
                        
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
                                        <p class='main-catalog__category-name-value'>$unique_category</p>
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
                                                <li class='subgroup-li' li-data-subgroup='$unique_subgroups' data-category='$unique_category'>
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
                                pseudo_destructuring_and_echo($all_cards);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <? require './panticals/footer.php' ?>
        <?
            echo "<div class='get-category'>$get_category</div>";
        ?>
    </div>
    <script src="../source/js/header.js"></script>
    <script src="../source/js/sort.js"></script>
    <script src="../source/js/catalog.js"></script>
</body>
</html>