document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("registration-form");
  const message = document.getElementById("message");

  form.addEventListener("submit", function (event) {
      event.preventDefault();

      if (form.checkValidity() && isValidEmail() && isValidMobileNumber()) {
          if (passwordsMatch()) {
              message.classList.remove("alert-danger");
              message.classList.add("alert-success");
              message.textContent = "Registration successful! Redirecting to Home Page...";
              setTimeout(function () {
                  window.location.href = "homepage.html";
              }, 1000);
          } else {
              message.classList.remove("alert-success");
              message.classList.add("alert-danger");
              message.textContent = "Passwords do not match. Try Re-Entering.";
          }
      } else {
          message.classList.remove("alert-success");
          message.classList.add("alert-danger");
          message.textContent = "Form Cannot be Submitted. Check for Errors";
      }

      message.style.display = "block";
  });

  function passwordsMatch() {
      const passwordInput = document.getElementById("validationCustom04");
      const confirmPasswordInput = document.getElementById("validationCustom05");
      return passwordInput.value === confirmPasswordInput.value;
  }

  function isValidEmail() {
      const emailInput = document.getElementById("validationCustom03");
      const email = emailInput.value;
      const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
      if (!emailPattern.test(email)) {
          emailInput.classList.add("is-invalid");
          return false;
      } else {
          emailInput.classList.remove("is-invalid");
          return true;
      }
  }

  function isValidMobileNumber() {
      const mobileNumberInput = document.getElementById("validationCustomUsername");
      const mobileNumberValue = mobileNumberInput.value;
      // Mobile number validation
      if (/^07\d{8}$/.test(mobileNumberValue)) {
          mobileNumberInput.classList.remove("is-invalid");
          return true;
      } else {
          mobileNumberInput.classList.add("is-invalid");
          return false;
      }
  }

  // Validate mobile number length
  document.getElementById("validationCustomUsername").addEventListener("input", function () {
      const mobileNumberInput = document.getElementById("validationCustomUsername");
      if (mobileNumberInput.value.length !== 10) {
          mobileNumberInput.classList.add("is-invalid");
      } else {
          mobileNumberInput.classList.remove("is-invalid");
      }
  });

  // Validate email
  document.getElementById("validationCustom03").addEventListener("input", isValidEmail);
});
