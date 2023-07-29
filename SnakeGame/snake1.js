// Game Constants & Variables
let inputDir = {x: 0, y: 0}; 
const foodSound = new Audio('music/food.mp3');
const gameOverSound = new Audio('music/gameover.mp3');
const moveSound = new Audio('music/move.mp3');
const musicSound = new Audio('music/music.mp3');
const openbutton = document.getElementById("button1");
const closebutton = document.getElementById("closeModal");
const modal = document.getElementById("modal");
var Score = document.getElementById("score");
var progress3 = document.getElementById("progress3");
var progressing = document.getElementById("progressing");
var Notprogress = document.getElementById("Notprogress");
var notEnoughData= document.getElementById("notEnoughData");
/* const instructions = document.getElementById('instructions'); */

var avg1=0;
var final = 0;
var prog=0;
let speed = 5;
let score = 0;
let lastPaintTime = 0;
let snakeArr = [
    {x: 13, y: 15}
];

food = {x: 6, y: 7};
// Get the instructions section

// Listen for any key press
/* document.addEventListener('keydown', () => {
  // Remove the instructions section from the DOM
  instructions.remove();
}); */


// Game Functions
function main(ctime) {
    window.requestAnimationFrame(main);
    // console.log(ctime)
    if((ctime - lastPaintTime)/1000 < 1/speed){
        return;
    }
    lastPaintTime = ctime;
    gameEngine();
}

function isCollide(snake) {
    // If you bump into yourself 
    for (let i = 1; i < snakeArr.length; i++) {
        if(snake[i].x === snake[0].x && snake[i].y === snake[0].y){
            return true;
        }
    }
    // If you bump into the wall
    if(snake[0].x >= 18 || snake[0].x <=0 || snake[0].y >= 18 || snake[0].y <=0){
        return true;
    }
    
        
    return false;
}

function gameEngine(){
    // Part 1: Updating the snake array & Food
    if(isCollide(snakeArr)){
        gameOverSound.play();
        musicSound.pause();
        inputDir =  {x: 0, y: 0}; 
       
        //alert("Game Over. Press any key to play again!");
        var newButton = document.createElement("button");
        newButton.innerHTML = "View Progress" ;
        newButton.id="button1";
        newButton.className="button1";
        newButton.onclick = function() {
            modal.classList.add("open");
        };
        var body = document.getElementsByTagName("div")[0];
        body.appendChild(newButton);

        
        
        // Send an AJAX request to the PHP script to save the score
        final=score;
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'snakedb.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
        if (xhr.status === 200 && xhr.responseText !== 'Error') {
            console.log(xhr.responseText);
        } else {
            console.log('Error: ' + xhr.statusText);
        }
        };
        xhr.send('score=' + encodeURIComponent(final));
        snakeArr = [{x: 13, y: 15}];
        musicSound.play();
        score = 0; 

        xhr.onreadystatechange = function() {
            //xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        
                 if (this.readyState == 4 && this.status == 200) {
                var progress1 = this.responseText;
                var avg1=parseFloat(progress1);
                progress3.textContent = "Your Average Score is "+ avg1 ;
                console.log(avg1);
                if(isNaN(avg1)){
                    console.log(final);
                    console.log(avg1);
                    progress3.remove();
                    notEnoughData.textContent = "We Don't Have Enough Data, Please play more!";
                    progressing.remove();
                    Notprogress.remove();
    
                
                }
                else if(final>=avg1){
                    console.log(avg1);
                    console.log(final);
                    progressing.textContent ="You are Progressing";
                    Notprogress.remove();
                    notEnoughData.remove();
                }
                else{
                    console.log(final);
                    console.log(avg1);
                    Notprogress.textContent = "You are Not Progressing!";
                    progressing.remove();
                    notEnoughData.remove();
                }
             
            }
            //xhttp.open("GET", "numgame.php?progress1=" + encodeURIComponent(avg1), true);
           
                
            };
            xhr.send('progress1'+ encodeURIComponent(avg1));

            
            
    }
    

    
    

    // If you have eaten the food, increment the score and regenerate the food
    if(snakeArr[0].y === food.y && snakeArr[0].x ===food.x){
        foodSound.play();
        score += 1;
        /* if(score>hiscoreval){
            hiscoreval = score;
            localStorage.setItem("hiscore", JSON.stringify(hiscoreval));
            hiscoreBox.innerHTML = "HiScore: " + hiscoreval;
        } */
        
        scoreBtn.innerHTML="Score: " + score;
        Score.textContent = "Score: " + score;
        

        // Add the new button to the HTML document
        
       
        
        snakeArr.unshift({x: snakeArr[0].x + inputDir.x, y: snakeArr[0].y + inputDir.y});
        let a = 2;
        let b = 16;
        food = {x: Math.round(a + (b-a)* Math.random()), y: Math.round(a + (b-a)* Math.random())}
    }
   

    // Moving the snake
    for (let i = snakeArr.length - 2; i>=0; i--) { 
        snakeArr[i+1] = {...snakeArr[i]};
    }

    snakeArr[0].x += inputDir.x;
    snakeArr[0].y += inputDir.y;

    // Part 2: Display the snake and Food
    // Display the snake
    board.innerHTML = "";
    snakeArr.forEach((e, index)=>{
        snakeElement = document.createElement('div');
        snakeElement.style.gridRowStart = e.y;
        snakeElement.style.gridColumnStart = e.x;

        if(index === 0){
            snakeElement.classList.add('head');
        }
        else{
            snakeElement.classList.add('snake');
        }
        board.appendChild(snakeElement);
    });
    // Display the food
    foodElement = document.createElement('div');
    foodElement.style.gridRowStart = food.y;
    foodElement.style.gridColumnStart = food.x;
    foodElement.classList.add('food')
    board.appendChild(foodElement);


}


// Main logic starts here

/* let hiscore = localStorage.getItem("hiscore");
if(hiscore === null){
    hiscoreval = 0;
    localStorage.setItem("hiscore", JSON.stringify(hiscoreval))
}
else{
    hiscoreval = JSON.parse(hiscore);
    hiscoreBox.innerHTML = "HiScore: " + hiscore;
} */
  //var xhttp = new XMLHttpRequest();
  //var xhr = new XMLHttpRequest();
  //xhr.open('POST', 'snakedb.php');
  
window.requestAnimationFrame(main);
window.addEventListener('keydown', e =>{
    if(!document.getElementById('button1')){
    inputDir = {x: 0, y: 1}
    musicSound.play(); // Start the game
    moveSound.play();
    switch (e.key) {
        case "ArrowUp":
            console.log("ArrowUp");
            inputDir.x = 0;
            inputDir.y = -1;
            break;

        case "ArrowDown":
            console.log("ArrowDown");
            inputDir.x = 0;
            inputDir.y = 1;
            break;

        case "ArrowLeft":
            console.log("ArrowLeft");
            inputDir.x = -1;
            inputDir.y = 0;
            break;

        case "ArrowRight":
            console.log("ArrowRight");
            inputDir.x = 1;
            inputDir.y = 0;
            break;
        default:
            break;
    }
    //window.addEventListener('keydown', handleKeyDown);
}
    
});



