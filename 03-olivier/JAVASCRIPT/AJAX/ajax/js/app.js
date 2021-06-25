let div = document.getElementById('response');

async function onClickButton()
{
    // fetch('partial.html')
    // .then(function(response)
    // {
        
    //     return response.text();
    // })
    // .then(function(html){
    //     document.getElementById('response').innerHTML = html;
    // })
    // AUTRE SYNTAXE
    // const response = await fetch('partial.html');
    // const html = await response.text();
    // document.getElementById('response').innerHTML =html;
    const response = await fetch('ajax.php');
    const data = await response.json();
    console.log(data);
    
    for(let article of data){
        // div.innerHTML += '<h1>' + article.title + '</h1><p>' + article.content+'</p>';
        let newh1 = document.createElement('h1');
        div.appendChild(newh1);
        newh1.innerHTML = article.title ;

        let newContent = document.createElement('p');
        div.appendChild(newContent);
        newContent.innerHTML = article.content ;

        let newCategorie = document.createElement('blockquote');
        div.appendChild(newCategorie);
        newCategorie.innerHTML = article.libCategorie;

        

    }

    

    
    // console.log(data);
    // document.getElementById('response').innerHTML =html;



}



document.getElementById('my-button').addEventListener('click',onClickButton);


