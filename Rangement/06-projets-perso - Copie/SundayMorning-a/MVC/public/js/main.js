// function App()
// {
//     this.breakPoint = 600;

//     this.construct = function(){
//         this.initMenu();
//     };

//     this.initMenu = function(){

//         let burger = document.getElementById('MenuBars');
//         let menu = document.getElementById('Menu');
//         burger.addEventListener('click', function(){
//             menu.style.display = 'block';
//             burger.style.display = 'none';
//         });

//         let menuClose = document.getElementById('MenuClose');
//         menuClose.addEventListener('click', function(){
//             menu.style.display = 'none';
//             burger.style.display = 'block';
//         });

//         let that = this;
//         window.addEventListener('resize', function(){
//             if(window.innerWidth  > that.breakPoint) {
//                 burger.style.display = 'none';
//                 menu.style.display = 'block';
//             } else {
//                 burger.style.display = 'block';
//                 menu.style.display = 'none';
//             }
//         });
//     };

//     this.construct();
// }
function App(){
    this.breakPoint = 600;
    this.construct = function(){
        this.initMenu();
    };
    let links = document.querySelectorAll('#MenuLink');
   
    let menuBars =document.getElementById('MenuBars');
    let menuClose =document.getElementById('MenuClose');
    let menu =document.getElementById('Menu');
    menuBars.addEventListener('click',function(){
        menuBars.style.display = 'none';
        menuClose.style.display ='block';
        // link.style.display  = "block";
        for(let link of links){
            link.style.display ='block';
        }
    });
    menuClose.addEventListener("click",function(){
        menuBars.style.display = 'block';
        menuClose.style.display ='none';
        for(let link of links){
            link.style.display ='none';
        }
    });
    let that = this;
    let curwiwidth = window.innerWidth;
    window.addEventListener('resize', function(){
        
        if(window.innerWidth  > that.breakPoint ) {
            menuBars.style.display = 'none';
            menuClose.style.display = 'none';
            for(let link of links){
                link.style.display ='block';
            }

        } else if (window.innerWidth != curwiwidth ){

            menuBars.style.display = 'block';
            menuClose.style.display = 'none';
            for(let link of links){
                link.style.display ='none';
            }
           
        }
    });
}

let app = new App();