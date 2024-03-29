

// FONCTIONS //////////////// 
async function onClickDelete(event)
{
    // On annule le comportement par défaut du navigateur
    event.preventDefault();
    
    // On affiche une boîte de dialogue de confirmation et on récupère la réponse de l'internaute
    const confirmed = window.confirm('Êtes-vous certain de vouloir supprimer cet article ?');

    // Si l'internaute confirme effectivement la suppression
    if (confirmed) {

        // VERSION 1 : redirection, on change de page
        // On redirige l'internaute vers la suppression en allant chercher le href du lien cliqué
        // window.location.replace(this.href);

        // VERSION 2 : on envoie une requête AJAX avec la fonction fetch
        const response = await fetch(this.href);
        const id = await response.text();

        // Lors de la récéption de la réponse, on récupère l'id de l'article supprimé pour supprimer le <tr> correspondant
        if(id > 0) {
            let target = this.getAttribute('data-target');
            const trElement = document.getElementById(target + '-' + id);
            trElement.remove();
        } else {
            alert('Erreur');
        }
    }
}


// CODE PRINCIPAL //////////////////
const deleteLinks = document.querySelectorAll('.Delete-button');

for (let link of deleteLinks) {

    link.addEventListener('click', onClickDelete);
}




//  function AppBurger(){

//     this.breakPoint = 600;
//     this.construct = function(){
//         this.initMenu();
//     };
//     let links = document.querySelectorAll('#MenuLink');
   
//     let menuBars =document.getElementById('MenuBars');
//     let menuClose =document.getElementById('MenuClose');
//     let menu =document.getElementById('Menu');
//     menuBars.addEventListener('click',function(){
//         menuBars.style.display = 'none';
//         menuClose.style.display ='block';
//         // link.style.display  = "block";
//         for(let link of links){
//             link.style.display ='block';
//         }
//     });
//     menuClose.addEventListener("click",function(){
//         menuBars.style.display = 'block';
//         menuClose.style.display ='none';
//         for(let link of links){
//             link.style.display ='none';
//         }
//     });
//     let that = this;
//     let curwiwidth = window.innerWidth;
//     window.addEventListener('resize', function(){
        
//         if(window.innerWidth  > that.breakPoint ) {
//             menuBars.style.display = 'none';
//             menuClose.style.display = 'none';
//             for(let link of links){
//                 link.style.display ='block';
//             }

//         } else if (window.innerWidth !== curwiwidth ){

//             menuBars.style.display = 'block';
//             menuClose.style.display = 'none';
//             for(let link of links){
//                 link.style.display ='none';
//             }
           
//         }
//     });
// }
function showSearchBar(){
    
    // let searchBar = document.getElementById("search-bar");
    // let research  = document.getElementById("submit-search");
    // searchBar.classList.toggle("not-hidden");
    // research.classList.toggle("not-hidden");
    let searchBubble =document.querySelector('.Search-bubble');
    searchBubble.classList.toggle("not-hidden");
}

function showCategoryList(){
    let catList = document.getElementById("Category");
    catList.classList.toggle("showCategory");
    let button = document.getElementById('boutonTrier');
    if(button.innerHTML === "Trier"){
        button.innerHTML = "Cacher";
    }else{
        button.innerHTML = "Trier";
    }   
}

let bars = document.querySelector('.SiteHeader-nav-menu-bars');




function showMenu(){

    // let menu = document.querySelector(".SiteHeader-nav-menu-links");
    // menu.classList.toggle("showMenu");
    let link = document.querySelectorAll('#Menu-link');
    
    
    let bars = document.getElementById('bars');
    let times = document.getElementById('times');
    let menu = document.getElementById('SiteHeaderMenu');
   
    bars.addEventListener('click',function(){
        bars.style.display = 'none';
        times.style.display ='block';
        times.style.position='static';
        times.style.margin = '0 auto';
        menu.style.display = 'block';
        // link.style.display  = "block";
        for(let links of link){
            links.style.display ='block';
        }
    });
    times.addEventListener("click",function(){
        bars.style.display = 'block';
        times.style.display ='none';
        // times.style.position='static';
        menu.style.display = 'none';
        for(let links of link){
            links.style.display ='none';
        }
    });

}


showMenu();


 

// class Carousel {

//     /**
//     * @param (HTMLElement) element
//     * @param (Object) options
//     * @param (Object) options.slidesToScroll nombre d'element a faire défilé
//     * @param (Object) options.slidesVisible nombre d'element visible
//     */

//     constructor (element, options ={}) {
//         this.element = element
//         this.options = Object.assign({}, {
//             slidesToScroll: 1,
//             slidesVisible: 1
//         },options)
        
//         let children = [].slice.call(element.children);
        
//         this.root = this.createDivWithClass('carousel');
//         this.container = this.createDivWithClass('carousel__container');
//         this.root.appendChild(this.container);
//         this.element.appendChild(root);
//         this.children.map((child) => {
//            let item = this.createDivWithClass('carousel__item');
            
//             item.appendChild(child) ;
//             this.container.appendChild(item);
//             return item;
//         })
//         this.setStyle();
//     }
//     setStyle(){
//         let ratio = this.items.length / this.options.slidesVisible;
//         this.container.style.width = (ratio * 100) + "%"; 
//         this.items.forEach(item => item.style.width = ((100/ this.options.slidesVisible)/ ratio) + "%")
//     }
//     createNavigation(){
//         let nextButton = this.createDivWithClass('carousel__next')
//         let
//     }

//     /**
//     * @param (string) className 
//     * @returns (HTMLElement)
//     */

//    createDivWithClass (className){

//     let div = document.createElement('div');
//     div.setAttribute('class', className);
//     return div ;
//    }
// }

// new Carousel(document.querySelector('.lecarousel'),{
//     slidesToScroll:  b 3,

//     slidesVisible: 3
// })

// $('.slider').slick({
//     prevArrow: $('.slick-prev'),
//     nextArrow: $('.slick-next')
// });

// $('.slider-forYou').slick({
//     infinite: true,
//     slidesToShow: 3,
//     slidesToScroll: 3

// });















































