//update footer
function calendarYear(){
    var p;
    var w = new Date().getFullYear();
    p = document.getElementById("xam").innerHTML = w;
}
window.onload = calendarYear;
