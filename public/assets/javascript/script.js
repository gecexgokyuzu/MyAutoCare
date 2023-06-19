// FORM VALIDATION

(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
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
    }, 100); // waiting for the same duration as the fade-out to start the fade-in
  }, 400); // waiting for the fade-out to complete
}

function fadeOut(inputWrapper, button) {
  inputWrapper.classList.remove('show');
  button.removeAttribute('disabled');
  setTimeout(() => {
    if (!inputWrapper.classList.contains('show')) {
      inputWrapper.classList.add('d-none');
    }
  }, 500); // Match this duration with the CSS transition duration
}

toggleInput('email');