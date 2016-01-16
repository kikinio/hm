<?php
session_start();
if(!$_SESSION['email'])
{
    header("Location: login.php");//redirect to login page to secure the welcome page without login access.
}
    $sessionStatus = "Active";
if(!isset($_GET['oe']))
{
    include('getword.php');
}else{
    $oppEml = $_GET['oe'];
    include('getwordopponet.php');
}
?>
<html>
<?php
include('head.php');
?>
<body>
<div class="wrapper0">
   <h1 id="1234">Hangman Game</h1>
   <h3>Welcome
        <?php
        echo $_SESSION['email'];
        ?>
   </h3><br>
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

    <p id="test"></p>
    <p id="test1"></p>
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

<FORM>
<INPUT Type="button" VALUE="Reset Game" onClick="history.go(0)">
</FORM>

</div>
<script>
var userWordPointer = '<?php echo $oppEml; ?>';
var word = '<?php echo $newVar; ?>'.toUpperCase();
var userGuesser = '<?php echo $_SESSION['email']; ?>';
var userName = '<?php echo $_SESSION['userName']; ?>';
var userEmail = '<?php echo $_SESSION['email']; ?>';
var sessionBeginEnd = '<?php echo date('U'); ?>';
var sessionStatus = '<?php echo $sessionStatus; ?>';
</script>
<script src="gamelogic.js">
</script>
<script src="ajax.js">
</script>
</body>
</html>