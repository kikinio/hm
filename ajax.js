function sendSessionData(sessionData){
	$.ajax({
	  url: "sessiondatatodb.php",
	  async: true,
	  method: "POST",
	  data: JSON.stringify(sessionData),
	  dataType: "json",
	});
}

var sessionData = {userEmail: userEmail, userName: userName, sessionBeginEnd: sessionBeginEnd, sessionStatus: sessionStatus};
sendSessionData(sessionData);