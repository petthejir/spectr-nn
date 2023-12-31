<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./pics/logo.png" type="image/x-icon">
    <title>Спектр-НН</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/index.css">
    <? session_start(); ?>
    <? require './php/db.php' ?>
    <meta name="viewport" content="width=device-width">
</head>
<body class="body">
    <div class="wrapper">
        <? require './pages/panticals/header.php' ?>
        <main class="main">
            <div class="conteiner main__conteiner">
                <div class="auto-slider">
                    <div class="auto-slider__left-button auto-slider__buttons-slide">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="15pt" height="15pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                <path d="M2496 3999 c-127 -21 -86 16 -1274 -1148 -606 -594 -1115 -1095
                                -1131 -1113 -127 -147 -117 -370 24 -511 115 -115 293 -144 442 -72 53 26 98
                                67 1467 1325 290 267 531 485 536 485 5 0 246 -218 536 -485 1369 -1258 1414
                                -1299 1467 -1325 230 -112 496 20 548 272 22 104 -12 230 -82 311 -56 64
                                -2205 2166 -2243 2193 -77 57 -194 84 -290 68z"/>
                            </g>
                        </svg>
                    </div>
                    <div class="auto-slider__right-button auto-slider__buttons-slide">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="15pt" height="15pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                <path d="M2496 3999 c-127 -21 -86 16 -1274 -1148 -606 -594 -1115 -1095
                                -1131 -1113 -127 -147 -117 -370 24 -511 115 -115 293 -144 442 -72 53 26 98
                                67 1467 1325 290 267 531 485 536 485 5 0 246 -218 536 -485 1369 -1258 1414
                                -1299 1467 -1325 230 -112 496 20 548 272 22 104 -12 230 -82 311 -56 64
                                -2205 2166 -2243 2193 -77 57 -194 84 -290 68z"/>
                            </g>
                        </svg>
                    </div>
                    <?
                        $categories = $db->query("SELECT category FROM card");
                        $unique_category = [];
                        foreach ($categories as $categories) {
                            array_push($unique_category, $categories["category"]);
                        }
                        $unique_category = array_unique($unique_category);
                        $normaly_unique_category = [];
                        foreach ($unique_category as $unique_category) {
                            array_push($normaly_unique_category, $unique_category);
                        }
                        $categories_counter = 0;
                    ?>
                    <div class="auto-slider__lane">
                        <div class="auto-slider__block auto-slider__block-1">
                            <img src="./pics/fruits.png" class="auto-slider__picture-1">
                            <div class="auto-slider__block-info">
                                <h1>Спелые фрукты и овощи</h1>
                                <h2>В магазинах Спектр-НН покупателей всегда ждёт большой выбор свежих фруктов и овощей</h2>
                                <?
                                    echo "
                                        <a href='/spectr-nn/pages/catalog.php?category=$normaly_unique_category[$categories_counter]'>
                                            <button class='auto-slider__katalog-link auto-slider__katalog-link-1' data-ripple>
                                                Перейти в каталог
                                            </button>
                                        </a>
                                    ";
                                    $categories_counter++;
                                ?>
                            </div>
                        </div>
                        <div class="auto-slider__block auto-slider__block-2">
                            <img src="./pics/milk.png" class="auto-slider__picture-2">
                            <div class="auto-slider__block-info">
                                <h1>Молочные продукты</h1>
                                <h2>Широкий спектр молочных продуктов от Российских поставщиков</h2>
                                <?
                                    echo "
                                        <a href='/spectr-nn/pages/catalog.php?category=$normaly_unique_category[$categories_counter]'>
                                            <button class='auto-slider__katalog-link auto-slider__katalog-link-2' data-ripple>
                                                Перейти в каталог
                                            </button>
                                        </a>
                                    ";
                                    $categories_counter++;
                                ?>
                            </div> 
                        </div>
                        <div class="auto-slider__block auto-slider__block-3">
                            <img src="./pics/meat.png" class="auto-slider__picture-3">
                            <div class="auto-slider__block-info">
                                <h1>Мясо и колбаса</h1>
                                <h2>Огромный выбор мясной продукции от Нижегородских фермеров</h2>
                                <?
                                    echo "
                                        <a href='/spectr-nn/pages/catalog.php?category=$normaly_unique_category[$categories_counter]'>
                                            <button class='auto-slider__katalog-link auto-slider__katalog-link-3' data-ripple>
                                                Перейти в каталог
                                            </button>
                                        </a>
                                    ";
                                    $categories_counter++;
                                ?>
                            </div>
                        </div>
                        <div class="auto-slider__block auto-slider__block-4">
                            <img src="./pics/coffee.png" class="auto-slider__picture-4">
                            <div class="auto-slider__block-info">
                                <h1>Кофе</h1>
                                <h2>В каждом магазине Спектр-НН вас ждёт свежесваренный кофе</h2>
                                <?
                                    echo "
                                        <a href='/spectr-nn/pages/catalog.php?category=$normaly_unique_category[$categories_counter]'>
                                            <button class='auto-slider__katalog-link auto-slider__katalog-link-4' data-ripple>
                                                Перейти в каталог
                                            </button>
                                        </a>
                                    ";
                                    $categories_counter++;
                                ?>
                            </div>
                        </div>
                        <div class="auto-slider__block auto-slider__block-5">
                            <img src="./pics/bread.png" class="auto-slider__picture-5">
                            <div class="auto-slider__block-info">
                                <h1>Свежая выпечка</h1>
                                <h2>Каждого покупателя ждёт большой выбор выпечки: </br> Любимые булочки, хлеб и многое другое</h2>
                                <?
                                    echo "
                                        <a href='/spectr-nn/pages/catalog.php?category=$normaly_unique_category[$categories_counter]'>
                                            <button class='auto-slider__katalog-link auto-slider__katalog-link-5' data-ripple>
                                                Перейти в каталог
                                            </button>
                                        </a>
                                    ";
                                    $categories_counter++;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="auto-slider__navigation">
                        <div class="auto-slider__circle auto-slider__circle_active"></div>
                        <div class="auto-slider__circle"></div>
                        <div class="auto-slider__circle"></div>
                        <div class="auto-slider__circle"></div>
                        <div class="auto-slider__circle"></div>
                    </div>
                    <div class="auto-slider__line"></div>
                    <div class="auto-slider__line-active"></div>
                </div>
                <? 
                    $categories_counter = 0;
                    $category = $db->query("SELECT * FROM card WHERE category LIKE '$normaly_unique_category[$categories_counter]'"); 
                    echo "
                        <div class='cards'>
                            <h1 class='main-titles main-titles-adapt'>$normaly_unique_category[$categories_counter]</h1>
                            <div class='cards__slider'>
                                <div class='cards__button cards__left'>
                                    <svg version='1.0' xmlns='http://www.w3.org/2000/svg' width='12pt' height='15pt' viewBox='0 0 512.000000 512.000000' preserveAspectRatio='xMidYMid meet'>
                                                <g transform='translate(0.000000,512.000000) scale(0.100000,-0.100000)' stroke='none'>
                                                    <path d='M2496 3999 c-127 -21 -86 16 -1274 -1148 -606 -594 -1115 -1095
                                                    -1131 -1113 -127 -147 -117 -370 24 -511 115 -115 293 -144 442 -72 53 26 98
                                                    67 1467 1325 290 267 531 485 536 485 5 0 246 -218 536 -485 1369 -1258 1414
                                                    -1299 1467 -1325 230 -112 496 20 548 272 22 104 -12 230 -82 311 -56 64
                                                    -2205 2166 -2243 2193 -77 57 -194 84 -290 68z'/>
                                                </g>
                                    </svg>
                                </div>
                                <div class='cards__button cards__right'>
                                    <svg version='1.0' xmlns='http://www.w3.org/2000/svg' width='12pt' height='15pt' viewBox='0 0 512.000000 512.000000' preserveAspectRatio='xMidYMid meet'>
                                                <g transform='translate(0.000000,512.000000) scale(0.100000,-0.100000)' stroke='none'>
                                                    <path d='M2496 3999 c-127 -21 -86 16 -1274 -1148 -606 -594 -1115 -1095
                                                    -1131 -1113 -127 -147 -117 -370 24 -511 115 -115 293 -144 442 -72 53 26 98
                                                    67 1467 1325 290 267 531 485 536 485 5 0 246 -218 536 -485 1369 -1258 1414
                                                    -1299 1467 -1325 230 -112 496 20 548 272 22 104 -12 230 -82 311 -56 64
                                                    -2205 2166 -2243 2193 -77 57 -194 84 -290 68z'/>
                                                </g>
                                    </svg>
                                </div>
                                <div class='cards__lane'>";
                                    pseudo_destructuring_and_echo($category);
                                echo "</div>
                            </div>
                        </div> 
                    ";
                    $categories_counter++;
                ?>
                <div class="brands">
                        <h1 class="main-titles">
                            Бренды
                        </h1>
                        <div class="brands__slider">
                            <div class="brands__slider-wrapper">
                                <div class="brands__left brands__button">
                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="12pt" height="15pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                                        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                            <path d="M2496 3999 c-127 -21 -86 16 -1274 -1148 -606 -594 -1115 -1095
                                            -1131 -1113 -127 -147 -117 -370 24 -511 115 -115 293 -144 442 -72 53 26 98
                                            67 1467 1325 290 267 531 485 536 485 5 0 246 -218 536 -485 1369 -1258 1414
                                            -1299 1467 -1325 230 -112 496 20 548 272 22 104 -12 230 -82 311 -56 64
                                            -2205 2166 -2243 2193 -77 57 -194 84 -290 68z"/>
                                        </g>
                                    </svg>
                                </div>
                            <div class="brands__right brands__button">
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="12pt" height="15pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                        <path d="M2496 3999 c-127 -21 -86 16 -1274 -1148 -606 -594 -1115 -1095
                                        -1131 -1113 -127 -147 -117 -370 24 -511 115 -115 293 -144 442 -72 53 26 98
                                        67 1467 1325 290 267 531 485 536 485 5 0 246 -218 536 -485 1369 -1258 1414
                                        -1299 1467 -1325 230 -112 496 20 548 272 22 104 -12 230 -82 311 -56 64
                                        -2205 2166 -2243 2193 -77 57 -194 84 -290 68z"/>
                                    </g>
                                </svg>
                            </div>
                                <div class="brands__slider-lane">
                                    <img class="brands__img" src="./pics/brands/cola.png">
                                    <img class="brands__img" src="./pics/brands/whiskas.png">
                                    <img class="brands__img" src="./pics/brands/danone.png">
                                    <img class="brands__img" src="./pics/brands/nestle.png">
                                    <img class="brands__img" src="./pics/brands/nescafe.png">
                                    <img class="brands__img" src="./pics/brands/pedigree.png">
                                    <img class="brands__img" src="./pics/brands/jacobs.png">
                                    <img class="brands__img" src="./pics/brands/nesquik.png">
                                    <img class="brands__img" src="./pics/brands/heinz.png">
                                    <img class="brands__img" src="./pics/brands/dobry.png">
                                    <img class="brands__img" src="./pics/brands/purina.png">
                                    <img class="brands__img" src="./pics/brands/heineken.png">
                                </div>
                            </div>
                        </div>
                </div>
                <?  
                    $category = $db->query("SELECT * FROM card WHERE category LIKE '$normaly_unique_category[$categories_counter]'"); 
                    echo "
                       <div class='cards'>
                           <h1 class='main-titles'>$normaly_unique_category[$categories_counter]</h1>
                           <div class='cards__slider'>
                               <div class='cards__button cards__left'>
                                   <svg version='1.0' xmlns='http://www.w3.org/2000/svg' width='12pt' height='15pt' viewBox='0 0 512.000000 512.000000' preserveAspectRatio='xMidYMid meet'>
                                               <g transform='translate(0.000000,512.000000) scale(0.100000,-0.100000)' stroke='none'>
                                                   <path d='M2496 3999 c-127 -21 -86 16 -1274 -1148 -606 -594 -1115 -1095
                                                   -1131 -1113 -127 -147 -117 -370 24 -511 115 -115 293 -144 442 -72 53 26 98
                                                   67 1467 1325 290 267 531 485 536 485 5 0 246 -218 536 -485 1369 -1258 1414
                                                   -1299 1467 -1325 230 -112 496 20 548 272 22 104 -12 230 -82 311 -56 64
                                                   -2205 2166 -2243 2193 -77 57 -194 84 -290 68z'/>
                                               </g>
                                   </svg>
                               </div>
                               <div class='cards__button cards__right'>
                                   <svg version='1.0' xmlns='http://www.w3.org/2000/svg' width='12pt' height='15pt' viewBox='0 0 512.000000 512.000000' preserveAspectRatio='xMidYMid meet'>
                                               <g transform='translate(0.000000,512.000000) scale(0.100000,-0.100000)' stroke='none'>
                                                   <path d='M2496 3999 c-127 -21 -86 16 -1274 -1148 -606 -594 -1115 -1095
                                                   -1131 -1113 -127 -147 -117 -370 24 -511 115 -115 293 -144 442 -72 53 26 98
                                                   67 1467 1325 290 267 531 485 536 485 5 0 246 -218 536 -485 1369 -1258 1414
                                                   -1299 1467 -1325 230 -112 496 20 548 272 22 104 -12 230 -82 311 -56 64
                                                   -2205 2166 -2243 2193 -77 57 -194 84 -290 68z'/>
                                               </g>
                                   </svg>
                               </div>
                               <div class='cards__lane'>";
                                   pseudo_destructuring_and_echo($category);
                               echo "</div>
                           </div>
                       </div> 
                    ";
                    $categories_counter++;
                ?>  
                <div class="manufacture">
                    <div class="manufacture__left">
                        <h1 class="main-titles">
                            Своё производство
                        </h1>
                        <div class="manufacture__kinds">
                            <div class="manufacture__kind manufacture__kind_active">
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                    <path d="M825 5109 c-133 -32 -295 -159 -414 -326 -73 -102 -183 -323 -235
                                    -471 -69 -198 -126 -471 -158 -762 -19 -175 -16 -651 6 -830 44 -369 125 -687
                                    235 -924 41 -88 68 -116 114 -116 37 0 77 40 77 77 0 15 -23 80 -50 143 -27
                                    63 -50 123 -50 133 0 15 14 17 153 17 139 0 156 2 203 24 207 96 187 406 -30
                                    471 -37 11 -103 15 -252 15 l-202 0 -6 28 c-3 15 -10 70 -16 122 -6 52 -12
                                    116 -15 143 l-6 47 144 0 c102 0 156 4 188 15 102 35 169 130 169 239 -1 106
                                    -52 188 -145 232 -46 22 -63 24 -203 24 l-153 0 6 48 c3 26 9 90 15 142 6 52
                                    13 107 16 122 l5 26 222 4 c218 3 223 4 272 30 94 49 140 126 139 228 -1 100
                                    -47 176 -135 225 -53 29 -58 30 -216 33 l-161 4 40 96 c129 311 269 489 438
                                    557 28 11 72 18 117 18 64 0 81 -4 147 -36 40 -21 98 -58 127 -85 213 -191
                                    402 -655 459 -1122 14 -122 25 -149 66 -166 40 -17 76 -6 100 31 20 30 16 91
                                    -16 281 -135 780 -484 1279 -890 1273 -36 -1 -83 -5 -105 -10z m-171 -1038
                                    c33 -31 35 -85 4 -118 -21 -23 -26 -23 -215 -23 -180 0 -194 1 -190 18 3 9 8
                                    31 12 47 3 17 11 47 16 68 l10 38 169 -3 c162 -3 169 -4 194 -27z m-169 -856
                                    c27 -27 33 -79 12 -106 -25 -33 -55 -39 -191 -39 l-136 0 0 85 0 85 145 0
                                    c142 0 147 -1 170 -25z m170 -850 c34 -33 34 -87 0 -120 -24 -25 -27 -25 -194
                                    -25 l-170 0 -11 43 c-6 23 -15 58 -21 77 -5 19 -9 38 -9 43 0 4 86 7 190 7
                                    189 0 191 0 215 -25z"/>
                                    <path d="M2500 3573 c-90 -10 -286 -56 -380 -88 -406 -142 -669 -394 -736
                                    -705 -31 -147 -12 -295 56 -436 50 -105 87 -144 132 -144 72 0 106 68 68 135
                                    -77 133 -100 203 -100 305 0 224 149 433 421 592 437 254 1197 229 1630 -54
                                    354 -231 436 -597 197 -888 l-28 -35 0 -537 0 -537 26 -20 c37 -29 85 -27 115
                                    5 l24 26 3 499 3 500 39 58 c86 126 121 239 121 386 0 296 -186 569 -506 742
                                    l-60 33 189 0 c214 0 346 -15 507 -60 353 -97 622 -303 701 -537 55 -162 19
                                    -341 -101 -509 l-41 -57 0 -1039 0 -1038 -499 0 -500 0 -27 -24 c-39 -33 -39
                                    -89 0 -122 l27 -24 555 0 556 0 29 29 29 29 0 1067 0 1066 31 45 c80 117 139
                                    293 139 418 0 379 -368 739 -890 871 -207 53 -249 55 -1000 53 -382 -1 -711
                                    -3 -730 -5z"/>
                                    <path d="M2613 3150 c-56 -23 -68 -111 -20 -145 54 -38 137 0 137 64 0 57 -66
                                    102 -117 81z"/>
                                    <path d="M2178 2974 c-46 -24 -53 -90 -15 -131 46 -51 137 -15 137 54 0 45 -9
                                    62 -41 78 -35 18 -47 18 -81 -1z"/>
                                    <path d="M3035 2978 c-49 -29 -60 -87 -24 -132 21 -26 65 -35 104 -20 25 10
                                    47 62 40 94 -11 52 -77 84 -120 58z"/>
                                    <path d="M2453 2642 c-13 -2 -32 -15 -43 -29 -45 -57 -7 -135 65 -135 30 0 45
                                    6 62 27 55 64 2 150 -84 137z"/>
                                    <path d="M2781 2634 c-56 -24 -65 -108 -15 -141 82 -53 174 43 114 119 -24 32
                                    -59 39 -99 22z"/>
                                    <path d="M1675 2038 c-480 -48 -945 -266 -1275 -598 -211 -213 -345 -448 -385
                                    -679 -19 -105 -19 -177 0 -266 21 -99 60 -171 129 -241 166 -165 415 -231 951
                                    -250 165 -6 195 -4 222 9 52 27 62 96 20 135 -20 18 -44 21 -272 31 -277 12
                                    -416 29 -549 67 -254 71 -363 207 -341 428 19 200 138 423 330 625 76 80 241
                                    221 258 221 3 0 7 -71 9 -157 3 -140 6 -163 25 -199 96 -180 359 -179 456 1
                                    21 38 22 57 27 330 l5 290 125 31 c69 17 144 34 168 37 l42 5 0 -172 c0 -201
                                    12 -256 67 -317 122 -135 337 -107 417 52 25 52 26 58 26 246 l0 193 43 -6
                                    c23 -3 99 -19 169 -36 l126 -31 4 -281 3 -281 28 -57 c44 -90 122 -137 227
                                    -137 106 0 182 45 226 135 25 52 28 69 33 207 l6 149 65 -48 c91 -69 234 -214
                                    313 -319 78 -104 169 -281 192 -375 12 -44 16 -95 13 -160 -3 -84 -7 -104 -36
                                    -162 -114 -233 -400 -287 -1503 -288 l-456 0 -21 -23 c-31 -33 -29 -87 4 -118
                                    l26 -24 351 -3 c415 -4 948 12 1101 33 423 57 643 204 697 464 17 80 6 268
                                    -21 361 -85 298 -349 622 -685 843 -393 257 -898 382 -1360 335z m248 -164
                                    l37 -7 0 -183 c0 -170 -2 -186 -20 -204 -27 -27 -64 -34 -96 -18 -48 22 -54
                                    48 -54 235 l0 172 33 4 c57 7 61 7 100 1z m-813 -394 l0 -231 -25 -24 c-33
                                    -34 -87 -34 -120 0 -25 24 -25 25 -25 218 l0 194 78 36 c42 20 80 36 85 37 4
                                    0 7 -104 7 -230z m1630 192 l75 -37 0 -192 c0 -189 0 -192 -24 -217 -31 -33
                                    -85 -35 -118 -4 -23 21 -23 24 -23 255 0 128 3 233 8 233 4 0 41 -17 82 -38z"/>
                                    </g>
                                </svg>
                                <p>Пекарня</p>
                            </div>
                            <div class="manufacture__kind">
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                        <path d="M975 4636 c-14 -14 -25 -31 -25 -39 0 -21 -38 -52 -107 -86 -120 -60
                                        -159 -113 -151 -202 6 -62 42 -103 132 -150 91 -48 128 -77 124 -101 -2 -15
                                        -32 -37 -95 -72 -139 -78 -163 -107 -163 -196 0 -45 4 -55 39 -93 22 -23 72
                                        -60 113 -81 152 -81 151 -86 -43 -196 -75 -42 -109 -88 -109 -146 0 -47 17
                                        -66 56 -66 31 -1 46 13 60 54 8 25 28 42 101 82 136 76 163 107 163 189 0 76
                                        -31 109 -189 201 -98 57 -95 79 20 141 148 80 174 111 167 201 -4 47 -10 61
                                        -42 92 -20 20 -73 57 -118 82 -129 71 -129 88 -2 157 112 62 155 108 161 170
                                        5 52 -2 64 -44 77 -17 5 -29 1 -48 -18z"/>
                                        <path d="M1599 4646 c-13 -6 -29 -27 -35 -46 -10 -30 -25 -42 -100 -83 -131
                                        -71 -164 -108 -164 -187 0 -79 39 -122 171 -191 56 -29 81 -48 85 -65 8 -32 3
                                        -37 -84 -84 -144 -79 -172 -111 -172 -199 0 -44 5 -56 36 -91 20 -22 71 -58
                                        113 -81 155 -85 154 -89 -40 -199 -75 -42 -109 -88 -109 -146 0 -47 17 -66 56
                                        -66 31 -1 46 13 60 55 8 25 27 40 100 79 132 73 164 109 164 191 0 76 -31 109
                                        -189 201 -98 57 -95 79 20 141 142 77 169 107 169 192 0 75 -36 117 -155 179
                                        -148 78 -147 85 44 193 34 19 72 50 86 71 54 78 16 172 -56 136z"/>
                                        <path d="M3740 4647 c-13 -7 -29 -28 -35 -47 -10 -29 -25 -42 -101 -82 -131
                                        -72 -164 -109 -164 -188 0 -79 33 -116 165 -188 81 -44 90 -52 90 -77 0 -26
                                        -10 -34 -95 -83 -144 -81 -165 -108 -158 -199 6 -68 41 -107 148 -165 154 -84
                                        153 -88 -41 -198 -79 -44 -111 -91 -107 -151 2 -37 8 -46 31 -57 24 -12 31
                                        -11 52 2 14 9 28 30 33 48 7 27 21 39 97 80 132 72 165 109 165 188 0 74 -43
                                        126 -144 177 -131 65 -144 99 -58 148 138 79 158 92 179 124 17 24 23 48 23
                                        85 0 68 -30 111 -109 156 -129 73 -151 89 -151 110 0 21 22 37 151 110 34 19
                                        72 51 85 70 53 77 14 172 -56 137z"/>
                                        <path d="M4350 4647 c-13 -7 -29 -28 -35 -47 -10 -29 -25 -42 -101 -82 -131
                                        -72 -164 -109 -164 -188 0 -79 33 -116 165 -188 81 -44 90 -51 90 -77 0 -25
                                        -9 -34 -70 -68 -157 -87 -185 -117 -185 -197 0 -78 36 -118 169 -193 122 -69
                                        121 -86 -8 -157 -45 -25 -98 -60 -116 -79 -55 -54 -61 -136 -12 -159 24 -12
                                        31 -11 52 2 13 8 28 31 35 50 9 29 23 41 91 76 139 72 176 118 167 211 -6 62
                                        -45 107 -133 151 -150 76 -157 102 -45 165 158 88 180 112 180 198 0 67 -30
                                        110 -109 155 -129 73 -151 89 -151 110 0 21 22 37 151 110 34 19 72 51 85 70
                                        53 77 14 172 -56 137z"/>
                                        <path d="M2499 3780 c-70 -12 -141 -53 -197 -114 -105 -115 -118 -282 -32
                                        -417 17 -25 30 -49 30 -52 0 -4 -13 -7 -29 -7 -41 0 -214 -36 -318 -66 -407
                                        -117 -794 -377 -1064 -714 -251 -313 -416 -726 -455 -1137 l-7 -73 -146 0
                                        c-165 0 -197 -9 -239 -71 -62 -90 19 -317 166 -465 113 -114 252 -178 422
                                        -195 57 -6 858 -8 2000 -7 1768 3 1910 5 1969 21 184 50 348 181 434 346 69
                                        132 85 241 45 301 -42 60 -74 70 -239 70 l-146 0 -12 108 c-35 313 -147 638
                                        -309 899 -153 248 -382 483 -628 649 -108 72 -335 187 -454 229 -108 38 -327
                                        93 -404 101 -36 4 -66 11 -66 15 0 5 13 28 30 51 39 57 64 154 55 221 -15 112
                                        -90 223 -185 272 -38 19 -149 48 -169 44 -3 -1 -27 -5 -52 -9z m156 -138 c189
                                        -92 163 -369 -39 -423 -124 -34 -261 57 -281 186 -17 116 68 234 185 255 44 8
                                        96 1 135 -18z m120 -562 c383 -43 737 -188 1040 -425 163 -128 362 -353 467
                                        -530 104 -174 192 -389 237 -582 21 -90 50 -276 51 -320 l0 -23 -2010 0 -2010
                                        0 0 25 c0 57 34 257 61 364 203 787 873 1378 1684 1484 132 18 356 21 480 7z
                                        m2199 -2052 c0 -34 -11 -70 -42 -130 -87 -175 -238 -282 -435 -308 -104 -14
                                        -3769 -13 -3876 0 -172 22 -315 111 -405 253 -56 88 -92 208 -69 230 3 4 1091
                                        6 2417 5 l2411 -3 -1 -47z"/>
                                        <path d="M2070 2774 c-301 -89 -533 -227 -761 -454 -75 -74 -139 -146 -144
                                        -159 -5 -16 -1 -31 12 -50 37 -49 51 -42 199 107 233 233 466 372 754 448 94
                                        25 125 69 80 114 -25 25 -36 25 -140 -6z"/>
                                    </g>
                                </svg>
                                <p>Домашняя кухня</p>
                            </div>
                            <div class="manufacture__kind">
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                    <path d="M2918 4528 c-172 -109 -198 -133 -198 -179 0 -30 44 -69 78 -69 18 0
                                    81 33 185 99 182 114 138 108 427 60 335 -56 672 -151 909 -258 354 -158 570
                                    -369 625 -609 14 -61 14 -62 -7 -67 -12 -3 -625 -102 -1362 -220 -737 -119
                                    -1360 -222 -1384 -230 -104 -35 -187 -111 -238 -221 l-28 -59 -5 -340 c-4
                                    -226 -9 -349 -17 -366 -18 -42 -72 -98 -117 -122 -31 -16 -59 -21 -111 -21
                                    -76 0 -117 15 -168 63 -45 41 -58 76 -68 179 -16 168 -88 281 -223 348 -53 26
                                    -90 36 -142 41 -171 14 -340 -93 -406 -257 -22 -53 -23 -70 -28 -490 l-5 -435
                                    -28 -47 c-60 -103 -170 -149 -281 -116 -55 16 -138 99 -154 154 -19 64 -17
                                    1040 2 1112 19 68 59 137 110 184 23 22 552 361 1176 754 624 394 1145 727
                                    1158 740 28 32 28 66 -1 100 -16 19 -34 27 -55 27 -23 0 -303 -172 -1179 -724
                                    -1259 -794 -1253 -790 -1321 -927 -61 -124 -63 -149 -60 -748 l3 -540 37 -76
                                    c65 -131 184 -213 326 -225 168 -14 339 95 404 257 22 53 23 70 28 490 5 475
                                    3 454 66 529 54 65 155 94 241 70 34 -9 62 -27 98 -63 56 -56 75 -103 75 -184
                                    0 -224 199 -398 434 -379 143 12 265 99 329 235 l32 67 5 340 c5 326 6 342 27
                                    381 25 47 76 94 119 112 16 6 638 110 1382 230 l1352 218 0 -278 0 -278 -22
                                    -5 c-13 -3 -624 -102 -1358 -220 -734 -118 -1345 -217 -1357 -220 -33 -8 -63
                                    -45 -63 -77 0 -36 40 -78 73 -78 13 0 625 97 1358 215 734 118 1342 215 1351
                                    215 17 0 18 -18 18 -235 l0 -235 -22 -5 c-13 -3 -918 -149 -2012 -326 -1094
                                    -176 -1998 -324 -2007 -330 -58 -31 -46 -123 19 -143 10 -3 911 138 2002 314
                                    1092 176 1993 320 2003 320 16 0 17 -20 17 -275 0 -151 -1 -275 -2 -276 -2 0
                                    -1081 -174 -2398 -387 l-2395 -388 -5 174 c-5 168 -6 174 -29 193 -32 26 -77
                                    24 -106 -6 l-25 -24 0 -231 0 -231 25 -24 c13 -14 33 -25 44 -25 11 0 1136
                                    180 2499 400 1364 220 2485 400 2491 400 7 0 23 11 36 25 l25 24 0 1091 c0
                                    1200 2 1165 -61 1317 -163 391 -718 696 -1541 848 -134 24 -362 55 -403 55
                                    -11 0 -100 -51 -197 -112z"/>
                                    </g>
                                </svg>
                                <p>Десерты</p>
                            </div>
                        </div>
                        <div class="manufacture__descriptions">
                            <p class="manufacture__description">Наша пекарня готовит для вас каждый день ароматный и вкусный хлеб. Мы печём 5 раз в день, поэтому наша выпечка будет всегда свежей — когда бы вы её ни купили.</p>
                            <p class="manufacture__description">Широкий ассортимент вкусных и сытных блюд: полезные завтраки и полноценные бизнес-ланчи, оригинальные салаты и закуски, разнообразные гарниры, блюда русской, европейской и азиатской кухни.</p>
                            <p class="manufacture__description">Насладитесь восхитительным вкусом тортов и пирожных собственного производства. Всегда свежие и мягкие, с натуральными ингредиентами и богатой начинкой.</p>
                        </div>
                    </div>
                    <div class="manufacture__right">
                        <img class="manufacture__img" src="./pics/manufacture/bread.jpg">
                        <img class="manufacture__img" src="./pics/manufacture/manufacture_dish.png">
                        <img class="manufacture__img" src="./pics/manufacture/manufacture_dessert.png">
                    </div>
                </div>
                <?  
                    $category = $db->query("SELECT * FROM card WHERE category LIKE '$normaly_unique_category[$categories_counter]'"); 
                    echo "
                       <div class='cards'>
                           <h1 class='main-titles'>$normaly_unique_category[$categories_counter]</h1>
                           <div class='cards__slider'>
                               <div class='cards__button cards__left'>
                                   <svg version='1.0' xmlns='http://www.w3.org/2000/svg' width='12pt' height='15pt' viewBox='0 0 512.000000 512.000000' preserveAspectRatio='xMidYMid meet'>
                                               <g transform='translate(0.000000,512.000000) scale(0.100000,-0.100000)' stroke='none'>
                                                   <path d='M2496 3999 c-127 -21 -86 16 -1274 -1148 -606 -594 -1115 -1095
                                                   -1131 -1113 -127 -147 -117 -370 24 -511 115 -115 293 -144 442 -72 53 26 98
                                                   67 1467 1325 290 267 531 485 536 485 5 0 246 -218 536 -485 1369 -1258 1414
                                                   -1299 1467 -1325 230 -112 496 20 548 272 22 104 -12 230 -82 311 -56 64
                                                   -2205 2166 -2243 2193 -77 57 -194 84 -290 68z'/>
                                               </g>
                                   </svg>
                               </div>
                               <div class='cards__button cards__right'>
                                   <svg version='1.0' xmlns='http://www.w3.org/2000/svg' width='12pt' height='15pt' viewBox='0 0 512.000000 512.000000' preserveAspectRatio='xMidYMid meet'>
                                               <g transform='translate(0.000000,512.000000) scale(0.100000,-0.100000)' stroke='none'>
                                                   <path d='M2496 3999 c-127 -21 -86 16 -1274 -1148 -606 -594 -1115 -1095
                                                   -1131 -1113 -127 -147 -117 -370 24 -511 115 -115 293 -144 442 -72 53 26 98
                                                   67 1467 1325 290 267 531 485 536 485 5 0 246 -218 536 -485 1369 -1258 1414
                                                   -1299 1467 -1325 230 -112 496 20 548 272 22 104 -12 230 -82 311 -56 64
                                                   -2205 2166 -2243 2193 -77 57 -194 84 -290 68z'/>
                                               </g>
                                   </svg>
                               </div>
                               <div class='cards__lane'>";
                                   pseudo_destructuring_and_echo($category);
                               echo "</div>
                           </div>
                       </div> 
                    ";
                    $categories_counter++;
                ?> 
                <div class="shops">
                    <h1 class="main-titles">
                        Карта магазинов
                    </h1>
                    <iframe class="map" src="https://yandex.ru/map-widget/v1/?um=constructor%3Ac2d0bcd212539400f3c44dc26ba0161a29984d6ea664f99d20765be353e9d3b5&amp;source=constructor" width="100%" height="620" frameborder="0"></iframe>
                </div>
                <?  
                    $category = $db->query("SELECT * FROM card WHERE category LIKE '$normaly_unique_category[$categories_counter]'"); 
                    echo "
                       <div class='cards'>
                           <h1 class='main-titles'>$normaly_unique_category[$categories_counter]</h1>
                           <div class='cards__slider'>
                               <div class='cards__button cards__left'>
                                   <svg version='1.0' xmlns='http://www.w3.org/2000/svg' width='12pt' height='15pt' viewBox='0 0 512.000000 512.000000' preserveAspectRatio='xMidYMid meet'>
                                               <g transform='translate(0.000000,512.000000) scale(0.100000,-0.100000)' stroke='none'>
                                                   <path d='M2496 3999 c-127 -21 -86 16 -1274 -1148 -606 -594 -1115 -1095
                                                   -1131 -1113 -127 -147 -117 -370 24 -511 115 -115 293 -144 442 -72 53 26 98
                                                   67 1467 1325 290 267 531 485 536 485 5 0 246 -218 536 -485 1369 -1258 1414
                                                   -1299 1467 -1325 230 -112 496 20 548 272 22 104 -12 230 -82 311 -56 64
                                                   -2205 2166 -2243 2193 -77 57 -194 84 -290 68z'/>
                                               </g>
                                   </svg>
                               </div>
                               <div class='cards__button cards__right'>
                                   <svg version='1.0' xmlns='http://www.w3.org/2000/svg' width='12pt' height='15pt' viewBox='0 0 512.000000 512.000000' preserveAspectRatio='xMidYMid meet'>
                                               <g transform='translate(0.000000,512.000000) scale(0.100000,-0.100000)' stroke='none'>
                                                   <path d='M2496 3999 c-127 -21 -86 16 -1274 -1148 -606 -594 -1115 -1095
                                                   -1131 -1113 -127 -147 -117 -370 24 -511 115 -115 293 -144 442 -72 53 26 98
                                                   67 1467 1325 290 267 531 485 536 485 5 0 246 -218 536 -485 1369 -1258 1414
                                                   -1299 1467 -1325 230 -112 496 20 548 272 22 104 -12 230 -82 311 -56 64
                                                   -2205 2166 -2243 2193 -77 57 -194 84 -290 68z'/>
                                               </g>
                                   </svg>
                               </div>
                               <div class='cards__lane'>";
                                   pseudo_destructuring_and_echo($category);
                               echo "</div>
                           </div>
                       </div> 
                    ";
                    $categories_counter++;
                ?> 
                <?  
                    $category = $db->query("SELECT * FROM card WHERE category LIKE '$normaly_unique_category[$categories_counter]'"); 
                    echo "
                       <div class='cards'>
                           <h1 class='main-titles'>$normaly_unique_category[$categories_counter]</h1>
                           <div class='cards__slider'>
                               <div class='cards__button cards__left'>
                                   <svg version='1.0' xmlns='http://www.w3.org/2000/svg' width='12pt' height='15pt' viewBox='0 0 512.000000 512.000000' preserveAspectRatio='xMidYMid meet'>
                                               <g transform='translate(0.000000,512.000000) scale(0.100000,-0.100000)' stroke='none'>
                                                   <path d='M2496 3999 c-127 -21 -86 16 -1274 -1148 -606 -594 -1115 -1095
                                                   -1131 -1113 -127 -147 -117 -370 24 -511 115 -115 293 -144 442 -72 53 26 98
                                                   67 1467 1325 290 267 531 485 536 485 5 0 246 -218 536 -485 1369 -1258 1414
                                                   -1299 1467 -1325 230 -112 496 20 548 272 22 104 -12 230 -82 311 -56 64
                                                   -2205 2166 -2243 2193 -77 57 -194 84 -290 68z'/>
                                               </g>
                                   </svg>
                               </div>
                               <div class='cards__button cards__right'>
                                   <svg version='1.0' xmlns='http://www.w3.org/2000/svg' width='12pt' height='15pt' viewBox='0 0 512.000000 512.000000' preserveAspectRatio='xMidYMid meet'>
                                               <g transform='translate(0.000000,512.000000) scale(0.100000,-0.100000)' stroke='none'>
                                                   <path d='M2496 3999 c-127 -21 -86 16 -1274 -1148 -606 -594 -1115 -1095
                                                   -1131 -1113 -127 -147 -117 -370 24 -511 115 -115 293 -144 442 -72 53 26 98
                                                   67 1467 1325 290 267 531 485 536 485 5 0 246 -218 536 -485 1369 -1258 1414
                                                   -1299 1467 -1325 230 -112 496 20 548 272 22 104 -12 230 -82 311 -56 64
                                                   -2205 2166 -2243 2193 -77 57 -194 84 -290 68z'/>
                                               </g>
                                   </svg>
                               </div>
                               <div class='cards__lane'>";
                                   pseudo_destructuring_and_echo($category);
                               echo "</div>
                           </div>
                       </div> 
                    ";
                    $categories_counter++;
                ?> 
            </div>
            
        </main>
        <? require './pages/panticals/footer.php' ?>
    </div>
    <script src="./js/index.js"></script>
</body>
</html>