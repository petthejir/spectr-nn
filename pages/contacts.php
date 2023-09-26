<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../pics/logo.png" type="image/x-icon">
    <title>Контакты</title>
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
        <main class="main main-contacts">
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
                            <p>Контакты</p>
                        </li>
                    </ul>
                </div>
                <h1 class="test">Компания ООО "Спектр-НН Плюс"</h1>
                <div class="contactss">
                    <div class="numbers">
                        <div class="numbers__block">
                            <div class="numbers__left">
                                <h4 class="numbers__title">Центральный офис</h4>
                            </div>
                            <div class="numbers__right">
                                <p>Большая Покровская ул., 2, Нижний Новгород, Нижегородская обл., 603005</p>
                                <div class="numbers__main-office">
                                    <p><span class="numbers__text-grey">Время работы:</span> пн-пт 08:30-17:00</p>
                                    <p><a href="tel:88002007575"><span class="numbers__text-grey">Телефон:</span> 8-800-200-75-75</a></p>
                                    <p>
                                        <span class="numbers__text-grey">Электронная почта:</span> 
                                        <a href="mailto:spectrNN@gmail.ru"><span class="numbers__mail">spectrNN@gmail.ru</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="numbers__block numbers__block-without-border">
                            <div class="numbers__left">
                                <h4 class="numbers__title">Горячая линия для покупателей</h4>
                            </div>
                            <div class="numbers__right">
                                <div class="numbers__main-office numbers__main-office-minus-mar">
                                    <p><span class="numbers__text-grey">Время работы:</span> пн-вс 08:00-21:00</p>
                                    <p><a href="tel:88001019000"><span class="numbers__text-grey">Телефон:</span> 8-800-101-90-00</a></p>
                                </div>
                            </div>
                        </div>
                        <h3 class="numbers__office-staff">Сотрудники офиса</h3>
                        <div class="numbers__block">
                            <div class="numbers__left">
                                <h4 class="numbers__title">Наталья Мареева</h4>
                                <p><a href="tel:89018007673">8-901-800-76-73</a></p>
                                <a href="mailto:dirspectrNN@gmail.ru"><span class="numbers__mail">dirspectrNN@gmail.ru</span></a>
                            </div>
                            <div class="numbers__right">
                                <p><span class="numbers__text-grey">Руководитель отдела продаж Спектр-НН</span></p>
                            </div>
                        </div>
                        <div class="numbers__block">
                            <div class="numbers__left">
                                <h4 class="numbers__title">Анна Кириллова</h4>
                                <p><a href="tel:89200587714">8-920-058-77-14</a></p>
                                <a href="mailto:spectr-persNN@gmail.ru"><span class="numbers__mail">spectrNN-pers@gmail.ru</span></a>
                            </div>
                            <div class="numbers__right">
                                <p><span class="numbers__text-grey">Руководитель службы по персоналу Спектр-НН</span></p>
                            </div>
                        </div>
                        <div class="numbers__block">
                            <div class="numbers__left">
                                <h4 class="numbers__title">Денис Калашов</h4>
                                <p><a href="tel:89503532342">8-950-353-23-42</a></p>
                                <a href="mailto:kalashov@gmail.ru"><span class="numbers__mail">kalashov@gmail.ru</span></a>
                            </div>
                            <div class="numbers__right">
                                <p><span class="numbers__text-grey">Руководитель отдела развития Спектр-НН</span></p>
                            </div>
                        </div>
                        <div class="numbers__block">
                            <div class="numbers__left">
                                <h4 class="numbers__title">Гуля Рыбина</h4>
                                <p><a href="tel:89503532947">8-950-353-29-47</a></p>
                                <a href="mailto:rybina@gmail.ru"><span class="numbers__mail">rybina@gmail.ru</span></a>
                            </div>
                            <div class="numbers__right">
                                <p><span class="numbers__text-grey">Руководитель по маркетингу Спектр-НН</span></p>
                            </div>
                        </div>
                        <div class="numbers__block">
                            <div class="numbers__left">
                                <h4 class="numbers__title">Мария Антонова</h4>
                                <p><a href="tel:89302094971">8-930-209-49-71</a></p>
                                <a href="mailto:razvitie-spectr@gmail.ru"><span class="numbers__mail">razvitie-spectr@gmail.ru</span></a>
                            </div>
                            <div class="numbers__right">
                                <p><span class="numbers__text-grey">Менеджер по развитию Спектр-НН в Дзержинске и Богородске</span></p>
                            </div>
                        </div>
                        <div class="numbers__block">
                            <div class="numbers__left">
                                <h4 class="numbers__title">Ольга Турилкина</h4>
                                <p><a href="tel:89306939255">8-930-693-92-55</a></p>
                                <a href="mailto:spectrNN-com@gmail.ru"><span class="numbers__mail">spectrNN-com@gmail.ru</span></a>
                            </div>
                            <div class="numbers__right">
                                <p><span class="numbers__text-grey">Руководитель коммерческого отдела Спектр-НН</span></p>
                            </div>
                        </div>
                        <div class="numbers__block numbers__block-without-border">
                            <div class="numbers__left">
                                <h4 class="numbers__title">Ирина Павлова</h4>
                                <p><a href="tel:89307159737">8-930-715-97-37</a></p>
                                <a href="mailto:spectrNN-pers@gmail.ru"><span class="numbers__mail">spectrNN-pers@gmail.ru</span></a>
                            </div>
                            <div class="numbers__right">
                                <p><span class="numbers__text-grey">Менеджер по персоналу Спектр-НН</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="feedback">
                        <h3>Есть вопросы </br>или предложения?</h3>
                        <button class="call__button feedback__button" data-ripple>Обратная связь</button>
                        <p>или позвоните по телефону</p>
                        <h2><a href="tel:89302735550">8-930-273-55-50</a></h2>
                    </div>
                </div>


            </div>
        </main>
        <? require './panticals/footer.php' ?>
        <div class="call">
            <div class="call__block ripple-parrent">
                <div class="call__cross"></div>
                <div class="call__title">Обратный звонок</div>
                <div class="call__main">
                    <div class="call__text">
                        Введите свои данные и мы перезвоним вам в течение 15 минут (по будням c 10.00 до 19.00)
                    </div>
                    <input class="call__input" type="text" placeholder="Ваше имя">
                    <input class="call__input" type="tel" placeholder="Номер телефона" required="required" >
                    <button class="call__button" data-ripple>Отправить</button>
                    <div class="call__warning">Нажимая на кнопку «Отправить», вы соглашаетесь на обработку ваших персональных данных.</div>
                </div>
            </div>
            <div class="call__closer"></div>
        </div>
    </div>
    <script src="../source/js/header.js"></script>
    <script src="../source/js/contacts.js"></script>
</body>
</html>