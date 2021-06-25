function changeColor(){
    backbody.className = sel.value;
    let valeur = document.getElementById("theme-select").value;
    localStorage.stock = valeur;

}
let backbody = document.body;
let sel = document.getElementById("theme-select");
sel.addEventListener("change", changeColor, false);
sel.value =localStorage.stock;
sel.dispatchEvent(new Event('change'));

let themeSelect = document.getElementById('theme-select');
themeSelect.options[themeSelect.options.length] = new Option('boulo', 'yellow');





/////////////////////////////////////////////////////////////////////

// function changeColor(){
//     couleur.style.backgroundColor = sel.value;
//     let valeur = document.getElementById("theme-select").value;
//     localStorage.stock = valeur;


// }

// let sel = document.getElementById("theme-select");
// let couleur = document.body;


// sel.addEventListener("change", changeColor, false);
// sel.dispatchEvent(new Event("change"));
// couleur.style.backgroundColor = localStorage.stock;