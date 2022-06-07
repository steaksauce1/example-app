

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
                document.getElementById('row'+i+'col'+j).className = "border border-slate-700";
            }else{
                document.getElementById('row'+i+'col'+j).innerHTML = "...";
                document.getElementById('row'+i+'col'+j).className = "border border-slate-700 text-center";
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
    document.getElementById('row'+indexRow+'col'+1).className =  colorClassSelector(color);
    document.getElementById('row'+indexRow+'col'+1).innerHTML = "<span style='color: " + colorTextSelector(color) + "' text-align: center>" + color + "</span>";
}
function col2Select(color){
    console.log("col 2 color : " + color);
    guessCode[1] = color;
    document.getElementById('row'+indexRow+'col'+2).className =  colorClassSelector(color);
    document.getElementById('row'+indexRow+'col'+2).innerHTML = "<span style='color: " + colorTextSelector(color) + "'>" + color + "</span>";
}
function col3Select(color){
    console.log("col 3 color : " + color);
    guessCode[2] = color;
    document.getElementById('row'+indexRow+'col'+3).className =  colorClassSelector(color);
    document.getElementById('row'+indexRow+'col'+3).innerHTML = "<span style='color: " + colorTextSelector(color) + "'>" + color + "</span>";
}
function col4Select(color){
    console.log("col 4 color : " + color);
    guessCode[3] = color;
    document.getElementById('row'+indexRow+'col'+4).className =  colorClassSelector(color);
    document.getElementById('row'+indexRow+'col'+4).innerHTML = "<span style='color: " + colorTextSelector(color) + "'>" + color + "</span>";
}

function colorClassSelector(color){
    let colorClass = "bg-gray-900"
    switch(color){
        case 'white':
            colorClass = "border border-slate-600 bg-gray-100 text-center";
            return colorClass;
        case 'black':
            colorClass = "border border-slate-600 bg-gray-800 text-center";
            return colorClass;
        case 'red':
            colorClass = "border border-slate-600 bg-red-500 text-center";
            return colorClass; 
        case 'blue':
            colorClass = "border border-slate-600 bg-blue-500 text-center";
            return colorClass;  
        case 'green':
            colorClass = "border border-slate-600 bg-green-500 text-center";
            return colorClass;   
        case 'yellow':
            colorClass = "border border-slate-600 bg-yellow-500 text-center";
            return colorClass;
        case 0:
            colorClass = "border border-slate-600 bg-gray-500 text-center";
            return colorClass;
        case 1:
            colorClass = "border border-slate-600 bg-gray-400 text-center";
            return colorClass;
        case 2:
            colorClass = "border border-slate-600 bg-gray-300 text-center";
            return colorClass;
        case 3:
            colorClass = "border border-slate-600 bg-gray-200 text-center";
            return colorClass;
        case 4:
            colorClass = "border border-slate-600 bg-gray-50 text-center";
            return colorClass;
    }

}

function colorTextSelector(color){
    let colorText = "white"
    switch(color){
        case 'white':
            colorText = "black";
            return colorText;
        case 'black':
            colorText = "white";
            return colorText;
        case 'red':
            colorText = "white";
            return colorText; 
        case 'blue':
            colorText = "white";
            return colorText;  
        case 'green':
            colorText = "white";
            return colorText;   
        case 'yellow':
            colorText = "white";
            return colorText;   
    }

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
            document.getElementById('row'+indexRow+'col'+5).innerHTML = "<span style='color: black; font-weight: 900; '>" + correctPlace + "</span>";
            document.getElementById('row'+indexRow+'col'+5).className = colorClassSelector(correctPlace);
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
            document.getElementById('row'+indexRow+'col'+6).innerHTML = "<span style='color: red; font-weight: 900;'>" + correctColor + "</span>";
            document.getElementById('row'+indexRow+'col'+6).className = colorClassSelector(correctColor);


            //check if win
            if(correctPlace == 4){
                alert("You Win!");
            }

           
            //increment guess to next row
            indexRow++;

            if(correctPlace >= 11){
                alert("GAME OVER");
                console.log('game over...');
            }

           



        }
    }
    else{
        alert("GAME OVER");
        console.log('game over...');
    }
    
    
}


function NotecardCreateNewCard(){
    let noteplus = document.getElementById("noteplus");
    let notetext = document.getElementById("notetext");
    let notesave = document.getElementById("notesave");

    noteplus.style.display = "none";
    notetext.style.display = "block";
    notesave.style.display = "block";
}