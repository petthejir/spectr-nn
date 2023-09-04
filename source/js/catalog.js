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
    let sort_li = [...document.querySelectorAll('.sort-choice')]
    sort_choice.classList.toggle('main-catalog__sort-choice_alternative')
    document.addEventListener('keydown', e => {
        if(e.key === 'Escape') sort_choice.classList.remove('main-catalog__sort-choice_alternative')       
    })
    sort_li.forEach(li => {
        if (sort_value.getAttribute('data-sort-active') === li.getAttribute('data-sort')) li.style.display = 'none'
        else li.style.display = 'block'
        li.onclick = () => {
            sort_value.setAttribute('data-sort-active', li.getAttribute('data-sort'))
            sort_value.innerHTML = li.innerHTML
            sort_function(`${sort_value.getAttribute('data-sort-active')}`)
            sort_choice.classList.remove('main-catalog__sort-choice_alternative')
        }
    })
    document.addEventListener('click', e => {
        let on_sort_choice = e.composedPath().includes(sort);
        if (!on_sort_choice) sort_choice.classList.remove('main-catalog__sort-choice_alternative')
    })
}
 
let discont_filter = document.querySelector('.discont-filter')
discont_filter.onclick = () => {
    function card_toggle_remove() {
        for (let i = 0; i < cards.length; i++) {
            if (card_discount_value[i].innerHTML === '') cards[i].classList.toggle('remove')
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