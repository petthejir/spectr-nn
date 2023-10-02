const header__search = document.querySelector('.header__search')
const header__list = document.querySelector('.header__list')
const header_search_closer = document.querySelector('#header-search-closer')
const header__search_buttons = document.querySelector('.header__search-buttons')
const header__search_buttons_empty = document.querySelector('.header__search-buttons-empty')
const header__search_value_del = document.querySelector('.header__search-value-del')
let body = document.querySelector('.body')

function header__search_value_do_empty() {
    return header__search.value === ''
}

function header__search_value_remove() {
    header__search.value = ''
    search_by_value(header__search.value)
}


function header__search_buttons_empty_alt_remove() {
    header__search_buttons_empty.classList.remove('header__search-buttons-empty_alt')
}

function header_search_closer_full_size_remove() {
    header__search.blur()
    header_search_closer.classList.remove('header-search-closer_alt')
    header__search.classList.remove('header__search_alt')
    header__list.classList.remove('header__list_alt')
    header_search_closer.classList.remove('header-search-closer')
}

header__search.onclick = () => { 
    header__search_buttons.classList.remove('header__search-buttons_alt')
    header__search.classList.add('header__search_alt')
    header__list.classList.add('header__list_alt')
    header_search_closer.classList.add('header-search-closer')
    header_search_closer.classList.add('header-search-closer_alt')
    if (document.querySelector('.auto-slider') != null) {
        clearTimeout(timeout)
        slider_line_active_0()
    }
}


header__search_value_del.onclick = () => {
    header__search_value_remove()
    header__search_buttons_empty_alt_remove()
    header__search.focus()
} 

header_search_closer.onclick = () => {
    header__search_buttons.classList.add('header__search-buttons_alt')
    header_search_closer_full_size_remove()
    header__search_value_remove()
    header__search_buttons_empty_alt_remove()
    if (document.querySelector('.auto-slider') != null) slider_underline()
}

document.addEventListener('keydown', e => {
    if(e.key === "Escape" && header__search.classList.contains('header__search_alt')) {
        header__search_buttons.classList.add('header__search-buttons_alt')
        header__search_value_remove()
        header_search_closer_full_size_remove()
        header__search_buttons_empty_alt_remove()
        if (document.querySelector('.auto-slider') != null) slider_underline()
    }
})

    //ripple-buttons
let buttons = document.querySelectorAll('[data-ripple]')
buttons.forEach(button => {
    button.onmousedown = function(event) {
        let coordinate = this.getBoundingClientRect()
        const ripple = document.createElement('span')
        const x = event.pageX - coordinate.left - 10
        const y = event.pageY - coordinate.top - 10
        ripple.className = 'ripple'
        ripple.style.left = x + 'px'
        ripple.style.top = y + 'px'
        this.appendChild(ripple)
        setTimeout(() => {
            ripple.parentNode.removeChild(ripple)
        }, 350)
    }  
})


    //header swup position
let footer = document.querySelector('.footer') 
let header = document.querySelector('.header')

const option = {
    rootMargin: `0px 0px 0px 0px`
}

const callback_func = entries => {
    entries.forEach(element => {
        const {isIntersecting} = element
        if (isIntersecting && document.querySelector('.wrapper').clientHeight > 1000) {
            Object.assign(header.style, {
                transform: 'translateY(-100px)',
                transition: '300ms ease-in',
            })
        }
        else header.style.transform = 'translateY(0px)'
    })
}
const observ = new IntersectionObserver(callback_func, option)
observ.observe(footer)




    //cards
let card_like = [...document.querySelectorAll('.card__like')]
let header_card_like = [...document.querySelectorAll('.header__search-card-like')]
   
let cards = [...document.querySelectorAll('[main-card]')] // main карты
let rating = document.querySelectorAll('.card__rating-value')
let rating_block = document.querySelectorAll('.card__rating')
let sort_value = document.querySelector('.filters__sort-value')
let card_discount = document.querySelectorAll('[data-discount]') // инициализация скидки
let card_discount_value = document.querySelectorAll('.card__discount-value') // value скидки
let cards_array = []
let price_new = [...document.querySelectorAll('[data-new-price]')] // инициализация блока новой цены
let price_new_value = price_new.map(price => price.getAttribute('data-new-price')) // value price new
let price_old = [...document.querySelectorAll('[data-old-price]')] // инициализация блока старой цены
let price_old_value = price_old.map(price => price.getAttribute('data-old-price'))// value price old
let card_title = [...document.querySelectorAll('.card__title-value')]
let subgroup = [...document.querySelectorAll('[data-subgroup]')]
let subgroup_value = subgroup.map(subgroup => subgroup.getAttribute('data-subgroup'))
let current_price
let discount

let header_cards = [...document.querySelectorAll('[header-card]')] // header карты
let header_cards_title = [...document.querySelectorAll('.header__search-card-title')]
let header_price_new = [...document.querySelectorAll('[data-header-new-price]')] // инициализация блока новой цены
let header_price_new_value = header_price_new.map(price => price.getAttribute('data-header-new-price')) // value price new
let header_price_old = [...document.querySelectorAll('[data-header-old-price]')] // инициализация блока старой цены
let header_price_old_value = header_price_old.map(price => price.getAttribute('data-header-old-price'))// value price old
let header_card_discount = document.querySelectorAll('[header-discount]') // инициализация скидки
let header_card_discount_value = document.querySelectorAll('.card__header-discount-value') // value скидки
let header_rating_block = document.querySelectorAll('.header__search-card-rating')
let header_rating = document.querySelectorAll('.header__search-card-rating-value')


for (let i = 0; i < header_cards.length; i++) {
    if (header_price_new_value[i] != '') {
        header_price_old[i].classList.add('card__price-old_alternative') // применение классов к old
        header_price_old[i].innerHTML = `<strike>${header_price_old[i].innerHTML}</strike>` // зачёркивание old
        header_card_discount_value[i].innerHTML = -Math.round((header_price_old_value[i]-header_price_new_value[i])/header_price_old_value[i] * 100) // рассчёт скидки
        header_card_discount[i].style.display = 'block' // отображение скидки
    }
        else header_price_new[i].innerHTML = ''

    if (header_rating[i].innerHTML != '') header_rating_block[i].classList.remove('remove')
        else header_rating_block[i].classList.add('remove')
}


for (let i = 0; i < cards.length; i++) {
    header_card_like[i].onclick = () => {
        header_card_like[i].classList.toggle('card__like_alternative')
        card_like[i].classList.toggle('card__like_alternative')
        window.location = header_card_like[i].getAttribute('data-href')
        return false
    }
    
    card_like[i].onclick = () => {
        card_like[i].classList.toggle('card__like_alternative')
        header_card_like[i].classList.toggle('card__like_alternative')
        window.location = card_like[i].getAttribute('data-href')
        return false
    }


    if (price_new_value[i] != '') {
        price_old[i].classList.add('card__price-old_alternative') // применение классов к old
        price_old[i].innerHTML = `<strike>${price_old[i].innerHTML}</strike>` // зачёркивание old
        card_discount_value[i].innerHTML = -Math.round((price_old_value[i]-price_new_value[i])/price_old_value[i] * 100) // рассчёт скидки
        card_discount[i].style.display = 'block' // отображение скидки
    }
        else price_new[i].innerHTML = ''
    
    if (rating[i].innerHTML != '') rating_block[i].classList.remove('remove')
        else rating_block[i].classList.add('remove')


    if (price_new_value[i] != '') current_price = price_new_value[i] 
        else current_price = price_old_value[i]
    if (card_discount_value[i].innerHTML != '') discount = card_discount_value[i].innerHTML
        else discount = 0

    cards_array.push(
        {
            title: card_title[i].innerHTML, 
            index: i,
            current_price: current_price,
            discount: discount,
            rating: -rating[i].innerHTML,
            _current_price: -current_price,
            subgroup: subgroup_value[i],
        }
    )   
}    





    //search
let header_search_result = document.querySelector('.header__search-result')
function search_by_value(value) {
    let header_search_no_card = document.querySelector('.header__search-no-card')
    let hidden_header_card_counter = 0
    if (value.length > 1) {
        header_search_result.classList.remove('header__search-result_alternative')
        body.style.overflow = 'hidden'
        for (let i = 0; i < header_cards.length; i++) {
            if (header_cards_title[i].innerHTML.toLowerCase().includes(value.toLowerCase())) {
                header_cards[i].classList.remove('remove')
            } 
            else {
                header_cards[i].classList.add('remove')
            }  
        }
        header_cards.forEach(header_card => {
            if (header_card.classList.contains('remove')) {
                hidden_header_card_counter++
            }
        })
        if (hidden_header_card_counter === header_cards.length) {
            header_search_no_card.classList.remove('remove')
        }
        else {
            header_search_no_card.classList.add('remove')
        }
    }
    if (value.length <= 1) {
        header_search_result.classList.add('header__search-result_alternative')
        header_cards.forEach(header_card => {
            header_card.classList.add('remove')            
        })
        body.style.overflow = 'auto'
    }
}

header__search.oninput = function() {
    header__search_buttons_empty.classList.add('header__search-buttons-empty_alt')
    if (header__search_value_do_empty()) header__search_buttons_empty_alt_remove()
    header__search.value = this.value.trim()
    search_by_value(header__search.value)
}

let is_entry = [...document.querySelectorAll('[data-is-entry]')]
let profile = document.querySelector('.header__profile')  
if (is_entry) {
    for (let i = 0; i < is_entry.length; i++) {
        if (i === 0) {
            is_entry[i].onclick = () => {
                sticks_animation()
                profile.classList.remove('remove')
                document.addEventListener('keydown', e => {
                    if(e.key === "Escape") {
                        profile.classList.add('remove')
                    }
                })
            }
        }
        else {
            is_entry[i].onclick = () => {
                profile.classList.remove('remove')
                document.addEventListener('keydown', e => {
                    if(e.key === "Escape") {
                        profile.classList.add('remove')
                    }
                })
            }
        }
        
    }
    window.addEventListener('click', e => {
        const target = e.target
        if (!target.closest('.header__profile') && !target.closest('.header__favorite-products-link') && !target.closest('.entry')) {
            profile.classList.add('remove')
        }
    })
}

    //бургер
let sidebar = document.querySelector('.sidebar')
function sticks_animation() {
    let sticks = [...document.querySelectorAll('.berger__stick')]
    sticks.forEach(stick => {
        if (stick.classList.contains('open')) {
            stick.classList.add('close')
            stick.classList.remove('open')
        }
        else {
            stick.classList.remove('close')
            stick.classList.add('open')
        }
    })
    sidebar.classList.toggle('sidebar_alternative')
    body.style.overflow = 'hidden'
}
if (window.location.href == 'http://localhost/spectr-nn/pages/favorite_products.php') {
    document.querySelector('.header__right').style.marginRight = '30px'
    profile.style.marginRight = '-10px'
}
document.querySelector('.berger').onclick = () => {
    sticks_animation()
    window.addEventListener('click', e => {
        const target = e.target
        if (!target.closest('.sidebar_alternative') && !target.closest('.berger') && sidebar.classList.contains('sidebar_alternative')) {
            sticks_animation()
            body.style.overflow = 'visible'
        }
    })
    document.addEventListener('keydown', e => {
        if(e.key === "Escape" && sidebar.classList.contains('sidebar_alternative')) {
            sticks_animation()
            body.style.overflow = 'visible'
        }
    })
}

 