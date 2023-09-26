<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../pics/logo.png" type="image/x-icon">
    <title>Магазины</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/index.css">
    <? session_start(); ?>
    <? require '../php/db.php' ?>
</head>
<body class="body">
    <div class="wrapper">
        <? require './panticals/header.php' ?>
        <main class="main main-shops">
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
                            <p>Магазины</p>
                        </li>
                    </ul>
                </div>
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ac2d0bcd212539400f3c44dc26ba0161a29984d6ea664f99d20765be353e9d3b5&amp;source=constructor" width="100%" height="538" frameborder="0"></iframe>
                <div class="city">
                    <h1>Нижний Новгород</h1>
                    <div class="shop">
                        <div class="shop__title">
                            <img class="shop__img" src="../pics/shop.png">
                            <h2 class="shop__adress">ул.Короленко д.17А</h2>
                            <img class="shop__metro" src="../pics/metro.png">
                            <h2 class="shop__metro-name">ст. Горьковская</h2>
                        </div>
                        <h3 class="shop__time">пн.-вс. 08:00-22:00</h3>
                    </div>
                    <div class="shop">
                        <div class="shop__title">
                            <img class="shop__img" src="../pics/shop.png">
                            <h2 class="shop__adress">ул.Чонгарская д.51</h2>
                            <img class="shop__metro" src="../pics/metro.png">
                            <h2 class="shop__metro-name">ст. Ленинская</h2>
                        </div>
                        <h3 class="shop__time">пн.-вс. 08:00-22:00</h3>
                    </div>
                    <div class="shop">
                        <div class="shop__title">
                            <img class="shop__img" src="../pics/shop.png">
                            <h2 class="shop__adress">ул.Бархатная д.132</h2>
                        </div>
                        <h3 class="shop__time">пн.-вс. 08:00-22:00</h3>
                    </div>
                    <div class="shop">
                        <div class="shop__title">
                            <img class="shop__img" src="../pics/shop.png">
                            <h2 class="shop__adress">ул.Сергея Есенина д.20</h2>
                            <img class="shop__metro" src="../pics/metro.png">
                            <h2 class="shop__metro-name">ст. Стрелка</h2>
                        </div>
                        <h3 class="shop__time">пн.-вс. 08:00-22:00</h3>
                    </div>
                </div>
                <div class="city">
                    <h1>Богородск</h1>
                    <div class="shop">
                        <div class="shop__title">
                            <img class="shop__img" src="../pics/shop.png">
                            <h2 class="shop__adress">ул.Карла Маркса д.72</h2>
                        </div>
                        <h3 class="shop__time">пн.-вс. 08:00-22:00</h3>
                    </div>
                    <div class="shop">
                        <div class="shop__title">
                            <img class="shop__img" src="../pics/shop.png">
                            <h2 class="shop__adress">ул.Демина д.12</h2>
                        </div>
                        <h3 class="shop__time">пн.-вс. 08:00-21:00</h3>
                    </div>
                </div>
                <div class="city">
                    <h1>Дзержинск</h1>
                    <div class="shop">
                        <div class="shop__title">
                            <img class="shop__img" src="../pics/shop.png">
                            <h2 class="shop__adress">просп.Ленина д.71А</h2>
                        </div>
                        <h3 class="shop__time">пн.-вс. 09:00-22:00</h3>
                    </div>
                </div>    
            </div>
        </main>
        <? require './panticals/footer.php' ?>
    </div>
    <script src="../source/js/header.js"></script>
    <script src="../source/js/main.js"></script>
</body>
</html>