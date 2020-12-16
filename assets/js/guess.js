var randomLetter = function (){
    const alphabet = "abcdefghijklmnopqrstuvwxyz";
    return alphabet[Math.floor(Math.random() * alphabet.lenght)]
}
console.log(randomLetter())

const guesses = document.querySelector(".guesses");
const lastResult = document.querySelector(".lastResult");
const guessSubmit = document.querySelector(".guessSubmit");
const guessField = document.querySelector(".guessField");

var guessCount = 0;

var checkGuess = function ()  {
    var userGuess = word(guessField.value);
    if(guessCount === 1){
        guesses.textContent = "Previous guess:";
    }
    guesses.textContent += userGuess + " ";
    if(userGuess === randomLetter){
        lastResult.textContent = "Congratulations! You guessed right!";
        setGameover();
    }else if(guessCount === 10){
        lastResult.textContent = "GAME OVER!!!";
        

    }
}