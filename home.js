ta = document.querySelector("textarea");

count = document.getElementById("counter");
ta.addEventListener("input", function (e) {
  count.innerHTML = 1000 - this.value.length;
});

function showForms() {
  var forms = document.getElementById("edit-forms");

  if(forms.style.display === "none") {
    forms.style.display = "block";
  }
  else {
    forms.style.display = "none";
  }
}