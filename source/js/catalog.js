let categories = document.querySelectorAll('.main-catalog__category')
for (let i = 0; i < categories.length; i++) {
    let vertical = document.querySelectorAll('.main-catalog__category-plus-vertical')
    let products = document.querySelectorAll('.main-catalog__category-products')
    categories[i].onclick = () => {
        vertical[i].classList.toggle('main-catalog__category-plus-vertical_alternative')      
        products[i].classList.toggle('main-catalog__category-products_alternative') 
    }    
}

let sort = document.querySelector('.main-catalog__sort-block')
sort.onclick = () => {
    let sort_choice = document.querySelector('.main-catalog__sort-choice')
    let choice = [...document.querySelectorAll('.sort-choice')]
    let sort_value = document.querySelector('.main-catalog__sort-value')
    sort_choice.classList.toggle('main-catalog__sort-choice_alternative')
    document.addEventListener('keydown', e => {
        if(e.key === 'Escape') sort_choice.classList.remove('main-catalog__sort-choice_alternative')       
    })
    choice.forEach(choicen => {
        choicen.onclick = () => {
            sort_value.innerHTML = choicen.innerHTML
            sort_choice.classList.remove('main-catalog__sort-choice_alternative')
        }
    })
    document.addEventListener('click', e => {
        let on = e.composedPath().includes(sort);
        if (!on) sort_choice.classList.remove('main-catalog__sort-choice_alternative')
    })

}
 
let discont_filter = document.querySelector('.discont-filter')
discont_filter.onclick = () => {
    function card_toggle_remove() {
        for (let i = 0; i < cards.length; i++) {
            if (price_new_value[i] === '') {
                cards[i].classList.toggle('remove')
            }
        }
    }

    let discont_filter_input = document.querySelector('.discont-filter__input')
    if (discont_filter_input.checked === true) {
        discont_filter_input.checked = false
    }
    else discont_filter_input.checked = true
    if (discont_filter_input.checked === true) card_toggle_remove()
    else card_toggle_remove()
}



