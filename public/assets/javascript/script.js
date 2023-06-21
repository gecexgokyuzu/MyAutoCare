// FORM VALIDATION
$(document).ready(function () {
  $('.needs-validation').on('submit', function (event) {
    if (!this.checkValidity()) {
      event.preventDefault();
      event.stopPropagation();
    }
    $(this).addClass('was-validated');
  });
});

// TOGGLE INPUTS
function toggleInput(inputType) {
  const emailInputWrapper = $('#email-input-wrapper');
  const phoneInputWrapper = $('#phone-input-wrapper');
  const idnumberInputWrapper = $('#idnumber-input-wrapper');

  const emailButton = $('#email-button');
  const phoneButton = $('#phone-button');
  const idnumberButton = $('#idnumber-button');

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
    inputWrapper.removeClass('d-none');
    setTimeout(() => {
      inputWrapper.addClass('show');
      button.attr('disabled', true);
    }, 100);
  }, 400);
}

function fadeOut(inputWrapper, button) {
  inputWrapper.removeClass('show');
  button.removeAttr('disabled');
  setTimeout(() => {
    if (!inputWrapper.hasClass('show')) {
      inputWrapper.addClass('d-none');
    }
  }, 500);
}

// PROFILE EDITING
$(document).ready(function () {
  let isEditMode = false;
  let initialFieldValues = {};

  $("#profile-save-button").click(function () {
      isEditMode = !isEditMode;

      if (isEditMode) {
          // Enabling edit mode
          $(".editable-fields input").each(function () {
              const id = $(this).attr("id");
              initialFieldValues[id] = $(this).val();
          });
          $(".editable-fields input").prop("readonly", false).css("background-color", "#ccffcc");
          $("#profile-save-button").text("Save");
          $("#profile-cancel-button").hide().removeClass("d-none").fadeIn(500);
      } else {
          // Disabling edit mode
          $(".editable-fields input").prop("readonly", true).css("background-color", "");
          $("#profile-save-button").text("Edit");
          $("#profile-cancel-button").fadeOut(500, function() {
              $(this).addClass("d-none");
          });
      }
  });

  $("#profile-cancel-button").click(function () {
      // Reverting changes and disabling edit mode
      $(".editable-fields input").each(function () {
          const id = $(this).attr("id");
          $(this).val(initialFieldValues[id]);
      });
      $(".editable-fields input").prop("readonly", true).css("background-color", "");
      $("#profile-save-button").text("Edit");
      $("#profile-cancel-button").fadeOut(500, function() {
          $(this).addClass("d-none");
      });
      isEditMode = false;
  });
});