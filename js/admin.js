function editpage() {
    var x = document.getElementById("updatepage");
    var y = document.getElementById("newPage");
    var z = document.getElementById("delpage");
    var a = document.getElementById("pagelist1");
    var b = document.getElementById("pagelist2");
    var c = document.getElementById("pagelist3");
    var d = document.getElementById("pagelist4");
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "none";
        z.style.display = "none";
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
    } else {
        x.style.display = "none";
    }
}

function newpage() {
    var x = document.getElementById("updatepage");
    var y = document.getElementById("newPage");
    var z = document.getElementById("delpage");
    var a = document.getElementById("pagelist1");
    var b = document.getElementById("pagelist2");
    var c = document.getElementById("pagelist3");
    var d = document.getElementById("pagelist4");
    if (y.style.display === "none") {
        x.style.display = "none";
        y.style.display = "block";
        z.style.display = "none";
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
    } else {
        y.style.display = "none";
    }
}

function delpage() {
    var x = document.getElementById("updatepage");
    var y = document.getElementById("newPage");
    var z = document.getElementById("delpage");
    var a = document.getElementById("pagelist1");
    var b = document.getElementById("pagelist2");
    var c = document.getElementById("pagelist3");
    var d = document.getElementById("pagelist4");
    if (z.style.display === "none") {
        x.style.display = "none";
        y.style.display = "none";
        z.style.display = "block";
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
    } else {
        z.style.display = "none";
    }
}

function pagelist1() {
    var x = document.getElementById("updatepage");
    var y = document.getElementById("newPage");
    var z = document.getElementById("delpage");
    var a = document.getElementById("pagelist1");
    var b = document.getElementById("pagelist2");
    var c = document.getElementById("pagelist3");
    var d = document.getElementById("pagelist4");
    if (a.style.display === "none") {
        x.style.display = "none";
        y.style.display = "none";
        z.style.display = "none";
        a.style.display = "table";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
    } else {
        a.style.display = "none";
    }
}

function pagelist2() {
    var x = document.getElementById("updatepage");
    var y = document.getElementById("newPage");
    var z = document.getElementById("delpage");
    var a = document.getElementById("pagelist1");
    var b = document.getElementById("pagelist2");
    var c = document.getElementById("pagelist3");
    var d = document.getElementById("pagelist4");
    if (b.style.display === "none") {
        x.style.display = "none";
        y.style.display = "none";
        z.style.display = "none";
        a.style.display = "none";
        b.style.display = "table";
        c.style.display = "none";
        d.style.display = "none";
    } else {
        b.style.display = "none";
    }
}

function pagelist3() {
    var x = document.getElementById("updatepage");
    var y = document.getElementById("newPage");
    var z = document.getElementById("delpage");
    var a = document.getElementById("pagelist1");
    var b = document.getElementById("pagelist2");
    var c = document.getElementById("pagelist3");
    var d = document.getElementById("pagelist4");
    if (c.style.display === "none") {
        x.style.display = "none";
        y.style.display = "none";
        z.style.display = "none";
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "table";
        d.style.display = "none";
    } else {
        c.style.display = "none";
    }
}

function pagelist4() {
    var x = document.getElementById("updatepage");
    var y = document.getElementById("newPage");
    var z = document.getElementById("delpage");
    var a = document.getElementById("pagelist1");
    var b = document.getElementById("pagelist2");
    var c = document.getElementById("pagelist3");
    var d = document.getElementById("pagelist4");
    if (d.style.display === "none") {
        x.style.display = "none";
        y.style.display = "none";
        z.style.display = "none";
        a.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "table";
    } else {
        d.style.display = "none";
    }
}
