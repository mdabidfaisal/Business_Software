// Sidebar Start //
const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
    document.querySelector("#sidebar").classList.toggle("expand");
});
$(document).ready(function () {
    $('#datepicker').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true
    });
});
document.addEventListener("DOMContentLoaded", function () {
    const datePicker = document.getElementById('date');
    const today = new Date();
    const yyyy = today.getFullYear();
    let mm = today.getMonth() + 1; // January is 0!
    let dd = today.getDate();
    if (mm < 10) {
        mm = '0' + mm;
    }
    if (dd < 10) {
        dd = '0' + dd;
    }
    const minDate = yyyy + '-' + mm + '-' + dd; // Minimum date allowed is today
    datePicker.setAttribute('min', minDate);
});

// Simulated list of options for auto-search
const options = ['Apple', 'Banana', 'Cherry', 'Date', 'Grape', 'Lemon', 'Mango', 'Orange', 'Peach', 'Pear', 'Pineapple'];

const searchInput = document.getElementById('searchInput');
const searchResults = document.getElementById('searchResults');

searchInput.addEventListener('input', function () {
    const query = this.value.toLowerCase();
    let resultsHtml = '';

    options.forEach(option => {
        if (option.toLowerCase().startsWith(query)) {
            resultsHtml += `<div class="result-item">${option}</div>`;
        }
    });

    searchResults.innerHTML = resultsHtml;

    // Optional: Add event listener to handle clicks on results
    const resultItems = document.querySelectorAll('.result-item');
    resultItems.forEach(item => {
        item.addEventListener('click', function () {
            searchInput.value = this.innerText;
            searchResults.innerHTML = ''; // Clear results after selection
        });
    });
});