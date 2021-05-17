// POP UP
const popup = document.querySelector(".popup");
const closePopup = document.querySelector(".popup_close");
const userLog = document.querySelector(".log");

if (popup) {
  closePopup.addEventListener("click", () => {
    popup.classList.add("hidden_popup");
  });

  userLog.addEventListener("click", () => {
   
      popup.classList.remove("hidden_popup");
   
  });
}
/*===NAVIGATION===*/
/*const navOpen = document.querySelector(".nav_hamburger");
const navClose = document.querySelector(".close_toogle");
const menu = document.querySelector(".nav_menu");
const navContainer = document.querySelector(".nav_menu");

navOpen.addEventListener("click", ()=>{
    menu.classList.add("open");
    document.body.classList.add("active");
    navContainer.style.left = "0";
    navContainer.style.width = "30rem";
})
navClose.addEventListener("click", ()=>{
    menu.classList.add("open");
    document.body.classList.remove("active");
    navContainer.style.left = "-30rem";
    navContainer.style.width = "0";
})*/


//Animation Scrolling
AOS.init();