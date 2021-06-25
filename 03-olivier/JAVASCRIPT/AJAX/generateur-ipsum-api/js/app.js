
// EXERCICE ------------------------------------------------
div = document.getElementById('div');
async function onClickButton(event){
    event.preventDefault();
    let number = document.getElementById('number').value;

    
    const response = await fetch('https://baconipsum.com/api/?type=all-meat&paras='+number+'&start-with-lorem=1');

    const data =  await response.json();
    
    div.innerHTML ='';
    for(para of data){

        div.innerHTML += '<p>'+ para +'</p>';
        // `<p> ${para}</p>`

        // let newp = document.createElement('p');
        //     div.appendChild(newp);
        //     newp.innerHTML = para;
    }
     
}

document.getElementById('form').addEventListener('submit',onClickButton);


// document.getElementById('submit').addEventListener("click",onClickButton);




// let product_sheet = fetch('https://baconipsum.com/api/?callback=?')
//   .then(function(response){
//     return response.text()
//   }).then(function(data){
//      console.log(data)
 
//});

// CORRECTION-----------------------------------------------


