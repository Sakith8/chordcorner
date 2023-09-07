document.addEventListener("DOMContentLoaded", function () {
    const emailInput = document.getElementById("validationCustom03");
    const passwordInput = document.getElementById("validationCustom04");

    emailInput.addEventListener("input", function () {
        const email = emailInput.value.trim();
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

        if (emailPattern.test(email)) {
            emailInput.classList.remove("is-invalid");
        } else {
            emailInput.classList.add("is-invalid");
        }
    });

    passwordInput.addEventListener("input", function () {
        const password = passwordInput.value;

        if (password.length >= 8) {
            passwordInput.classList.remove("is-invalid");
        } else {
            passwordInput.classList.add("is-invalid");
        }
    });

    document.querySelector("form").addEventListener("submit", function (e) {
        if (!emailInput.validity.valid) {
            e.preventDefault();
            emailInput.classList.add("is-invalid");
        }
        if (passwordInput.classList.contains("is-invalid")) {
            e.preventDefault();
        }
    });
});
