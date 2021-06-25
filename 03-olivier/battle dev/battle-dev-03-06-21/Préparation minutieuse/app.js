const inputFile = 'input/input1.txt';
const fs = require('fs');

const lineReader = require('readline').createInterface({
    input : fs.createReadStream(inputFile)
});


const input =[];
lineReader.on('line', function(line) {
    input.push(line);
});

lineReader.on('close',function(){
    ContestResponse();
});







function ContestResponse()
{
    const D = parseInt(input.shift());
    const L = parseInt(input.shift());

    const result = D + (L*5);
    console.log(result);
    
}


