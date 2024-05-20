// const form = document.querySelector('[name="booking"]');
// const inputs = form.querySelectorAll('.input_box input');
const label = document.querySelectorAll(".input_box label");
const inputs = document.querySelectorAll(".floatLabel");

// All browsers donot support the for each method, so it is safer to use for loop
// inputs.forEach(function(input) {
//   console.log('navElement: ', input);
// })

// For loop method
for (var i = 0; i < inputs.length; i++) {
  console.log('inputs[i]: ', inputs[i].clientHeight);
}




// input.addEventListener("click", () => {
//     console.log("hello");
// });

