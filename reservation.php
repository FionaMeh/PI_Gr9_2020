<html>
<head> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<title>
		Expeditions
	</title>



<style>


	div.a
	{
	border :2px solid #FFCC00;
	padding:15px;
	height:900px;
	width:800px;
	border-radius:25px;
	margin-top:5%;
	margin-left:18%;
	font-family:Garamond;
	color:#FFCC00
	
	}
	img
	{	
	float:right;
	margin-top:-1%;
	}
	div#reservation
{
border:3px solid black;
height:690px;
width:700px;
border-radius:20px;
margin-left:25%;
margin-top:2.5%;
color:rgb(0,0,0);
font-size:17px;
text-align:left;
padding:50px;
}

img
{
	height:10%;
	size:40%;
	margin-top:-15%;
	margin-left:0%;
	float:right;
}



body{
padding:0;
margin:0;
	background:url(images/reservation.jpg);
		  background-attachment: fixed;
  background-size: cover;
	}

	
</style>

</head>


<body>

<div id="reservation">

<b>
<h1 style="text-align:center;">Expeditions</h1>
<!--Perdorimi i abbr-->
<a href="MainPage.php"><abbr title="Homepage"><img src="images/home.jpg"></a>

<form action="#" method="post" onsubmit="return validation();" >

Name  <input type="text" id="Name" style="border-radius: 7px; border: 2px solid #dadada;" required />
<br>
<br>
Lastname <input type="text" id="Lastname" style="border-radius: 7px; border: 2px solid #dadada;" required />
				<br>
				<br>
How many people?
<select name="How many people?" style="border-radius: 7px; border: 2px solid #dadada;" required>
<option value=""></option>
<option value="1 adult">1 adult</option>
<option value="2 adults">2 adults</option>
<option value="3 adults">3 adults</option>
<option value="4 adults">4 adults</option>


</select>
<br>
<br>

Num. children:
<select name="Number Children" style="border-radius: 7px; border: 2px solid #dadada;" required>
<option value=""></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select> 
<br><br>

Destination :
<select name="Destination" style="border-radius: 7px; border: 2px solid #dadada;" required>
<option value=""></option>
<option value="Karaburun">Karaburun</option>
<option value="Porto Palermo">Porto Palermo</option>
<option value="Jale">Jale</option>
<option value="Peje">Peje</option>
<option value="Albanian Alps">Albanian Alps</option>
</select>
<br><br>

Trip Type :
<select name="Trip Type" style="border-radius: 7px; border: 2px solid #dadada;" required>
<option value=""></option>
<option value="Active">Active</option>
<option value="Private Expedition">Private Expedition</option>
</select>
<br><br>

Service level :
<select name="Service level" style="border-radius: 7px; border: 2px solid #dadada;" required>
<option value=""></option>
<option value="Casual">Casual</option>
<option value="Premium">Premium</option>
<option value="Premium">Ultimate</option>
</select>
<br><br>


Expedition date:
<input  type="date" id="Expedition date" name="Expedition date" style="border-radius: 7px; border: 2px solid #dadada;" required>
</input>
<br><br>

Interests:
<select name="Service level" style="border-radius: 7px; border: 2px solid #dadada;" required>
<option value=""></option>
<option value="Birdwatching">Birdwatching</option>
<option value="Kayaking & Rafting">Kayaking & Rafting</option>
<option value="Nature & Wildlife">Nature & Wildlife</option>
<option value="Snorkeling & Diving">Snorkeling & Diving</option>
<option value="Photography">Photography</option>
</select>
<br><br>


Trip length:
<select name="Trip length" style="border-radius: 7px; border: 2px solid #dadada;" required>
<option value=""></option>
<option value="1-2 Days">1-2 Days</option>
<option value="3-4 Days">3-4 Days</option>
</select>
<br><br>


Activity level:
<select name="Activity level" style="border-radius: 7px; border: 2px solid #dadada;" required>
<option value=""></option>
<option value="Light-Moderate">Light-Moderate</option>
<option value="Moderate">Moderate</option>
<option value="Maximum">Maximum</option>
</select>
<br><br>

Price:
<select name="Price" style="border-radius: 7px; border: 2px solid #dadada;" required>
<option value=""></option>
<option value="70-110€ ">40-60€</option>
<option value="70-110€">70-110€</option>
<option value="70-110€">120€ and more</option>
</select>
<br><br>

Extra information:<br>
<em>
<textarea rows="3" cols="40" style="border-radius: 7px; border: 2px solid #dadada;" placeholder="Search Our Website..." >
</textarea>
</em>
<br><br>
<button  class="submit" type="submit" value="Reserve" 
style="height:30px; width:100px; border-radius:10px; font-weight:bold;font-size:12pt; font-family:Arial">Reserve</button>

<button  class="submit" type="submit" value="Reserve" onClick="alert('Your reservation is cancelled!')" 
style="height:30px; width:100px; border-radius:10px; font-weight:bold;font-size:12pt; font-family:Arial">Cancel</button>
	
</form>
</b>


<br><br>
</body>
	
</html>
