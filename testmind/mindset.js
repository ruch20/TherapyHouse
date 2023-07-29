const form = document.getElementById('mindset-form');
var result = document.getElementById('result');
var result2 = document.getElementById('result2');


form.addEventListener('submit', (event) => {
  event.preventDefault();

  // Get the value of each question and add to total score
  const question1 = parseInt(document.getElementById('question1').value);
  const question2 = parseInt(document.getElementById('question2').value);
  const question3 = parseInt(document.getElementById('question3').value);
  const question4 = parseInt(document.getElementById('question4').value);
  const question5 = parseInt(document.getElementById('question5').value);
  const question6 = parseInt(document.getElementById('question6').value);
  const question7 = parseInt(document.getElementById('question7').value);
  const question8 = parseInt(document.getElementById('question8').value);
  const question9 = parseInt(document.getElementById('question9').value);
  const question10 = parseInt(document.getElementById('question10').value);
  const totalScore = question1 + question2 + question3 + question4 + question5 + question6 + question7 + question8 + question9 + question10;
  const score=30;
  const percent = (totalScore/score)*100;
  const fixedvar=percent.toFixed(2);

  // Determine mindset based on total score
  /* let mindset = '';
  if (totalScore < 18) {
    mindset = 'fixed';
  } else {
    mindset = 'growth';
  } */

  if(parseInt(fixedvar)< 50){
    mindset = 'Fixed mindset';    

  }else if(parseInt(fixedvar) > 50 && parseInt(fixedvar) < 70){
    mindset = 'Growth mindset but you can improve';

  }
  else{
    mindset = 'Growth mindset';

  }

  // Display the result
  result.textContent = `${fixedvar}%.`;
  result2.textContent= ` You have a ${mindset}.`;

  // Reset the form
  form.reset();
});
