function menuTab() {
    var x = document.getElementById("header");
    if (x.style.display != "block") {
        x.style.display = "block";
        document.getElementById("mobileName").innerHTML = "";
        document.getElementById("menuTab").style.color = "#001f3f";
    } else {
        x.style.display = "none";
        document.getElementById("mobileName").innerHTML = "Python's Web";
        document.getElementById("menuTab").style.color = "#63ebb0";
    }
}
