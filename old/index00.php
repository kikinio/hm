<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div id="serverData">Here is where the server sent data will appear</div>

<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
<div class="wrapper0">
   <h1 id="1234">Hangman Game</h1>
   <p>Use the alphabet below to guess the word.</p>
</div>
<div class="wrapper">
	<p>Select number of lives (optional):</p>
	<select id='setLives' onchange="selectLives()">
	  <option value="5">Select number of lives</option>
	  <option value="5">5</option>
	  <option value="4">4</option>
	  <option value="3">3</option>
	  <option value="2">2</option>
	  <option value="1">1</option>
	</select>
<!--	
	<input type="text" name="name" id="uniqueID" value="5" />
-->

    <p id="test">123</p>
    <p id="test1">1234</p>
	<div>PIC<img id="picture" alt="Hangman1" width="493" height="336"></div>
	<p id="nword"></p>
	<div id="picture1">PIC</div>
	<div id="buttons">klk
	<button id = "A" onclick='cli1("A")'>A</button>
	<button id = "B" onclick='cli1("B")'>B</button>
	<button id = "C" onclick='cli1("C")'>C</button>
	<button id = "D" onclick='cli1("D")'>D</button>
	<button id = "E" onclick='cli1("E")'>E</button>
	<button id = "F" onclick='cli1("F")'>F</button>
	<button id = "G" onclick='cli1("G")'>G</button>
	<button id = "H" onclick='cli1("H")'>H</button>
	<button id = "I" onclick='cli1("I")'>I</button>
	<button id = "J" onclick='cli1("J")'>J</button>
	<button id = "K" onclick='cli1("K")'>K</button>
	<button id = "L" onclick='cli1("L")'>L</button>
	<button id = "M" onclick='cli1("M")'>M</button>
	<button id = "N" onclick='cli1("N")'>N</button>
	<button id = "O" onclick='cli1("O")'>O</button>
	<button id = "P" onclick='cli1("P")'>P</button>
	<button id = "Q" onclick='cli1("Q")'>Q</button>
	<button id = "R" onclick='cli1("R")'>R</button>
	<button id = "S" onclick='cli1("S")'>S</button>
	<button id = "T" onclick='cli1("T")'>T</button>
	<button id = "U" onclick='cli1("U")'>U</button>
	<button id = "V" onclick='cli1("V")'>V</button>
	<button id = "W" onclick='cli1("W")'>W</button>
	<button id = "X" onclick='cli1("X")'>X</button>
	<button id = "Y" onclick='cli1("Y")'>Y</button>
	<button id = "Z" onclick='cli1("Z")'>Z</button>
	</div>
</div>
<div>
<p id=livesMessage></p>



<script type="text/javascript">
var num_pics3 = 1;
var initial_lives2 = 5;
//check for browser support
if(typeof(EventSource)!=="undefined") {
	//create an object, passing it the name and location of the server side script
	var eSource = new EventSource("send_sse.php");
	//detect message receipt
	eSource.onmessage = function(event) {
		//write the received data to the page
		var data1 = JSON.parse(event.data);
		console.log(data1);
		console.log(event.data);
                var user_word_pointer2 = data1.user_word_pointer;
                var user_word_guesser2 = data1.user_word_guesser;
		var word2 = data1.word;
		console.log(word2);
                var initial_lives2 = data1.initial_lives;
                var lives2 = data1.lives;
                var word_length2 = data1.word_length;
                var current_word2 = data1.current_word;
                var num_pics2 = data1.num_pics;
                var chgPicIndicator2 = data1.chgPicIndicator;
                var id2 = data1.id;
                console.log(chgPicIndicator2);
		//document.getElementById("serverData").innerHTML = event.data;
		document.getElementById("serverData").innerHTML = id2;
//                document.getElementById("picture").src="images/lives" + initial_lives2 + "/ss" + num_pics2 + ".gif";
                if (num_pics3 !== num_pics2){
                    document.getElementById("picture").src="images/lives" + initial_lives2 + "/ss" + num_pics2 + ".gif";
                    num_pics3 = num_pics2;
                }
                document.getElementById("nword").innerHTML = current_word2;
                
                if (current_word2 === word2){
                    document.getElementById("livesMessage").innerHTML = user_word_guesser2 + " WON THE GAME!!!";
                }else{
                    switch(lives2) {
                        case '0':
                        document.getElementById("livesMessage").innerHTML = "GAME LOST!!! THE WORD IS: " + word2;
                        break;
                    default:
                        document.getElementById("livesMessage").innerHTML = user_word_guesser2 + " has " + lives2 + " lives left!";
                    }
                }
                };
}
else {
	document.getElementById("serverData").innerHTML="Whoops! Your browser doesn't receive server-sent events.";
}




</script>

</body>
</html>