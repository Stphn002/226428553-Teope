
document.addEventListener("DOMContentLoaded", function () {
    const searchButton = document.querySelector(".search-form button");

    searchButton.addEventListener("click", function (e) {
        e.preventDefault();  
        const searchTerm = document.querySelector("#search").value;
        alert("Searching for: " + searchTerm);
    });
});

