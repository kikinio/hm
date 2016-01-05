src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js";
//var word = 'Antigua. And; (Barbuda)'.toUpperCase();
//word = word1;
console.log(word);
replaceSymbols();
function replaceSymbols (){
	word = word.replace(/\s/g, "-");
	word = word.replace(";", "");
	word = word.replace(".", "");	
}
var e = document.getElementById("setLives");
var initialLives = e.options[e.selectedIndex].value;

function selectLives() {
	e = document.getElementById("setLives");
	initialLives = e.options[e.selectedIndex].value;
	lives = initialLives;
	document.getElementById("livesMessage").innerHTML = "You have " + initialLives + " lives left!";
	document.getElementById("setLives").style.pointerEvents = "none";
//	word = <?php echo json_encode( array( "dbWord"=>$newVar )); ?>
	
//	word = document.getElementById("1234").getAttribute("title");
//	word = word.toUpperCase();
	console.log(word);
	replaceSymbols();
	len = word.length;
	console.log(len);
	currentWord = nwordbox();
	document.getElementById("nword").innerHTML = currentWord;
	consLObjAll();
	consL();
	return initialLives;
}
//initialLives = selectLives();
console.log("initialLives");
var lives = initialLives;
var numPic = 5;
changePic();
console.log("word:", word);
console.log(word);
console.log("lives");
console.log(lives);
var len = word.length;
var currentWord = nwordbox();
document.getElementById("nword").innerHTML = currentWord;
document.getElementById("livesMessage").innerHTML = "You have " + lives + " lives left!";
var numPic = changePic();
//var car = {type:"Fiat", model:"500", color:"white"};
//document.getElementById("demo").innerHTML = car.type;
var chgPicIndicator = 0;
var objectsAll = {word: word, initialLives: initialLives, lives: lives, len: len, currentWord: currentWord, numPic: numPic, chgPicIndicator: chgPicIndicator};
consLObjAll();
consL();
function nwordbox(){
console.log(len);
var currentWord = '';
	for (var i = 0; i < len; i++){
		currentWord += "*";
		console.log("curWord");
		console.log(currentWord);
	}
currentWord = showSymbols(currentWord, "-");
currentWord = showSymbols(currentWord, "(");
currentWord = showSymbols(currentWord, ")");
//consLObjAll();
//consL();
return currentWord;
}
// show dashes "-" or brackets "()" if they exist in the word
function showSymbols(currentWord, symbol){
	if (!(word.indexOf(symbol)=== -1)){
		for (var j = 0; j < len; j++) {
			if (symbol === word[j]){
			currentWord = currentWord.substring(0, j) + symbol + currentWord.substring(j+1);
			}
		}
	}	
	return currentWord;
}
function cli1(letter){
	console.log(letter);

	document.getElementById("test").innerHTML = letter;
	var e = document.getElementById("setLives");
	var initialLives = e.options[e.selectedIndex].value;
	//verification(letter, currentWord);
	currentWord = verification(letter, currentWord);
//	initialLives = selectLives();
//	lives = initialLives;
//	numPic = changePic();
	consLObjAll();
	consL();
}
function verification(letter, cw){
	console.log(word);
	console.log(word.indexOf(letter)===-1);
	console.log(word.indexOf(letter));
	document.getElementById("setLives").style.pointerEvents = "none";
	document.getElementById(letter).disabled = 1;
    if (word.indexOf(letter)=== -1){		
		lives -= 1;
		changePic();
		chgPicIndicator = 1;
	}else{
		chgPicIndicator = 0;
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
//      changePic();
		document.getElementById("livesMessage").innerHTML = "GAME LOST!!! THE WORD IS: " + word.toUpperCase();
		document.getElementById("buttons").style.color="red";
		document.getElementById("buttons").style.pointerEvents = "none";
        break;
    default:
		//changePic();
        document.getElementById("livesMessage").innerHTML = "You have " + lives + " lives left!";
	}
	}
//	consLObjAll();
//	consL();
	return cw;
}
function changePic(){
		numPic = initialLives - lives+1;
		document.getElementById("picture").src="images/lives" + initialLives + "/ss" + numPic + ".gif";
//		consLObjAll();
//		consL();
		return numPic;
}
function consL(){
	
	console.log("word:", word, "initialLives:", initialLives, "lives:", lives, "len:", len, "currentWord:", currentWord, "numPic:", numPic);
}
function consLObjAll(){
	objectsAll = {word: word, initialLives: initialLives, lives: lives, len: len, currentWord: currentWord, numPic: numPic, chgPicIndicator: chgPicIndicator};
	console.log(objectsAll.word);
	console.log(objectsAll);
	sendObjAll(objectsAll);
}

function sendObjAll(objectsAll){
	$.ajax({
	  url: "objecttodb.php",
	  async: true,
	  method: "POST",
	  data: JSON.stringify(objectsAll),
//	  data: 'objectsAll' + encodeURIComponent(objectsAll),
//	  data: { objectsAll: objectsAll },
	  dataType: "json",
	  success:(function(data) {
		  word11 = data.word;
		$("#1234").attr({
			"title" : word11
		});
		})
	});
}

/*
function getWord(str, callback){
	$.ajax({
	  url: "getword.php",
	  async: true,
	  method: "POST",
	  data: { q: str },
	  dataType: "json",
	  success:(function(data) {
		word = data.dbWord;
		callback(word);
		$("#1234").attr({
			"title" : word
		});
	  })
	});
}

var json_obj_2 = [
    {
    "word1":"John",
    "initialLives2":"Doe",
    "lives3":"Anna",
    "len4":"Smith",
    "currentWord5":"Peter",
    "numPic6":"Jones"
    }
];
*/
//var obj3 = {"id":21,"children":555};
