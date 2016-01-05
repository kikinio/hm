<html>
<head>
 <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
</head>
<body>
<div class="wrapper0">
   <h1>Hangman Game</h1>
   <h3><a href="logout.php">Logout here</a> </h3>
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
    <div class="panel-heading">
	<div id="picture1">PIC</div>
	<div id="buttons">klk
	<button id = "a" onclick='cli1("a")'>a</button>
	<button id = "b" onclick='cli1("b")'>b</button>
	<button id = "c" onclick='cli1("c")'>c</button>
	<button id = "d" onclick='cli1("d")'>d</button>
	<button id = "e" onclick='cli1("e")'>e</button>
	<button id = "f" onclick='cli1("f")'>f</button>
	<button id = "g" onclick='cli1("g")'>g</button>
	<button id = "h" onclick='cli1("h")'>h</button>
	<button id = "i" onclick='cli1("i")'>i</button>
	<button id = "j" onclick='cli1("j")'>j</button>
	<button id = "k" onclick='cli1("k")'>k</button>
	<button id = "l" onclick='cli1("l")'>l</button>
	<button id = "m" onclick='cli1("m")'>m</button>
	<button id = "n" onclick='cli1("n")'>n</button>
	<button id = "o" onclick='cli1("o")'>o</button>
	<button id = "p" onclick='cli1("p")'>p</button>
	<button id = "q" onclick='cli1("q")'>q</button>
	<button id = "r" onclick='cli1("r")'>r</button>
	<button id = "s" onclick='cli1("s")'>s</button>
	<button id = "t" onclick='cli1("t")'>t</button>
	<button id = "u" onclick='cli1("u")'>u</button>
	<button id = "v" onclick='cli1("v")'>v</button>
	<button id = "w" onclick='cli1("w")'>w</button>
	<button id = "x" onclick='cli1("x")'>x</button>
	<button id = "y" onclick='cli1("y")'>y</button>
	<button id = "z" onclick='cli1("z")'>z</button>
	</div>
</div>
</div>
<div>
<p id=livesMessage></p>
</div>

<script src="gamelogic.js">
</script>
</body>
</html>