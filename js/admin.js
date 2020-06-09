function alltab() {
    document.getElementById("updatepage").style.display = "none";
    document.getElementById("newpage").style.display = "none";
    document.getElementById("delpage").style.display = "none";
    document.getElementById("pagelist1").style.display = "none";
    document.getElementById("pagelist2").style.display = "none";
    document.getElementById("pagelist3").style.display = "none";
    document.getElementById("pagelist4").style.display = "none";
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

function pagelist1() {
    var x = document.getElementById("pagelist1");
    if (x.style.display != "block") {
        alltab();
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function pagelist2() {
    var x = document.getElementById("pagelist2");
    if (x.style.display != "block") {
        alltab();
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function pagelist3() {
    var x = document.getElementById("pagelist3");
    if (x.style.display != "block") {
        alltab();
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function pagelist4() {
    var x = document.getElementById("pagelist4");
    if (x.style.display != "block") {
        alltab();
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
