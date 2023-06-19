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
function toggleInput(type) {
  var inputTypes = ['email', 'phone', 'idnumber'];

  for (var i = 0; i < inputTypes.length; i++) {
      var inputWrapper = document.getElementById(inputTypes[i] + '-input-wrapper');
      var inputElement = document.getElementById(inputTypes[i] + '-input');
      var button = document.getElementById(inputTypes[i] + '-button');

      inputWrapper.classList.remove('show');
      inputWrapper.classList.add('d-none');
      inputElement.classList.add('d-none');
      button.disabled = false;
  }

  var selectedInputWrapper = document.getElementById(type + '-input-wrapper');
  var selectedInputElement = document.getElementById(type + '-input');
  var selectedButton = document.getElementById(type + '-button');

  selectedInputWrapper.classList.remove('d-none');
  selectedInputWrapper.classList.add('d-block');
  selectedInputElement.classList.remove('d-none');

  setTimeout(function() {
      selectedInputWrapper.classList.add('show');
  }, 10);

  selectedButton.disabled = true;
}