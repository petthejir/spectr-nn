const header__search = document.querySelector('.header__search')
const header__list = document.querySelector('.header__list')
const header_search_closer = document.querySelector('#header-search-closer')
const header__search_buttons_empty = document.querySelector('.header__search-buttons-empty')
const header__search_value_del = document.querySelector('.header__search-value-del')
const header__search_search_button = document.querySelector('.header__search-search-button')

function header__search_value_do_empty() {
    return header__search.value == ''
}

function header__search_buttons_remove() {
    header__search_search_button.classList.remove('header__search-search-button_alt')
}

function header__search_buttons_empty_alt_remove() {
    header__search_buttons_empty.classList.remove('header__search-buttons-empty_alt')
}

function header__search_value_remove() {
    header__search.value = ''
}

function header_search_closer_full_size_remove() {
    header__search.blur()
    header_search_closer.classList.remove('header-search-closer_alt')
    header__search.classList.remove('header__search_alt')
    header__list.classList.remove('header__list_alt')
    header_search_closer.classList.remove('header-search-closer')
}

header__search.onclick = () => { 
    header__search.classList.add('header__search_alt')
    header__list.classList.add('header__list_alt')
    header_search_closer.classList.add('header-search-closer')
    header_search_closer.classList.add('header-search-closer_alt')
    header__search_search_button.classList.add('header__search-search-button_alt')
    clearTimeout(timeout)
    slider_line_active_0()
}

header__search_search_button.onclick = () => {
    header__search_search_button.classList.remove('header__search-search-button_alt-2')
    setInterval(() => {
        if (header__search_value_do_empty()) {
            header__search_search_button.classList.add('header__search-search-button_alt-2') 
        }
    }, 0)
}

header__search.oninput = () => {
    header__search_buttons_empty.classList.add('header__search-buttons-empty_alt')
    if (header__search_value_do_empty()) header__search_buttons_empty_alt_remove()
}

header__search_value_del.onclick = () => {
    header__search_value_remove()
    header__search_buttons_empty_alt_remove()
    header__search.focus()
} 

header_search_closer.onclick = () => {
    header__search_buttons_remove()
    header_search_closer_full_size_remove()
    header__search_value_remove()
    header__search_buttons_empty_alt_remove()
    slider_underline()
}

document.addEventListener('keydown', e => {
    if(e.key === "Escape" && header__search.classList.contains('header__search_alt')) {
        header__search_value_remove()
        header_search_closer_full_size_remove()
        header__search_buttons_remove()
        header__search_buttons_empty_alt_remove()
        slider_underline()
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
    rootMargin: `0px 0px 200px 0px`
}

const callback_func = function(entries) {
    entries.forEach(element => {
        const {isIntersecting} = element
        if (isIntersecting) {
            Object.assign(header.style, {
                position: 'fixed',
                transform: 'translateY(-100px)',
                transition: '300ms ease-in',
            })
        }
        else {
            Object.assign(header.style, {
                transform: 'translateY(0px)',
                position: 'sticky',
            })
        }
    })
}
const observ = new IntersectionObserver(callback_func, option)
observ.observe(footer)

    //card
let card_like = [...document.querySelectorAll('.card__like')]
card_like.forEach(like => like.onclick = () => like.classList.toggle('card__like_alternative'))
    
let cards = [...document.querySelectorAll('.card')] // все карты
let rating = document.querySelectorAll('.card__rating-value') 
let sort_value = document.querySelector('.main-catalog__sort-value')
let card_discount_value = document.querySelectorAll('.card__discount-value') // value скидки
let cards_array = []

for (let i = 0; i < cards.length; i++) {
    let price_new = [...document.querySelectorAll('.card__price-new')] // инициализация блока новой цены
    let price_old = [...document.querySelectorAll('.card__price-old')] // инициализация блока старой цены
    let price_old_value = price_old.map(price => price.getAttribute('data-old-price'))// value price old
    let card_discount = document.querySelectorAll('.card__discount') // инициализация скидки
    let price_new_value = price_new.map(price => price.getAttribute('data-new-price')) // value price new
    if (price_new_value[i] != '') {
        price_old[i].classList.add('card__price-old_alternative') // применение классов к old
        price_old[i].innerHTML = `<strike>${price_old[i].innerHTML}</strike>` // зачёркивание old
        card_discount_value[i].innerHTML = -Math.round((price_old_value[i]-price_new_value[i])/price_old_value[i] * 100) // рассчёт скидки
        card_discount[i].style.display = 'block' // отображение скидки
    }
    else price_new[i].innerHTML = ''
    
    let current_price
    let discount
    if (price_new_value[i] != '') current_price = price_new_value[i] 
    else current_price = price_old_value[i]
    if (card_discount_value[i].innerHTML != '') discount = card_discount_value[i].innerHTML
    else discount = 0
    cards_array.push(
        {
            card_index: i,
            current_price: current_price,
            discount: discount,
            rating: -rating[i].innerHTML,
            _current_price: -current_price,
        }
    )
}


function sort_function(sort) {
    let cards_array_sorted = []
    let cards_node = document.querySelector('.main-catalog__cards')
    cards_array.sort((a, b) => a[sort] - b[sort])
    cards_array.forEach(element => cards_array_sorted.push(element.card_index))
    for (let i = 0; i < cards_array_sorted.length; i++) {
        for (let z = 0; z < cards.length; z++){
            if (z === cards_array_sorted[i]) cards.push(cards[z])
        }
    }
    let new_cards = cards.slice(cards_array_sorted.length, cards.length)
    new_cards.forEach(new_card => cards_node.appendChild(new_card))
    
}
sort_function(`${sort_value.getAttribute('data-sort-active')}`)


