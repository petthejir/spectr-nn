let categories = [...document.querySelectorAll('.main-catalog__category')]
for (let i = 0; i < categories.length; i++) {
    let vertical = [...document.querySelectorAll('.main-catalog__category-plus-vertical')]
    categories[i].onclick = () => {
        vertical[i].classList.toggle('main-catalog__category-plus-vertical_alternative')          
    }    
}