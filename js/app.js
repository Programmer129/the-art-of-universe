$("form :input").attr("autocomplete", "off");

function onFirstPage() {
    document.getElementById("second").style.display="none";
    document.getElementById("first").style.display="block";
}


function onSecondPage() {
    document.getElementById("first").style.display="none";
    document.getElementById("second").style.display="block";
}