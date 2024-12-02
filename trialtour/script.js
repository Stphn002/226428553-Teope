// Example of a basic validation for password field length and format on the signup page
document.getElementById("password").addEventListener("input", function(event) {
    const password = event.target.value;
    const passwordMessage = document.getElementById("passwordMessage");
    
    const passwordRegex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[\W_]).{8,}$/;
    if (!passwordRegex.test(password)) {
        passwordMessage.textContent = "Password must contain at least 8 characters, including uppercase, lowercase, a number, and a special character.";
        passwordMessage.style.color = "red";
    } else {
        passwordMessage.textContent = "Password is strong.";
        passwordMessage.style.color = "green";
    }
});
