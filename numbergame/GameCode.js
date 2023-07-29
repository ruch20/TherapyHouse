var msg1 = document.getElementById("message1");
var msg2 = document.getElementById("message2");
var msg3 = document.getElementById("message3");
var score = document.getElementById("score");
var progress3 = document.getElementById("progress3");
var progressing = document.getElementById("progressing");
var Notprogress = document.getElementById("Notprogress");
var notEnoughData= document.getElementById("notEnoughData");
var guessbtn= document.getElementById("my_btn");
var guesstxt= document.getElementById("guess");


var avg1=0;
var final = 0;
var prog=0;
const openbutton = document.getElementById("button1");
const closebutton = document.getElementById("closeModal");
const modal = document.getElementById("modal");

var answer = Math.floor(Math.random()*100) + 1;
var no_of_guesses = 0;
var guessed_nums = [];
guesstxt.addEventListener('keypress', (event) => {
    // Check if the key pressed was the Enter key
    if (event.key === 'Enter') {
      // Trigger a click event on the button
      guessbtn.click();
      

    }
  });

function play(){
    var user_guess = document.getElementById("guess").value;
    if(user_guess < 1 || user_guess > 100){
        alert("Please enter a number between 1 and 100.");
    }
    else{
        guessed_nums.push(user_guess);
        no_of_guesses+= 1;

        if(user_guess < answer){
            msg1.textContent = "Your guess is too low.";
            msg2.textContent = "No. of guesses: " + no_of_guesses;
            msg3.textContent = "Guessed numbers are: " +
            guessed_nums;
        }
        else if(user_guess > answer){
            msg1.textContent = "Your guess is too high.";
            msg2.textContent = "No. of guesses: " + no_of_guesses;
            msg3.textContent = "Guessed numbers are: " +
            guessed_nums;
        }
        else if(user_guess == answer){
            msg1.textContent = "Yippie You Win!!";
            msg2.textContent = "The number was: " + answer;
            msg3.textContent = "You guessed it in "+ no_of_guesses + " guesses";
            document.getElementById("my_btn").disabled = true;
            final=no_of_guesses;
            score.textContent = "Your Score is "+ final ;
            console.log(final);
            // Send an AJAX request to the PHP script to save the score
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'numgame.php');
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
            if (xhr.status === 200 && xhr.responseText !== 'Error') {
                console.log(xhr.responseText);
            } else {
                console.log('Error: ' + xhr.statusText);
            }
            };
            xhr.send('score=' + encodeURIComponent(final));
            
        // Create a new button element
        var newButton = document.createElement("button");
        newButton.innerHTML = "View Progress" ;
        newButton.id="button1";
        newButton.onclick = function() {
            modal.classList.add("open");
          };
        // Add the new button to the HTML document
        var body = document.getElementsByTagName("div")[0];
        body.appendChild(newButton);

        //var xhttp = new XMLHttpRequest();
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
            else if(final<avg1){
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
       
        
        closebutton.addEventListener("click", () => {
            modal.classList.remove("open");
        });
                
        }
        
    }
   
}
