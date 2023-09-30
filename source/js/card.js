let to_rate = document.querySelector('.main-card__rating-new')
to_rate.onclick = function() {
    let rating_closer = document.querySelector('.choise-rating__closer')
    let choise_rating = document.querySelector('.choise-rating')
    function show_or_unshow_choise_rating() {
        choise_rating.classList.toggle('choise-rating_alternative')
    }
    body.style.overflow = 'hidden'
    show_or_unshow_choise_rating()
    let star_block = document.querySelector('.choise-rating__stars')
    let stars = [...document.querySelectorAll('.choise-rating__stars-li')]
    stars.forEach(star => {
        star.onclick = () => {
            star_block.setAttribute('data-total-value', star.getAttribute('data-item-value'))
            body.style.overflow = 'auto'
            setTimeout(() => {
                show_or_unshow_choise_rating()
            }, 300)
        }
    })
    rating_closer.onclick = () => {
        body.style.overflow = 'auto'
        show_or_unshow_choise_rating()
    }
    document.addEventListener('keydown', e => {
        if(e.key === 'Escape' && choise_rating.classList.contains('choise-rating_alternative') === false) {
            show_or_unshow_choise_rating()
            body.style.overflow = 'auto'
        }
    })
}

let card_old_price = document.querySelector('[data-card-old-price]')
let card_new_price = document.querySelector('[data-card-new-price]')
let card_new_price_value = card_new_price.getAttribute('data-card-new-price') 
let card_old_price_value = card_old_price.getAttribute('data-card-old-price') 
let main_card_rating = document.querySelector('.main-card__rating-block')
let main_card_rating_value = document.querySelector('.main-card__rating-value')

if (main_card_rating_value.innerHTML === '') {
    main_card_rating.innerHTML = 'Нет оценок'
}
if (card_new_price_value != '') {
    card_old_price.classList.add('card__price-old_alternative') // применение классов к old
    card_old_price.style.fontSize = '20px'
    card_old_price.innerHTML = `<strike>${card_old_price.innerHTML}</strike>` // зачёркивание old
}
else card_new_price.innerHTML = ''