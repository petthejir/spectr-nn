        //cards sort
    function sort_function(sort) {
        let cards_node = document.querySelector('#cards')
        cards_array.sort((a, b) => a[sort] - b[sort])
        let cards_array_sorted = cards_array.map(card => card.index) //отсортированный массив индексов
        for (let i = 0; i < cards_array_sorted.length; i++) {
            for (let z = 0; z < cards.length; z++){
                if (z === cards_array_sorted[i]) cards.push(cards[z])
            }
        }
        let new_cards = cards.slice(cards_array_sorted.length, cards.length)
        new_cards.forEach(new_card => cards_node.appendChild(new_card))
    }
    sort_function(sort_value.getAttribute('data-sort-active'))
    
    
        //отображение блока выбора сортировки
    let sort = document.querySelector('.filters__sort-block')
    sort.onclick = () => {
        let sort_choice = document.querySelector('.filters__sort-choice')
        let sort_li = [...document.querySelectorAll('.sort-choice')]
        sort_choice.classList.toggle('filters__sort-choice_alternative')
        document.addEventListener('keydown', e => {
            if(e.key === 'Escape') sort_choice.classList.remove('filters__sort-choice_alternative')       
        })
        sort_li.forEach(li => {
            if (sort_value.getAttribute('data-sort-active') === li.getAttribute('data-sort')) li.style.display = 'none'
            else li.style.display = 'block'
            li.onclick = () => {
                sort_value.setAttribute('data-sort-active', li.getAttribute('data-sort'))
                sort_value.innerHTML = li.innerHTML
                sort_function(`${sort_value.getAttribute('data-sort-active')}`)
                sort_choice.classList.remove('filters__sort-choice_alternative')
            }
        })
        document.addEventListener('click', e => {
            let on_sort_choice = e.composedPath().includes(sort);
            if (!on_sort_choice) sort_choice.classList.remove('filters__sort-choice_alternative')
        })
    }
    
        //скрыть/показать карту discont.value != ''
    let discont_filter = document.querySelector('.discont-filter')
    let discont_filter_input = document.querySelector('.discont-filter__input')
    function discont_active() {
        if (discont_filter_input.checked === true) {
            for (let i = 0; i < cards.length; i++) {
                if (card_discount_value[i].innerHTML === '') {
                    cards[i].classList.add('remove')
                }
            }
        }
        else {
            for (let i = 0; i < cards.length; i++) {
                if (card_discount_value[i].innerHTML === '') {
                    cards[i].classList.remove('remove')
                }
                subgroup_()
            }
        }
    }
    discont_filter.onclick = () => {
        if (discont_filter_input.checked === true) discont_filter_input.checked = false
        else discont_filter_input.checked = true
        discont_active()
    }
    