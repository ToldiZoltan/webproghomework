<?php 
//cookie
$cookie_name = "user";
$cookie_value = "User";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>
<?php
echo "Cookie: ";
print_r($_COOKIE);
echo "<p></p>";
if(!isset($_COOKIE[$cookie_name]))
echo "Cookie named '" . $cookie_name . "' is not set!";
else {
echo "Cookie '" . $cookie_name . "' is set!<br>";
echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>
</body>
</html>

<html>
<body>
<?php
if (isset($_POST['email'])) {
$email = $_POST['email'] ;
$subject = $_POST['subject'] ;
$message = $_POST['message'] ;
mail( "Contact@kavewebshoptzkp.webtelek.hu", "Subject: $subject", $message, "From: $email" );
echo "Thank you for your message.";
} else {
echo "<form method='post' action='?page=mailform'>
Email: <input name='email' type='text'><br>
Subject: <input name='subject' type='text'><br>
Message:<br>
<textarea name='message' rows='15' cols='40'>
</textarea><br>
<input type='submit' value='Send'>
</form>";
}
?>
</body>
</html>
<strong>Session Storage:</strong>
<br>
<html>
<body>
<script type="text/javascript">
if( sessionStorage.hits )
sessionStorage.hits = Number(sessionStorage.hits) +1;
else
sessionStorage.hits = 1;
document.write("Total Hits :" + sessionStorage.hits );
</script>
</body>
</html>
<br>
<strong>Local Storage:</strong>
<br>
<html>
<body>
<script type="text/javascript">
if( localStorage.hits )
localStorage.hits = Number(localStorage.hits) +1;
else
localStorage.hits = 1;
document.write("Total Hits :" + localStorage.hits );
</script>
</body>
</html>
<br>
<strong>Web Workers</strong>
<br>
<html>
<head>
<script>
function bigLoop(){
for (var i = 0; i <= 1000000000; i += 1)
var j = i;
alert("Completed " + j + "iterations" );
}
function sayHello(){
alert("Hello sir...." );
}
</script>
</head>
<body>
<input type="button" onclick="bigLoop();" value="Big Loop">
<input type="button" onclick="sayHello();" value="Say Hello">
</body>
</html>
<br>
<strong>Geolocation:</strong>
<br>
<html>
<body onload="myFunction()">
	<button onclick="getLocation()">Geolocation</button>
	<p id="demo"></p>
	<script>	
		var x = document.getElementById("demo");
		function getLocation()  {
			if (navigator.geolocation)
				navigator.geolocation.getCurrentPosition(showPosition);
			else 
				x.innerHTML = "Geolocation is not supported by this browser.";
		}
		function showPosition(position)  {
			x.innerHTML = "Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude;	
		}
	</script>
</body>
</html>
<strong>Server Sent Events</strong>
<br>
<html>
<body>
	<div id="result"></div>
	<script>
		if(typeof(EventSource) !== "undefined") {
			var source = new EventSource("demo_sse.php");
			source.onmessage = function(event) {
				document.getElementById("result").innerHTML += event.data + "<br>";
			};
		} else
			document.getElementById("result").innerHTML = "Sorry, your browser does not support server-sent events...";
	</script>
</body>
</html>
<br>
<strong>Canvas:</strong>
<br>
<html>
   <head>
      <style>
         #mycanvas{border:1px solid red;}
      </style>
   </head>
   <body>
        <canvas id="mycanvas" width="100" height="100"></canvas>
   </body>
</html>

<br>
<strong>svg:</strong>
<br>
<html>
<body>
	<svg width="100" height="100">
	  <circle cx="50" cy="50" r="40" stroke="green" stroke-width="4" fill="yellow" />
	</svg>
	<svg width="400" height="100">
	  <rect width="400" height="100" style="fill:rgb(0,0,255);stroke-width:10;stroke:rgb(0,0,0)" />
	</svg>
	<svg width="400" height="180">
	  <rect x="50" y="20" rx="20" ry="20" width="150" height="150" style="fill:red;stroke:black;stroke-width:5;opacity:0.5" />
	</svg>
	<svg width="300" height="200">
	   <polygon points="100,10 40,198 190,78 10,78 160,198" style="fill:lime;stroke:purple;stroke-width:5;fill-rule:evenodd;" />
	</svg>
	<svg height="130" width="500">
		<defs>
		 <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
			<stop offset="0%" style="stop-color:rgb(255,255,0);stop-opacity:1" />
			<stop offset="100%" style="stop-color:rgb(255,0,0);stop-opacity:1" />
		 </linearGradient>
		</defs>
		<ellipse cx="100" cy="70" rx="85" ry="55" fill="url(#grad1)" />
		<text fill="#ffffff" font-size="45" font-family="Verdana" x="50" y="86">
		 SVG
		</text>
		Sorry, your browser does not support inline SVG.
	</svg>
</body>
</html>

<br>
<strong>Drag and Drop:</strong>
<br>
<html>
<head>
	<style>
		#div1, #div2 {float:left; width:350px; height:250px; margin:10px;padding:10px;border:1px solid #aaaaaa;}
	</style>
	<script>
		function allowDrop(ev) {
			ev.preventDefault();
		}

		function drag(ev) {
			ev.dataTransfer.setData("text", ev.target.id);
		}

		function drop(ev) {
			ev.preventDefault();
			var data = ev.dataTransfer.getData("text");
			ev.target.appendChild(document.getElementById(data));
		}
	</script>
</head>
<body>
	<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
		<img src="./gallery/A_small_cup_of_coffee.jpg" draggable="true" ondragstart="drag(event)" id="drag1" width="200" height="150">
	</div>
	<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
</body>
</html>

