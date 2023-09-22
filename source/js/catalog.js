let categories = document.querySelectorAll('.main-catalog__category-name')
let vertical = document.querySelectorAll('.main-catalog__category-name-plus-vertical')
let subgroups = document.querySelectorAll('.main-catalog__category-subgroups')
let subgroup_li = document.querySelectorAll('.subgroup-li')
let subgroup_checkbox = document.querySelectorAll('.subgroup-checkbox')
let choisen_subgroups = []

for (let i = 0; i < categories.length; i++) {
    categories[i].onclick = () => {
        vertical[i].classList.toggle('main-catalog__category-name-plus-vertical_alternative')      
        subgroups[i].classList.toggle('main-catalog__category-subgroups_alternative') 
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

for (let i = 0; i < subgroup_li.length; i++) {
    subgroup_li[i].onclick = () => {
        if (subgroup_checkbox[i].checked === true) subgroup_checkbox[i].checked = false
        else subgroup_checkbox[i].checked = true
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
        if (discont_filter_input.checked === true) discont_active()
    }
}

