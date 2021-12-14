let burgerMenu = document.querySelector(".fa-bars");
let navMenu = document.querySelector('.SiteHeader-bar-navBar');


burgerMenu.addEventListener('click',onClickBurger);
console.log(burgerMenu);
console.log(navMenu);


function onClickBurger(){
    navMenu.classList.toggle('appair');
}