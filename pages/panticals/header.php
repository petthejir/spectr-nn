<header class="header">
    <div id="header-search-closer"></div>
    <div class="conteiner header__conteiner">
        <a class="title header__title" href="/spectr-nn/">
            <img src="/spectr-nn/pics/logo.png" width="35px">
            <h1>пектр-НН</h1>   
        </a>
        <ul class="header__list">
            <a class="header-a" href="/spectr-nn/pages/catalog.php">Каталог</a>
            <a class="header-a" href="/spectr-nn/pages/shops.php">Магазины</a>
            <a class="header-a contracts-button" href="/spectr-nn/pages/contacts.php">Контакты</a>
            <a class="header-a" href="/spectr-nn/pages/comapany.php">О компании</a>
        </ul>
        <div class="header__right">
            <input class="header__search" placeholder="Поиск">

            <div class="header__search-result header__search-result_alternative">
                <div class="header__search-cards">
                    <h1 class="header__search-no-card remove">Товары не найдены, попробуйте изменить запрос</h1>
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
                        
                            echo "
                                <div class='header__search-card remove' header-card>
                                    <img src='$image' alt=''>
                                    <div class='header__search-card-main'>
                                        <h2 class='header__search-card-title'>$title</h2>
                                        <div class='header__search-card-rating'>
                                            <svg height='20px' width='20px' version='1.1' id='Capa_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' 
                                                                 viewBox='0 0 47.94 47.94' xml:space='preserve'>
                                                            <path d='M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757
                                                                c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042
                                                                c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685
                                                                c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528
                                                                c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956
                                                                C22.602,0.567,25.338,0.567,26.285,2.486z'/>
                                            </svg>
                                            <h3 class='header__search-card-rating-value'></h3>
                                        </div>
                                    </div>
                                    <div class='header__search-card-discount' header-discount><span class='card__header-discount-value'></span>%</div>
                                    <div class='header__search-card-right'>
                                        <div class='header__search-card-price'>
                                            <h2 class='header__search-card-price-old' data-header-old-price='$old_price'>$old_price,99 ₽</h2>
                                            <h2 class='header__search-card-price-new' data-header-new-price='$new_price'>$new_price,99 ₽</h2>
                                        </div>
                                        <div class='header__search-card-like' data-like>
                                            <svg height='35px' width='35px' version='1.1' id='Capa_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' 
                                                                 viewBox='0 0 50 50' xml:space='preserve'>
                                                            <path d='M24.85,10.126c2.018-4.783,6.628-8.125,11.99-8.125c7.223,0,12.425,6.179,13.079,13.543
                                                                c0,0,0.353,1.828-0.424,5.119c-1.058,4.482-3.545,8.464-6.898,11.503L24.85,48L7.402,32.165c-3.353-3.038-5.84-7.021-6.898-11.503
                                                                c-0.777-3.291-0.424-5.119-0.424-5.119C0.734,8.179,5.936,2,13.159,2C18.522,2,22.832,5.343,24.85,10.126z'/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            ";
                        }
                    
                    ?>
                </div>
            </div>           


            <div class="header__search-buttons">
                <div class="header__search-buttons-empty">
                    <button class="header__search-value-del">
                        <span class="header__search-value-del-left"></span>
                        <span class="header__search-value-del-right"></span>
                    </button>
                    <div class="header__search-line"></div>
                </div>
                <button class="header__search-search-button">
                    <svg width="19" height="19" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" color="#50b946" class="search-form__search-icon"><path d="M10.526 3a7.526 7.526 0 017.527 7.526 7.485 7.485 0 01-.7 3.156l3.29 4.429a1.81 1.81 0 01-2.532 2.532l-4.427-3.292a7.488 7.488 0 01-3.158.701 7.526 7.526 0 110-15.052zm0 12.744a5.217 5.217 0 100-10.436 5.218 5.218 0 000 10.436z"></path></svg>
                </button>
            </div>
            <a class="header__favorite-products-link" href="/spectr-nn/pages/favorite_products.php">
                <svg class="header__right-svg" height="18px" width="18px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                	 viewBox="0 0 50 50" xml:space="preserve">
                    <path d="M24.85,10.126c2.018-4.783,6.628-8.125,11.99-8.125c7.223,0,12.425,6.179,13.079,13.543
                    	c0,0,0.353,1.828-0.424,5.119c-1.058,4.482-3.545,8.464-6.898,11.503L24.85,48L7.402,32.165c-3.353-3.038-5.84-7.021-6.898-11.503
                    	c-0.777-3.291-0.424-5.119-0.424-5.119C0.734,8.179,5.936,2,13.159,2C18.522,2,22.832,5.343,24.85,10.126z"/>
                </svg>
            </a>
        </div>
    </div>
</header>