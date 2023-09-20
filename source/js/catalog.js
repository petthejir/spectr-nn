let categories = document.querySelectorAll('.main-catalog__category-name')
let vertical = document.querySelectorAll('.main-catalog__category-name-plus-vertical')
let subgroups = document.querySelectorAll('.main-catalog__category-subgroups')
let subgroup_li = document.querySelectorAll('.subgroup-li')
let subgroup_checkbox = document.querySelectorAll('.subgroup-checkbox')

for (let i = 0; i < categories.length; i++) {
    categories[i].onclick = () => {
        vertical[i].classList.toggle('main-catalog__category-name-plus-vertical_alternative')      
        subgroups[i].classList.toggle('main-catalog__category-subgroups_alternative') 
    }
}

for (let i = 0; i < subgroup_li.length; i++) {
    subgroup_li[i].onclick = () => {
        if (subgroup_checkbox[i].checked === true) subgroup_checkbox[i].checked = false
        else subgroup_checkbox[i].checked = true
    }
}