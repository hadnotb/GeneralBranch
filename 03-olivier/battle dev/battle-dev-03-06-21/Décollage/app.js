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



function ContestResponse(){
    input.shift();
    const list  = {};
    for (const prop of input){

       
        if(prop in list){

        list[prop] ++;
    


        }
        else{
            list[prop] =1;
        }
        

    }
    // console.log(list[prop] ==2);
}


