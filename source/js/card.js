let to_rate = document.querySelector('.main-card__rating-new')
to_rate.onclick = function() {
    let rating_closer = document.querySelector('.choise-rating__closer')
    let choise_rating = document.querySelector('.choise-rating')
    function show_or_unshow_choise_rating() {
        choise_rating.classList.toggle('choise-rating_alternative')
    }
    show_or_unshow_choise_rating()
    let star_block = document.querySelector('.choise-rating__stars')
    let stars = [...document.querySelectorAll('.choise-rating__stars-li')]
    stars.forEach(star => {
        star.onclick = () => {
            star_block.setAttribute('data-total-value', star.getAttribute('data-item-value'))
            this.innerHTML = `<h2>${star_block.getAttribute('data-total-value')} - моя оценка</h2>`
            setTimeout(() => {
                show_or_unshow_choise_rating()
            }, 300)
        }
    })
    rating_closer.onclick = () => {
        show_or_unshow_choise_rating()
    }
    document.addEventListener('keydown', e => {
        if(e.key === 'Escape' && choise_rating.classList.contains('choise-rating_alternative') === false) {
            show_or_unshow_choise_rating()
        }
    })
}
