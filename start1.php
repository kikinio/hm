<html>
<head>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
<div>
   <h1>Hangman Game Start Page</h1>
</div>
<div>
    <p><a href="admin_login.php">Admin Login</a></p>
    <p><a href="login.php">User Login</a></p>
    <p><a href="registration.php">Register Now</a></p>
    <p><a href="logout.php">Log Out</a></p>
    <p><a href="delete.php">Delete</a></p>
    <p><a href="view_users.php">View Users</a></p>
    <p><a href="welcome.php">Welcome</a></p>
    
    <p>Play Against Other Online Users:</p>
    <FORM>
        <div>
        <INPUT Type="button" VALUE="As Word Chooser" onClick="history.go(0)">
        </div>
        <div>
            <div>
                <input type="text" onkeyup="selectWord(this.value)"/>
                </br>
                <div id="results">test</div>
            </div>
        </div>
    </FORM>

    <FORM>
        <INPUT Type="button" VALUE="As Word Guesser" onClick="history.go(0)">
    </FORM>


</div>
    <script>
        /*
    function selectWord(value){
        $post("selectword.php",{partialWord:value}, function(data){
            $("#results").html(data);    
        });
    }
*/
    function selectWord(value){
        
	$.ajax({
	  url: "selectword.php",
	  async: true,
	  method: "POST",
//	  data: JSON.stringify(objectsAll),
//	  data: 'objectsAll' + encodeURIComponent(objectsAll),
	  data: { partialWord: value},
	  dataType: "json",
/*
            success:(function(data) {
		  word11 = data.word;
                  console.log(word11);
		$("#12345").attr({
			"title" : word11
*/         

/*
	  success:(function(data) {
		  word11 = data.word;
                  $( "body" )                       
                  .append( "</br>word_length: " + data )
		})
        })
    }    
*/

	  success:(function(data) {
                $("#results").empty();
                $.each(data, function(i, object) {
                $.each(object, function(property, value) {
                
                $("#results").append( "</br>suggested word: " + value );
//                $("#results").append( "</br>suggested word: " + value );
        
                //$( "body" )                       
                //    .append( "</br>suggested word: " + value )
                //alert(property + "=" + value);
                })
            });
            })  
        })
    }

        /*
              
//                  word111 = JSON.parse(data);
                  word11 = word111.countrylist[0].word;
                  word11 = data["data"][0]["ID"];
                  console.log(word11);
                   $( "body" ).append( "user_word_pointer: " + word11 );
//		  word11 = data.countrylist[0].word;
      //            $( "#results" )                       
      //            .append( "</br>word: " + data.word )
          		$("#results").attr({
			"title" : word11
		});
                
                */
  
          
          
  //        http://stackoverflow.com/questions/2487841/jquery-parse-json-multidimensional-array
          
          
//            var json = {"forum":[{"id":"1","created":"2010-03-19 ","updated":"2010-03-19 ","user_id":"1","vanity":"gamers","displayname":"gamers","private":"0","description":"All things gaming","count_followers":"62","count_members":"0","count_messages":"5","count_badges":"0","top_badges":"","category_id":"5","logo":"gamers.jpeg","theme_id":"1"}]};



          
           
           

      

      var json = '{' + 
'"peopleList":[' +
'{"id":1,"name":"marcelo","address":"rua meh","phone":"85 99999999"},'+
'{"id":2,"name":"marcelo2","address":"rua meh2","phone":"85 9999.9999"}]}';
//console.log(json);
var parsed = JSON.parse(json);
console.log(parsed);
var w = parsed.peopleList[0].name;
console.log(w);


    </script>
    
</body>
</html>