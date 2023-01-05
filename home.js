ta = document.querySelector("textarea");

count = document.getElementById("counter");
ta.addEventListener("input", function (e) {
  count.innerHTML = 1000 - this.value.length;
});

var testingN = document.getElementById('test');
var divDefinition = document.getElementById("display-definition");

function showForms(index) { 
  // var edit_forms = document.getElementById("edit-forms" + index);
  var enterWord = document.getElementById('enter-word' + index);
  var enterDefinition = document.getElementById('enter-definition' + index);
  var saveButton = document.getElementById('save-button' + index);

    enterWord.style.display = "block";
    saveButton.style.display = "block";
    enterDefinition.style.display = "block";  
}

function hideForms(index) {
  var enterWord = document.getElementById('enter-word' + index);
  var enterDefinition = document.getElementById('enter-definition' + index);
  var saveButton = document.getElementById('save-button' + index);

    saveButton.style.display = "none";
    enterDefinition.style.display = "none";
    enterWord.style.display = "none";
}
/**
 * This is a function for testing purposes. 
 * @param {This is the index for testing purposes.} testN 
 */
function testing(testN) {
  var remove_button = document.getElementById("remove-button" + testN);
  remove_button.style.color = "orange";
  testingN.innerHTML = "Test Number: " + testN;
  
}    
