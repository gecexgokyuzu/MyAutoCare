// FORM VALIDATION

(function () {
  'use strict'
  var forms = document.querySelectorAll('.needs-validation')
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })
})()

// TOGGLE INPUTS
function toggleInput(inputType) {
  const emailInputWrapper = document.getElementById('email-input-wrapper');
  const phoneInputWrapper = document.getElementById('phone-input-wrapper');
  const idnumberInputWrapper = document.getElementById('idnumber-input-wrapper');

  const emailButton = document.getElementById('email-button');
  const phoneButton = document.getElementById('phone-button');
  const idnumberButton = document.getElementById('idnumber-button');

  switch (inputType) {
    case 'email':
      fadeOut(phoneInputWrapper, phoneButton);
      fadeOut(idnumberInputWrapper, idnumberButton);
      fadeIn(emailInputWrapper, emailButton);
      break;
    case 'phone':
      fadeOut(emailInputWrapper, emailButton);
      fadeOut(idnumberInputWrapper, idnumberButton);
      fadeIn(phoneInputWrapper, phoneButton);
      break;
    case 'idnumber':
      fadeOut(phoneInputWrapper, phoneButton);
      fadeOut(emailInputWrapper, emailButton);
      fadeIn(idnumberInputWrapper, idnumberButton);
      break;
  }
}

function fadeIn(inputWrapper, button) {
  setTimeout(() => {
    inputWrapper.classList.remove('d-none');
    setTimeout(() => {
      inputWrapper.classList.add('show');
      button.setAttribute('disabled', true);
    }, 100);
  }, 400);
}

function fadeOut(inputWrapper, button) {
  inputWrapper.classList.remove('show');
  button.removeAttribute('disabled');
  setTimeout(() => {
    if (!inputWrapper.classList.contains('show')) {
      inputWrapper.classList.add('d-none');
    }
  }, 500);
}
toggleInput('email');