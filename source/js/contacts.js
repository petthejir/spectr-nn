    //Маска для номера телефона
let phoneInputs = document.querySelectorAll('input[type="tel"]');
let getInputNumbersValue = function (input) {
    return input.value.replace(/\D/g, '');
}
onPhonePaste = function (e) {
    let input = e.target,
        inputNumbersValue = getInputNumbersValue(input);
    let pasted = e.clipboardData || window.clipboardData;
    if (pasted) {
        let pastedText = pasted.getData('Text');
        if (/\D/g.test(pastedText)) {
            input.value = inputNumbersValue;
            return;
        }
    }
}
onPhoneInput = function (e) {
    let input = e.target,
        inputNumbersValue = getInputNumbersValue(input),
        selectionStart = input.selectionStart,
        formattedInputValue = "";
    if (!inputNumbersValue) {
        return input.value = "";
    }
    if (input.value.length != selectionStart) {
        if (e.data && /\D/g.test(e.data)) {
            input.value = inputNumbersValue;
        }
        return;
    }
    if (["7", "8", "9"].indexOf(inputNumbersValue[0]) > -1) {
        if (inputNumbersValue[0] == "9") inputNumbersValue = "7" + inputNumbersValue;
        let firstSymbols = (inputNumbersValue[0] == "8") ? "8" : "+7";
        formattedInputValue = input.value = firstSymbols + " ";
        if (inputNumbersValue.length > 1) {
            formattedInputValue += '(' + inputNumbersValue.substring(1, 4);
        }
        if (inputNumbersValue.length >= 5) {
            formattedInputValue += ') ' + inputNumbersValue.substring(4, 7);
        }
        if (inputNumbersValue.length >= 8) {
            formattedInputValue += '-' + inputNumbersValue.substring(7, 9);
        }
        if (inputNumbersValue.length >= 10) {
            formattedInputValue += '-' + inputNumbersValue.substring(9, 11);
        }
    } else {
        formattedInputValue = '+' + inputNumbersValue.substring(0, 16);
    }
    input.value = formattedInputValue;
}
onPhoneKeyDown = function (e) {
    let inputValue = e.target.value.replace(/\D/g, '');
    if (e.keyCode == 8 && inputValue.length == 1) {
        e.target.value = "";
    }
}
for (let phoneInput of phoneInputs) {
    phoneInput.addEventListener('keydown', onPhoneKeyDown);
    phoneInput.addEventListener('input', onPhoneInput, false);
    phoneInput.addEventListener('paste', onPhonePaste, false);
}

    //call__block
let call_block = document.querySelector('.call')
let coll_content = document.querySelector('.call__block')
let call_closer = document.querySelector('.call__closer')
let call_cross = document.querySelector('.call__cross')
 
document.querySelector('.feedback__button').onclick = ()=> {
    call_closer.classList.remove('call__closer_alt-2')
    call_block.classList.add('call_show')
    coll_content.classList.add('call__block_swipe')
    setTimeout(() => {
        call_closer.classList.add('call__closer_alt')
    }, 0)
    body.style.overflow = 'hidden'
}

function coll_close() {
    body_overflow()
    setTimeout(() => {
        coll_content.classList.remove('call__block_swipe')
    }, 150);
    call_closer.classList.add('call__closer_alt-2')
    call_closer.classList.remove('call__closer_alt')
    setTimeout(()=> {
        call_block.classList.remove('call_show')
    }, 250)
}
call_cross.onclick = ()=> {
    coll_close()
}

call_closer.onclick = ()=> {
    coll_close()
}

document.addEventListener('keydown', function(e) {
    if (e.key === "Escape"){
        coll_close()
    }
})