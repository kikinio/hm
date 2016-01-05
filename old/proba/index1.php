<html>
    <head>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    </head>
<body>
<h1 id="1234">title</h1>
<h2 id="12345">w</h2>
<script>
var word = '123';
//getWord(155);
function getWord(str, callback){
	$.ajax({
	  url: "getword1.php",
	  async: false,
	  method: "POST",
	  data: { q: str },
	  dataType: "json",
	  success:(function(data) {
		word = data.dbWord;
		callback(word);
		$("#1234").attr({
			"title" : word
		});
	//	console.log(word);
	  })
	});
}

getWord(155, onComplete);
console.log(word);
/*
function getWord(str, callback){
    $.post( "getword1.php", {q: str}, function( data ) {
	word = data.dbWord;
	console.log(word);
	callback(word);
    }, "json" );
}
*/
function onComplete(a){
	word = a;
//    document.h2.innerHTML = a;
}
/*
getWord(120, onComplete);
*/
var proba = 'abc';
console.log(proba);
proba = document.getElementById("1234").getAttribute("title");

console.log(proba);


</script>
</body>
</html>