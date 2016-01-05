<?php

?>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
    <h1 id="12345">Game in Progress</h1>
    <p id='progress'></p>
<script>
    var temp1 = 1;
    receiveObjAll(temp1);
    function receiveObjAll(objectsAll){
	$.ajax({
	  url: "objectfromdb.php",
	  async: true,
	  method: "POST",
//	  data: JSON.stringify(objectsAll),
//	  data: 'objectsAll' + encodeURIComponent(objectsAll),
	  data: { objectsAll: objectsAll },
	  dataType: "json",
/*
            success:(function(data) {
		  word11 = data.word;
                  console.log(word11);
		$("#12345").attr({
			"title" : word11
*/                        
	  success:(function(data) {
		  word11 = data.word;
                  $( "body" )                       
                  .append( "user_word_pointer: " + data.user_word_pointer )                       
                  .append( "</br>user_word_guesser: " + data.user_word_guesser )
                  .append( "</br>word: " + data.word )
                  .append( "</br>initial_lives: " + data.initial_lives )
                  .append( "</br>You have " + data.lives + " lives left! ")
                  .append( "</br>word_length: " + data.word_length )
                  .append( "</br>current_word: " + data.current_word )
                  .append( "</br>num_pics: " + data.num_pics )
		})
		})

          }
    
/*    
    function send(){
    $.get( "test.php", function( data ) {
        $( "body" )
            .append( "Name: " + data.name ) // John
            .append( "Time: " + data.time ); //  2pm
    }, "json" );
}
*/    
    
    
</script>
</body>
</html>