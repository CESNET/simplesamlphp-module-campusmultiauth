var noJsElements =Array.from(document.getElementsByClassName('idps-form-nojs-div'));
for (let i = 0; i < noJsElements.length; i++) {
    noJsElements[i].style.display = "none";
}

var jsElements =Array.from(document.getElementsByClassName('idps-form-div'));
for (let i = 0; i < jsElements.length; i++) {
    jsElements[i].style.display = "block";
}
