<html>
    <head>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    </head>
<body>
<!--
<button onclick="getWord(10);">Send</button>
-->
<script>
/*
function send(str){
    $.post( "getword1.php", str, function( data ){
        $( "body" ).append( "Name: " + data.name ) // John
    }, "json" );
}
*/
//var ss = getWord(11);
//console.log(ss);

/*
function send(pp){
	$.post( "getword1.php", {q: pp}, function( data ) {
		console.log(data.dbWord);
		return data.dbWord;
    }, "json" );
//	return data.dbWord;
}
*/
var word = '123';

function getWord(str, callback){
    $.post( "getword1.php", {q: str}, function( data ) {
//	console.log(data.dbWord);
	word = data.dbWord;
//	callback(word);
	console.log(word);
//	return data.dbWord;
	callback(word);
//	return callback(word);

    }, "json" );

}
/*
word = getWord(120,function(num){
//	console.log(num);
	word = num;
	return num;
})
*/
function onComplete(a){
	word = a;
//	return word;
    document.body.innerHTML = a;
}
getWord(120, onComplete);
//document.body.innerHTML = word;
//console.log(word);
/*
function abc1(param1){
//	console.log(param1);
	word = param1;
	return word;
}
*/
//word = '123';
//word = getWord(120, abc1(num));
//console.log(word);


</script>
</body>
</html>