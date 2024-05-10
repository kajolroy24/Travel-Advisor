var swiper = new Swiper(".discover_container", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  loop: true,
  spaceBetween: 55,
  coverflowEffect: {
    rotate: 0,
  },
});

const wrapper = document.querySelector(".wrapper");
const loginlink = document.querySelector(".login_link");
const registerlink = document.querySelector(".register_link");
const btnpopup = document.querySelector(".login_btn");
const iconclose = document.querySelector(".close_icon");
const dropdown = document.querySelector(".menu");

registerlink.addEventListener("click", ()=> {
  wrapper.classList.add("active");
});

loginlink.addEventListener("click", ()=> {
  wrapper.classList.remove("active");
});

btnpopup.addEventListener("click", ()=> {
  wrapper.classList.add("active-popup");
});

iconclose.addEventListener("click", ()=> {
  wrapper.classList.remove("active-popup");
});

// setTimeout(function() {
//   document.getElementById("error").style.display = 'none';}, 5000);

// setTimeout(function() {
//   document.getElementById("success").style.display = 'none';}, 5000);

// login_user.addEventListener("click", () => {
//   dropdown.classList.toggle("active-dropdown");
// });


function dropdown_menu() {
  dropdown.classList.toggle('active-dropdown');
}








