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
