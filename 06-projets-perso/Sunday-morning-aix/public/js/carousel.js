let isDown = false;
let startX;
let scrollLeft;
const slider = document.querySelector('.items');
// TODO Essayer de demander a quelqu'un si il comprend a quoi sert la variale is Down
// function de fin de slider je remove la classe active et j'initialise is dawn a false
const end = () => {
	isDown = false;
  slider.classList.remove('active');
}

const start = (e) => {
  isDown = true;
  slider.classList.add('active');
  startX = e.pageX; 
  // || e.touches[0].pageX - slider.offsetLeft;
  scrollLeft = slider.scrollLeft;	
  // console.log(slider.scrollLeft);
}

const move = (e) => {
	if(!isDown) return;
  e.preventDefault();
  const x = e.pageX; 
  // || e.touches[0].pageX - slider.offsetLeft;
  const dist = (x - startX);
  slider.scrollLeft = scrollLeft - dist;
}

(() => {
	slider.addEventListener('mousedown', start);
	slider.addEventListener('touchstart', start);

	slider.addEventListener('mousemove', move);
	slider.addEventListener('touchmove', move);

	slider.addEventListener('mouseleave', end);
	slider.addEventListener('mouseup', end);
	slider.addEventListener('touchend', end);
})();
// document.style.backgroundImage = "url()"
let items = document.querySelectorAll('.item');

for(let i =0 ; i< items.length; i++){

    
    let j= i+1;
    let element =items[i];
    element.style.backgroundImage = "url('img/imgcarousel/mav-"+j+".jpg')";
    element.style.backgroundSize ='250px 400px';
    element.style.backgroundRepeat ="no-repeat";
    element.style.backgroundPosition ='center';
    
    // background-size: cover;
    // background-position: center;"
}
