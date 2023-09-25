let categories = document.querySelectorAll('.main-catalog__category-name')
let category_name = document.querySelectorAll('.main-catalog__category-name-value')
let vertical = document.querySelectorAll('.main-catalog__category-name-plus-vertical')
let subgroups = document.querySelectorAll('.main-catalog__category-subgroups')
let subgroup_li = document.querySelectorAll('.subgroup-li')
let subgroup_checkbox = document.querySelectorAll('.subgroup-checkbox')
let choisen_subgroups = []
let get_category = document.querySelector('.get-category')


function category_active(i) {
    vertical[i].classList.toggle('main-catalog__category-name-plus-vertical_alternative')      
    subgroups[i].classList.toggle('main-catalog__category-subgroups_alternative') 
    category_name[i].classList.toggle('main-catalog__category-name-value_alternative')
}

for (let i = 0; i < categories.length; i++) {
    if (category_name[i].innerHTML === get_category.innerHTML) {
        category_active(i)
    }
    categories[i].onclick = () => {
        category_active(i)
    }
}

function subgroup_() {
    if (choisen_subgroups.length != 0) {
        for (let i = 0; i < cards.length; i++) {
            if (choisen_subgroups.indexOf(cards[i].getAttribute('data-subgroup')) === -1) {
                cards[i].classList.add('remove')
            }
            else {
                cards[i].classList.remove('remove')
            }
        }
    }
    else {
        for (let i = 0; i < cards.length; i++) cards[i].classList.remove('remove')
    }
}

function sort_by_category() {
    for (let z = 0; z < subgroup_checkbox.length; z++) {
        if (subgroup_checkbox[z].checked === true) {
            if (choisen_subgroups.indexOf(subgroup_li[z].getAttribute('li-data-subgroup')) === -1) {
                choisen_subgroups.push(subgroup_li[z].getAttribute('li-data-subgroup'))
            }
        } 
        else {
            if (choisen_subgroups.indexOf(subgroup_li[z].getAttribute('li-data-subgroup')) != -1) {
                choisen_subgroups.splice(choisen_subgroups.indexOf(subgroup_li[z].getAttribute('li-data-subgroup')))
            }
        }     
    }
    subgroup_()
}

for (let i = 0; i < subgroup_li.length; i++) {
    if (subgroup_li[i].getAttribute('data-category') === get_category.innerHTML) {
        subgroup_checkbox[i].checked = true
        sort_by_category()
    }
    subgroup_li[i].onclick = () => {
        if (subgroup_checkbox[i].checked === true) subgroup_checkbox[i].checked = false //переключение чекбоксов по клику на li
        else subgroup_checkbox[i].checked = true
        sort_by_category()
        if (discont_filter_input.checked === true) discont_active()
    }
}


