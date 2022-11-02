ta = document.querySelector("textarea");

count = document.getElementById("counter");
ta.addEventListener("input", function (e) {
  count.innerHTML = 1000 - this.value.length;
});