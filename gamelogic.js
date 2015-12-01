var word = 'liverpool';

//var initialLives = document.getElementById("uniqueID").value;
var initialLives = document.getElementById("setLives").value;
console.log("initialLives");


var lives = initialLives;
changePic();
console.log("word");
console.log(word);
console.log("lives");
console.log(lives);
var len = word.length;
var currentWord = nwordbox();
document.getElementById("nword").innerHTML = currentWord;
document.getElementById("livesMessage").innerHTML = "You have " + lives + " lives left!";
function nwordbox(){
console.log(len);
var currentWord = '';
for (var i = 0; i < len; i++){
	currentWord += "*";
	console.log("curWord");
	console.log(currentWord);
}
return currentWord;
}
function cli1(letter){
	console.log(letter);

	document.getElementById("test").innerHTML = letter;
	//verification(letter, currentWord);
	currentWord = verification(letter, currentWord);
}
function verification(letter, cw){
	console.log(word);
	console.log(word.indexOf(letter)===-1);
	console.log(word.indexOf(letter));
	document.getElementById(letter).disabled = 1;
    if (word.indexOf(letter)=== -1){
		
		lives -= 1;
		changePic();
		if (lives === 0){
	
		}
	}else{
	for (var j = 0; j < len; j++) {
		if (letter === word[j]){
		cw = cw.substring(0, j) + letter + cw.substring(j+1);
		console.log(cw);
		document.getElementById("nword").innerHTML = cw;
		}
	}
	}
	if (cw === word){
		document.getElementById("livesMessage").innerHTML = "YOU WON THE GAME!!!";
		document.getElementById("buttons").style.pointerEvents = "none";
	}else{
	switch(lives) {
    case 0:
        changePic();
		document.getElementById("livesMessage").innerHTML = "GAME LOST!!!";
		document.getElementById("buttons").style.color="red";
		document.getElementById("buttons").style.pointerEvents = "none";
        break;
    default:
		//changePic();
        document.getElementById("livesMessage").innerHTML = "You have " + lives + " lives left!";
	}
	}
	return cw;
}
function changePic(){
		var numPic = initialLives - lives+1;
		document.getElementById("picture").src="images/lives" + initialLives + "/ss" + numPic + ".gif";
}