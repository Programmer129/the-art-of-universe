function onFirstPage() {
    document.getElementById("s").style.display="none";
    document.getElementById("f").style.display="block";
}


function onSecondPage() {
    document.getElementById("f").style.display="none";
    document.getElementById("s").style.display="block";
}

function onFirstUniverse() {
    document.getElementById("second-u").style.display="block";
    document.getElementById("first-u").style.display="none";
}

function onSecondUniverse() {
    document.getElementById("first-u").style.display="block";
    document.getElementById("second-u").style.display="none";
}

function onNext(id) {
    switch (id) {
        case 'first':
            document.getElementById('first').style.display='none';
            document.getElementById('second').style.display='block';
            break;
        case 'second':
            document.getElementById('second').style.display='none';
            document.getElementById('third').style.display='block';
            break;
        case 'third':
            document.getElementById('third').style.display='none';
            document.getElementById('forth').style.display='block';
            break;
    }
}

function onPrev(id) {
    switch (id) {
        case 'second':
            document.getElementById('second').style.display='none';
            document.getElementById('first').style.display='block';
            break;
        case 'third':
            document.getElementById('third').style.display='none';
            document.getElementById('second').style.display='block';
            break;
        case 'forth':
            document.getElementById('forth').style.display='none';
            document.getElementById('third').style.display='block';
            break;
    }
}