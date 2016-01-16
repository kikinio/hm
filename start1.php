<?php


session_start();

if(!$_SESSION['email'])
{
    header("Location: login.php");//redirect to login page to secure the welcome page without login access.
    
}
//    include("getword.php");
    $sessionStatus = "Active";
    $userEmail = $_SESSION['email'];
//    print_r(session_id());
//    print_r($_SESSION);
    
    
    
    
?>
<html>
<head>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
<div>
   <h1>Hangman Game Start Page</h1>
</div>
<div>
    <h1>Welcome
        <?php
        echo $_SESSION['email'];
        ?>
   </h1><br>
    <p><a href="admin_login.php">Admin Login</a></p>
    <p><a href="login.php">User Login</a></p>
    <p><a href="registration.php">Register Now</a></p>
    <p><a href="logout.php">Log Out</a></p>
    <p><a href="delete.php">Delete</a></p>
    <p><a href="view_users.php">View Users</a></p>
    <p><a href="welcome.php">Welcome</a></p>
    
    <p>Play Against Other Online Users:</p>
    
        <div>
            <form action="gamerequest.php" method="post">
                <fieldset>
                    <legend>Play as Word Chooser:</legend>
                    <div>
                        <div>
                            Select word from DataBase:<br>
                            <input type="text" name="selWord" onkeyup="selectWord(this.value)"/>
                            </br>
                            <input type="hidden" name="email" value="<?php echo $_SESSION['email'] ?>">
                        <div id="results">Suggested words from DataBase will appear here...</div>
                        </div>
                    </div>
                    <div>
                    <input type="submit" value="Submit" onClick="history.go(0)">
                    </div>
                </fieldset>
            </form>
        </div>
    
</div>      
        <div id="wordchoosers0" name="wordchoosers0" onmouseover="wordChooser()">See HERE The Online Word Choosers:</div>
    <div id="wordchoosers"></div>
        <script type="text/javascript">
            function wordChooser(){
                $.ajax({
                  url: "showwordchoosers.php",
                  async: true,
                  method: "POST",
                  dataType: "json",
                  success:(function(data) {
                        $("#wordchoosers").empty();
                        $.each(data, function(i, object) {
                        $.each(object, function(property, value) {
                        //$("#wordchoosers").append( "</br>Player: <a href='" + value + "' onclick="startGame(koko@gmail.com)>" + value + "</a>");
                        //$("#wordchoosers").append( "</br>PlFayer: <a href='welcome.php' onclick='startGame(koko@gmail.com)'>" + value + "</a>");
                        if(value !== userEmail){
                        $("#wordchoosers").append( "</br>Player: <a href='index.php?oe="+ value +"' onclick='startGame(" + value + ")'>" + value + "</a>");
                        }
                        })
                    });
                    })  
                })
            }
 


        </script>
  

    <FORM>
        <INPUT Type="button" VALUE="As Word Guesser" onClick="history.go(0)">
    </FORM>


</div>
    <script>
    function selectWord(value){
        
	$.ajax({
	  url: "selectword.php",
	  async: true,
	  method: "POST",
	  data: { partialWord: value},
	  dataType: "json",
	  success:(function(data) {
                $("#results").empty();
                $.each(data, function(i, object) {
                $.each(object, function(property, value) {
                $("#results").append( "</br>suggested word: " + value );
                })
            });
            })  
        })
    }
        var userGuesser = '<?php echo $_SESSION['userName']; ?>';
        var userName = '<?php echo $_SESSION['userName']; ?>';
        var userEmail = '<?php echo $_SESSION['email']; ?>';
        var sessionBeginEnd = '<?php echo date('U'); ?>';
        var sessionStatus = '<?php echo $sessionStatus; ?>';
        </script>
        <script src="ajax.js">
        </script>
</body>
</html>