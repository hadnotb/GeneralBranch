
/*
function onClickButton()
{
    fetch('partial.html')
        .then(function(response) {
            return response.text();
        })
        .then(function(html){
            document.getElementById('response').innerHTML = html;
        });
}
*/

async function onClickButton()
{
    const response = await fetch('partial.html');
    const html = await response.text();
     
    document.getElementById('response').innerHTML = html;
}

document.getElementById('my-button').addEventListener('click', onClickButton);