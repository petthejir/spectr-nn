let categories = document.querySelectorAll('.main-catalog__category')
let vertical = document.querySelectorAll('.main-catalog__category-plus-vertical')
let products = document.querySelectorAll('.main-catalog__category-products')
for (let i = 0; i < categories.length; i++) {
    categories[i].onclick = () => {
        vertical[i].classList.toggle('main-catalog__category-plus-vertical_alternative')      
        products[i].classList.toggle('main-catalog__category-products_alternative') 
    }    
}

