const form = document.getElementsByClassName(".form-group .grid .floatLabel");
const select = form.getElementsById("select");

select.addEventListener("click", () => {
  select.value = "";
});
