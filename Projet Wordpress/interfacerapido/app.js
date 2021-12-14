let burgerMenu = document.querySelector(".fa-bars");
let navMenu = document.querySelector('.SiteHeader-bar-navBar')
console.log(navMenu)

burgerMenu.addEventListener('click',onClickBurger);


function onClickBurger(){
    navMenu.classList.toggle('appair');
}