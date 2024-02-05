 // Sidebar Start //
const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function() {
    document.querySelector("#sidebar").classList.toggle("expand");
});
$(document).ready(function() {
    $('#datepicker').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true
    });
});
document.addEventListener("DOMContentLoaded", function() {
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