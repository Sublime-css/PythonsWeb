
function menuTab() {
    var x = document.getElementById("header");
    if (x.style.display != "block") {
        x.style.display = "block";
        document.getElementById("mobileName").innerHTML = "";
    } else {
        x.style.display = "none";
        document.getElementById("mobileName").innerHTML = "Python's Web";
    }
}
