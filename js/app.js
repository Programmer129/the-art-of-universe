$("form :input").attr("autocomplete", "off");

function onFirstPage() {
    document.getElementById("second").style.display="none";
    document.getElementById("first").style.display="block";
}


function onSecondPage() {
    document.getElementById("first").style.display="none";
    document.getElementById("second").style.display="block";
}

function onFirstUniverse() {
    document.getElementById("second-u").style.display="block";
    document.getElementById("first-u").style.display="none";
}

function onSecondUniverse() {
    document.getElementById("first-u").style.display="block";
    document.getElementById("second-u").style.display="none";
}