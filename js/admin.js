function alltab() {
    document.getElementById("updatepage").style.display = "none";
    document.getElementById("newpage").style.display = "none";
    document.getElementById("delpage").style.display = "none";
    document.getElementById("analytics").style.display = "none";
    //document.getElementById("pages").style.display = "none";
}

function editpage() {
    var x = document.getElementById("updatepage");
    if (x.style.display != "block") {
        alltab();
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function newpage() {
    var x = document.getElementById("newpage");
    if (x.style.display != "block") {
        alltab();
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function delpage() {
    var x = document.getElementById("delpage");
    if (x.style.display != "block") {
        alltab();
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function analytics() {
    var x = document.getElementById("analytics");
    if (x.style.display != "block") {
        alltab();
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
