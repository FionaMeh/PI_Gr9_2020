<!DOCTYPE html>
<html>
    <head>

		<script src="clock.js"></script>
		<link rel="stylesheet" href="clock.css">
		<!--Nderrimi i background varesisht se a eshte nate apo dite-->
	<script>
    	function dayandnight(){
    		var current = new Date();
    		var day_night= current.getHours();
    		if(day_night<12){
    			var bodyColor=document.getElementsByTagName("BODY")[0];
    			bodyColor.style.backgroundColor="white";
    			document.write("It is AM ");
    		}
    		else{
    			var bodyColor=document.getElementsByTagName("BODY")[0];
    			bodyColor.style.backgroundColor="rgb(44, 51, 58)";
    			document.write("It is PM");

    		}
}
    	</script>
	</head>
	<style>

		html, body {height:100%;}
		html {display:table; width:100%;}
		body {display:table-cell; text-align:center; vertical-align:middle;background-color:#ffffff;}
		</style>
		 <script>
			setTimeout(function () {
			   document.getElementById('clock').value = new Date();
		   }, 1000);
		   </script>
<body>
	<p>Time: <output id="clock"></output></p>
<!--Perdorimi i address-->
<address>
Address: Sunny Hill, Prishtina<br>	
</address>
<div><iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.5926651603654!2d21.164962014842946!3d42.64879462481199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ec1b6ecb2c1%3A0x7f0893730efce187!2sFakulteti%20Teknik!5e0!3m2!1sen!2s!4v1577569379636!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
<br>
<button onclick="getLocation()">GeoLocation</button>
<p id="demo"></p>
<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}
</script>

    <script type="text/javascript">dayandnight();
		 </script>
</body>
</html>
