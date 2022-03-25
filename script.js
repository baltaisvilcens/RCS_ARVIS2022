"use strict"

let form            = document.querySelector('form')
let error_element   = document.querySelector(".error-message")

form.onsubmit = (e) => {
    e.preventDefault()
    alert("Jūsu ziņa tika veiksmīgi nosūtīta, paldies par jūsu ieinteresētību!")
    let action_url = form.getAttribute('action')
    fetch(action_url, {
        method: 'POST',
        body: new FormData(form)
    })
    .then(response => response.json())
    .then(data => {
        error_element.innerHTML = data.message
        console.log(data)
    })
    // clearing the form
    form.reset()
}