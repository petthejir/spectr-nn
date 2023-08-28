let categories = [...document.querySelectorAll('.main-catalog__category')]
for (let i = 0; i < categories.length; i++) {
    let vertical = [...document.querySelectorAll('.main-catalog__category-plus-vertical')]
    let products = [...document.querySelectorAll('.main-catalog__category-products')]
    categories[i].onclick = () => {
        vertical[i].classList.toggle('main-catalog__category-plus-vertical_alternative')      
        products[i].classList.toggle('main-catalog__category-products_alternative') 
    }    
}

let card__like = document.querySelector('.card__like')
card__like.onclick = () => card__like.classList.toggle('card__like_alternative')

let price_old = document.querySelector('.card__price-old')
let price_new = document.querySelector('.card__price-new')


if (price_new.innerHTML != '') {
    let card__discount = document.querySelector('.card__discount')
    let price_old_value = (price_old.innerHTML + 1).toString(price_old).slice(0, price_old.innerHTML.toString(price_old).indexOf(','))
    let price_new_value = (price_new.innerHTML + 1).toString(price_new).slice(0, price_new.innerHTML.toString(price_old).indexOf(','))
    card__discount.innerHTML =`-${Math.round((price_old_value-price_new_value)/price_old_value * 100)}%`
    card__discount.style.display = 'block'
    price_old.classList.add('card__price-old_alternative')
    price_old.innerHTML = `<strike>${price_old.innerHTML}</strike>`
}
else price_old.classList.remove('card__price-old_alternative')

