ta = document.querySelector("textarea");

count = document.getElementById("counter");
ta.addEventListener("input", function (e) {
  count.innerHTML = 1000 - this.value.length;
});

var enterWord = document.getElementById('enter-word');
var enterDefinition = document.getElementById('enter-definition');
var saveButton = document.getElementById('save-button');
const forms = document.getElementById("edit-forms");

function showForms(index) { 
    enterWord.style.display = "block";
    saveButton.style.display = "block";
    enterDefinition.style.display = "block";  
}

function hideForms() {
    saveButton.style.display = "none";
    enterDefinition.style.display = "none";
    enterWord.style.display = "none";

}