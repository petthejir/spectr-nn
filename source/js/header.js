const header__search = document.querySelector('.header__search')
const header__list = document.querySelector('.header__list')
const header_search_closer = document.querySelector('#header-search-closer')
const header__search_buttons_empty = document.querySelector('.header__search-buttons-empty')
const header__search_value_del = document.querySelector('.header__search-value-del')
const header__search_search_button = document.querySelector('.header__search-search-button')
let body = document.querySelector('.body')

function header__search_value_do_empty() {
    return header__search.value === ''
}

function header__search_value_remove() {
    header__search.value = ''
    search_by_value(header__search.value)
}

function header__search_buttons_remove() {
    header__search_search_button.classList.remove('header__search-search-button_alt')
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
    header__search.classList.add('header__search_alt')
    header__list.classList.add('header__list_alt')
    header_search_closer.classList.add('header-search-closer')
    header_search_closer.classList.add('header-search-closer_alt')
    header__search_search_button.classList.add('header__search-search-button_alt')
    if (document.querySelector('.auto-slider') != null) {
        clearTimeout(timeout)
        slider_line_active_0()
    }
}

header__search_search_button.onclick = () => {
    header__search_search_button.classList.remove('header__search-search-button_alt-2')
    setInterval(() => {
        if (header__search_value_do_empty()) {
            header__search_search_button.classList.add('header__search-search-button_alt-2') 
        }
    }, 0)
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
let card_like = [...document.querySelectorAll('[data-like]')]
card_like.forEach(like => like.onclick = () => like.classList.toggle('card__like_alternative'))
    
let cards = [...document.querySelectorAll('[main-card]')] // main карты
let rating = document.querySelectorAll('.card__rating-value') 
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

for (let i = 0; i < header_cards.length; i++) {
    if (header_price_new_value[i] != '') {
        header_price_old[i].classList.add('card__price-old_alternative') // применение классов к old
        header_price_old[i].innerHTML = `<strike>${header_price_old[i].innerHTML}</strike>` // зачёркивание old
        header_card_discount_value[i].innerHTML = -Math.round((header_price_old_value[i]-header_price_new_value[i])/header_price_old_value[i] * 100) // рассчёт скидки
        header_card_discount[i].style.display = 'block' // отображение скидки
    }
    else header_price_new[i].innerHTML = ''
}


for (let i = 0; i < cards.length; i++) {
    if (price_new_value[i] != '') {
        price_old[i].classList.add('card__price-old_alternative') // применение классов к old
        price_old[i].innerHTML = `<strike>${price_old[i].innerHTML}</strike>` // зачёркивание old
        card_discount_value[i].innerHTML = -Math.round((price_old_value[i]-price_new_value[i])/price_old_value[i] * 100) // рассчёт скидки
        card_discount[i].style.display = 'block' // отображение скидки
    }
    else price_new[i].innerHTML = ''

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

    //cards sort
function sort_function(sort) {
    let cards_node = document.querySelector('#cards')
    cards_array.sort((a, b) => a[sort] - b[sort])
    let cards_array_sorted = cards_array.map(card => card.index) //отсортированный массив индексов
    for (let i = 0; i < cards_array_sorted.length; i++) {
        for (let z = 0; z < cards.length; z++){
            if (z === cards_array_sorted[i]) cards.push(cards[z])
        }
    }
    let new_cards = cards.slice(cards_array_sorted.length, cards.length)
    new_cards.forEach(new_card => cards_node.appendChild(new_card))
}
sort_function(sort_value.getAttribute('data-sort-active'))


    //отображение блока выбора сортировки
let sort = document.querySelector('.filters__sort-block')
sort.onclick = () => {
    let sort_choice = document.querySelector('.filters__sort-choice')
    let sort_li = [...document.querySelectorAll('.sort-choice')]
    sort_choice.classList.toggle('filters__sort-choice_alternative')
    document.addEventListener('keydown', e => {
        if(e.key === 'Escape') sort_choice.classList.remove('filters__sort-choice_alternative')       
    })
    sort_li.forEach(li => {
        if (sort_value.getAttribute('data-sort-active') === li.getAttribute('data-sort')) li.style.display = 'none'
        else li.style.display = 'block'
        li.onclick = () => {
            sort_value.setAttribute('data-sort-active', li.getAttribute('data-sort'))
            sort_value.innerHTML = li.innerHTML
            sort_function(`${sort_value.getAttribute('data-sort-active')}`)
            sort_choice.classList.remove('filters__sort-choice_alternative')
        }
    })
    document.addEventListener('click', e => {
        let on_sort_choice = e.composedPath().includes(sort);
        if (!on_sort_choice) sort_choice.classList.remove('filters__sort-choice_alternative')
    })
}

    //скрыть/показать карту discont.value != ''
let discont_filter = document.querySelector('.discont-filter')
discont_filter.onclick = () => {
    let discont_filter_input = document.querySelector('.discont-filter__input')
    if (discont_filter_input.checked === true) discont_filter_input.checked = false
        else discont_filter_input.checked = true
    if (discont_filter_input.checked === true) {
        for (let i = 0; i < cards.length; i++) {
            if (card_discount_value[i].innerHTML === '') {
                cards[i].classList.add('remove')
            }
        }
    }
    else {
        for (let i = 0; i < cards.length; i++) {
            if (card_discount_value[i].innerHTML === '') {
                cards[i].classList.remove('remove')
            }
        }
        subgroup_()
    }
}

    //search
let header_search_result = document.querySelector('.header__search-result')
function search_by_value(value) {
    let header_search_no_card = document.querySelector('.header__search-no-card')
    let hidden_header_card_counter = 0
    if (value.length > 1) {
        header_search_result.classList.remove('header__search-result_alternative')
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
    }
}

header__search.oninput = function() {
    header__search_buttons_empty.classList.add('header__search-buttons-empty_alt')
    if (header__search_value_do_empty()) header__search_buttons_empty_alt_remove()
    header__search.value = this.value.trim()
    search_by_value(header__search.value)
}

    //profile
let cabinet = document.querySelector('.header__favorite-products-link')
let registration = document.querySelector('.registration')

cabinet.onclick = () => {
    let registration_closer = document.querySelector('.registration__closer')
    let registration_close_button = document.querySelector('.registration__close-button')
    registration.classList.remove('display-none')
    body.style.overflow = 'hidden'
    let registration_to_close = () => {
        body.style.overflow = 'visible'
        registration.classList.add('display-none')
    }
    registration_close_button.onclick = () => {
        registration_to_close()
    }
    registration_closer.onclick = () => {
        registration_to_close()
    }
    document.addEventListener('keydown', e => {
        if(e.key === "Escape") {
            registration_to_close()
        }
    })
/*     return false */
}

    //registration 
let registration_swap = document.querySelector('.registration__swap')
registration_swap.onclick = () => {
let entry_form = document.querySelector('.entry__form')
let registration_form = document.querySelector('.registration__form')
let registration_title = document.querySelector('.registration__title')
let registration_question = document.querySelector('.registration__question')
entry_form.classList.toggle('display-none')
registration_form.classList.toggle('display-none')
if (entry_form.classList.contains('display-none')) {
    registration_title.innerHTML = 'Вход'
    registration_question.innerHTML = 'Ещё нет аккаунта?'
    registration_swap.innerHTML = 'Зарегистрироваться'
}
else {
    registration_title.innerHTML = 'Регистрация'
    registration_question.innerHTML = 'Есть аккаунт?'
    registration_swap.innerHTML = 'Авторизоваться'
}
}

let registration_eye = document.querySelectorAll('.registration__eye')
for (let i = 0; i < registration_eye.length; i++) {
    let registration_password = document.querySelectorAll('[type="password"]')
    registration_eye[i].onclick = () => {
        registration_eye[i].classList.toggle('registration__eye_alternative')
        if (registration_password[i].getAttribute('type') === 'password') registration_password[i].setAttribute('type', 'text')
        else registration_password[i].setAttribute('type', 'password')
    }
}

