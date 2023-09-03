
    //manufacture switch active
const manufacture = document.querySelectorAll('.manufacture__kind')
const description = document.querySelectorAll('.manufacture__description')
const manufacture_img = document.querySelectorAll('.manufacture__img')
manufacture.forEach(function(element, index) {
    element.onclick = function() {
        for (let i = 0; i < 3; i++) {
            manufacture[i].classList.remove('manufacture__kind_active')
            description[i].style.display = 'none'
            manufacture_img[i].style.display = 'none'
        }
        element.classList.add('manufacture__kind_active')
        description[index].style.display = 'block'
        manufacture_img[index].style.display = 'block'
    }  
})
manufacture[0].classList.add('manufacture__kind_active')
description[0].style.display = 'block'
manufacture_img[0].style.display = 'block'
    
    //main-slider
let slider_offset = 0 // позиция слайдера относительно левого края
const main_slider = document.querySelector('.auto-slider')
const slider = document.querySelector('.auto-slider__lane') // полоса слайдера
const circles = document.querySelectorAll('.auto-slider__circle') // массив кругов
const circle_active = document.querySelector('.auto-slider__circle_active') // изменение цвета круга
const slider_line_active = document.querySelector('.auto-slider__line-active')

    //вычисляет на сколько px сдвинут слайдер влево
function slider_block()  {
    return document.querySelector('.auto-slider__block').offsetWidth 
}

    //преобразует результат выполнения функции slider_block() в элемент массива circle
function switch_circle() {
    for (let i = 0; i <= circles.length; i++) {
        switch(slider_offset) {
            case i * slider_block(): return circles[i]
        }
    }
}

    //удаляетя закрашивание у всех кружков, добавляет стиль к нажатому 
function remove_active() {
    circles.forEach(element => {
        element.classList.remove('auto-slider__circle_active')  
    })
    switch_circle().classList.add('auto-slider__circle_active')
}

    //на сколько px должен сдвинуться slider влево
function move_slider() {
    slider.style.left = -slider_offset + 'px'
}

    //при клике на кружки закрашивает нужные и сдвигает slider влево на нужное расстояние
for (let i = 0; i < circles.length; i++) {
    circles[i].onclick = function() {
        clearTimeout(timeout)
        slider_line_active_0()
        slider_offset = i*slider_block()
        move_slider()
        remove_active()
        slider_underline()
    }
}

    //при клике на правую стрелочку сдвигает slider на 1 блок вправо
let slider_right = function() {
    return document.querySelector('.auto-slider__right-button').onclick = function() {
        clearTimeout(timeout)
        slider_line_active_0()
        slider_offset += slider_block()
        if (slider_offset > 4*slider_block()) { //проверка (если slider сдвинут на величину равную 4 блокам, возвращает slider в исходное положение)
            slider_offset = 0
        }
        move_slider()
        remove_active()
        slider_underline()
    }
}


function slider_line_active_0() {
    slider_line_active.classList.remove('auto-slider__line-active-full')
}

    //при клике на лувую стрелочку сдвигает slider на 1 блок влево
document.querySelector('.auto-slider__left-button').onclick = function() {
    clearTimeout(timeout)
    slider_line_active_0()
    slider_offset -= slider_block()
    if (slider_offset < 0) { //проверка (если slider находится в начальном положении, переключает на последний слайд)
        slider_offset = 4*slider_block()
    }
    move_slider()
    remove_active()
    slider_underline()
}

    //закращивание линии под slider + переход на следующий слайд, через 5 секунд
function slider_underline() {
    slider_line_active.classList.add('auto-slider__line-active-full')
    timeout = setTimeout(slider_right(), 5000)
}

    //если slider полностью попал в поле зрения -> закрашивать линию slider
const options = {
    threshold: 1,
    rootMargin: '-10px 0px 0px 0px'
}

const callback = function(entries) {
    entries.forEach(element => {
        const {isIntersecting} = element
        if (isIntersecting && (header_search_closer.classList.contains('header-search-closer')===false)) {
            slider_underline()
        }
        else {
            clearTimeout(timeout)
            slider_line_active_0()
        }
    })
}
const obs = new IntersectionObserver(callback, options)
obs.observe(main_slider)


    //slider brands
const brands_left = document.querySelector('.brands__left')
const brands_right = document.querySelector('.brands__right')
const brands_slider_lane = document.querySelector('.brands__slider-lane')
let brands_offset = 0
brands_right.onclick = () => {
    if (brands_offset>=7) return
    brands_offset++    
    brands_slider_lane.style.left = -brands_offset*250 + 'px'
}
brands_left.onclick = () => {
    if (brands_offset<=0) return
    brands_offset--  
    brands_slider_lane.style.left = -brands_offset*250 + 'px'
}

    //slider cards
let cards__sliders = document.querySelectorAll('.cards__slider')
for (let i = 0; i < cards__sliders.length; i++) {
    let cards__offset = 0
    let cards__right = document.querySelectorAll('.cards__right')
    let cards__lane = document.querySelectorAll('.cards__lane')
    let cards__left = document.querySelectorAll('.cards__left')
    let card = document.querySelectorAll('.cards__lane')[i].querySelectorAll('.card')
    cards__right[i].onclick = () => { 
        if (cards__offset-cards__lane[i].offsetWidth<-card.length*250) return
        cards__offset -= cards__lane[i].offsetWidth
        cards__lane[i].style.left = cards__offset - 10 + 'px' 
    }
    cards__left[i].onclick = () => {
        if (cards__offset>=0) return
        cards__offset += cards__lane[i].offsetWidth
        cards__lane[i].style.left = cards__offset - 10 + 'px' 
    }
}

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


