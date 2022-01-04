
let searchButton = document.getElementById("btn");
let query = document.getElementById("query");

searchButton.onclick = function() {
    window.location.href = "?controller=CV&action=Results&param1=" + encodeURIComponent(query.value);
}