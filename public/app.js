

//alert("helo");

console.log("Hello there!");


let mastermindCode = [];
const colorCode = ['white', 'black', 'blue', 'green', 'red', 'yellow'];
let indexRow = 1;
let correctColor = 0;
let correctPlace = 0;
let guessCode = [0,0,0,0];


function getRandomColor(){
    return Math.floor(Math.random() * 6);
}


function startNewGame(){
    /*
        Start New Game

        This function will cleared the board of previous guesses
        and generate a new mastermind code

    */
   console.log("starting new game...");

    // 'i' is per row
    for(i = 1; i <= 10; i++){
        // 'j' is per column
        for(j = 1; j <= 6; j++){

            if(j<=4){
                document.getElementById('row'+i+'col'+j).innerHTML = " ";
            }else{
                document.getElementById('row'+i+'col'+j).innerHTML = "...";
            }

        }

    }

    //next we generate a new mastermind code
    mastermindCode = [];
    for(k = 1; k <= 4; k++){
        mastermindCode.push(colorCode[getRandomColor()]);
    }
    guessCode = [0,0,0,0];
    indexRow = 1;
    //Don't show this to the player, it is a secret!
    console.log(mastermindCode);

}

function col1Select(color){
    console.log("col 1 color : " + color);
    guessCode[0] = color;
    document.getElementById('row'+indexRow+'col'+1).innerHTML = "<span style='color: " + color + "'>" + color + "</span>";
}
function col2Select(color){
    console.log("col 2 color : " + color);
    guessCode[1] = color;
    document.getElementById('row'+indexRow+'col'+2).innerHTML = "<span style='color: " + color + "'>" + color + "</span>";
}
function col3Select(color){
    console.log("col 3 color : " + color);
    guessCode[2] = color;
    document.getElementById('row'+indexRow+'col'+3).innerHTML = "<span style='color: " + color + "'>" + color + "</span>";
}
function col4Select(color){
    console.log("col 4 color : " + color);
    guessCode[3] = color;
    document.getElementById('row'+indexRow+'col'+4).innerHTML = "<span style='color: " + color + "'>" + color + "</span>";
}


function submitGuess(){
    console.log(mastermindCode);
    if(indexRow <= 10){
        //check if guess has all options filled
        if( document.getElementById('row'+indexRow+'col'+1).innerHTML == ' ' ||
            document.getElementById('row'+indexRow+'col'+2).innerHTML == ' ' ||
            document.getElementById('row'+indexRow+'col'+3).innerHTML == ' ' ||
            document.getElementById('row'+indexRow+'col'+4).innerHTML == ' '   
        ){
            alert("please make a selection for all four columns");
            console.log("player has not selected all four options");
        }else{
        
            console.log('checking status of guess...');
            correctColor = 0;
            correctPlace = 0;
            tempCode = [...mastermindCode];
            console.log("Mastercode: " + mastermindCode + " - Tempcode: " + tempCode);
            
            //check correct place
            console.log("checking placement");
            for(i = 0; i < 4; i++){
                if(guessCode[i] == mastermindCode[i]){
                    correctPlace++;
                }
            }
            
            //set the reveal for correct placement
            document.getElementById('row'+indexRow+'col'+5).innerHTML = "<span style='color: black '>" + correctPlace + "</span>";

            //check for correct color
            console.log("checking colors");
            for(i = 0; i < 4; i++){
                console.log("for :" +guessCode[i]);

                for(j=0; j<tempCode.length; j++){
                    console.log("comparing " + guessCode[i] + " : " + tempCode[j]);
                    if(guessCode[i] == tempCode[j]){
                        console.log("found");
                        correctColor++;
                        tempCode.splice(j, 1);
                        break;
                    }
                }
            
            }
            // set the reveal for correct colors
            document.getElementById('row'+indexRow+'col'+6).innerHTML = "<span style='color: red'>" + correctColor + "</span>";


            //check if win
            if(correctPlace == 4){
                alert("You Win!");
            }

            if(indexRow == 10){
                alert('GAMB OVER');
            }
            //increment guess to next row
            indexRow++;

           



        }
    }
    else{
        alert("GAME OVER");
        console.log('game over...');
    }
    
    
}


