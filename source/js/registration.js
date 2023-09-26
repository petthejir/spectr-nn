let registration_eye = document.querySelectorAll('.registration__eye')
for (let i = 0; i < registration_eye.length; i++) {
    let registration_password = document.querySelectorAll('[type="password"]')
    registration_eye[i].onclick = () => {
        registration_eye[i].classList.toggle('registration__eye_alternative')
        if (registration_password[i].getAttribute('type') === 'password') registration_password[i].setAttribute('type', 'text')
        else registration_password[i].setAttribute('type', 'password')
    }
}
let registration_message = document.querySelector('.registration-message') 
if (registration_message.innerHTML === '') {
    registration_message.style.display = 'none'
}
else {
    registration_message.style.display = 'block'
}

    //ripple-buttons
let buttons = document.querySelectorAll('[data-ripple]')
buttons.forEach(button => {
    button.onmousedown = function(event) {
        let coordinate = this.getBoundingClientRect()
        const ripple = document.createElement('span')
        const x = event.pageX - coordinate.left - 10
        const y = event.pageY - coordinate.top - 10
        ripple.className = 'ripple'
        ripple.style.left = x + 'px'
        ripple.style.top = y + 'px'
        this.appendChild(ripple)
        setTimeout(() => {
            ripple.parentNode.removeChild(ripple)
        }, 350)
    }  
})