function alltab() {
    document.getElementById("updatepage").style.display = "none";
    document.getElementById("newpage").style.display = "none";
    document.getElementById("delpage").style.display = "none";
    document.getElementById("analytics").style.display = "none";
}

function loadpage(x) {
    if (x.style.display != "block") {
        alltab();
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}