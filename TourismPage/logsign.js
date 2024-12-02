document.addEventListener('DOMContentLoaded', function () {
    const loginForm = document.querySelector('.form-container form');
    loginForm.addEventListener('submit', function (event) {
        const username = loginForm.querySelector('input[name="username"]');
        const password = loginForm.querySelector('input[name="password"]');
        if (!username.value || !password.value) {
            event.preventDefault();
            alert('Please fill in both fields.');
        }
    });

    const signUpForm = document.querySelector('.form-container form');
    signUpForm.addEventListener('submit', function (event) {
        const username = signUpForm.querySelector('input[name="username"]');
        const email = signUpForm.querySelector('input[name="email"]');
        const password = signUpForm.querySelector('input[name="password"]');
        if (!username.value || !email.value || !password.value) {
            event.preventDefault();
            alert('Please fill in all fields.');
        }
    });
});
