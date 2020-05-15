<!DOCTYPE html>
<html>
<head>
<title>Untainted</title>
<meta charset="utf-8">
<style>
  header {
  background-color: #171b1e;
  font: "Times New Roman", Times, serif;
      font-size: medium;
  }
.header-table {
      background: #1e1d22;
  }
  /* menu bar ne fillim me linqe ne mes te saj */
  
  .topnav {
      border: 1px solid #000000;
      border-width: 1px 0;
      list-style: none;
      margin: 0;
      padding: 0;
      text-align: center;
  }
.topnav li {
      display: inline;
  }
  
  .topnav a {
      display: inline-block;
      padding: 10px;
      border-right: 1px solid grey;
  }
  
  .topnav a:hover {
      background-color: #ddd;
      color: black;
  }
  .class_search1 
	{ 
		float:right; 
		background-color:		#484848; 
		color:#FFCCFF; 
		text-align:center; 
		height:30px; 
		width:170px; 
		border-radius:6px; 
		font-size:12px;
		 outline: none;
		   border: none;
	} 
  /* Hijezimi me ngjyre te zeze ne linkun aktual */
  
  .topnav a.active {
      background-color: #000000;
      color: white;
  }
  
  .topnav a:last-child {
      border-right: none
  }
  /* menu bar end */
  div.korniza {
      background-color: #ffffff;
      border: 1px solid black;
      opacity: 0.6;
  }
  
  div.korniza p {
      margin: 5px 5px;
      font-weight: bold;
      color: black;
  }
  
  div.alfa {
      margin-top: 5%;
      margin-left: 5%;
  }
  
  a:hover {
      color: white;
  }

/*read more */
#more{
  display: none;
}

.button {
        float:right; 
		background-color:green; 
		color:#FFCCFF; 
		text-align:center; 
		height:30px; 
		width:100px; 
		border-radius:6px; 
		font-size:15px;
		 cursor: pointer;
		   outline: none;
		   border: none;
}

a:link 
{
font-weight:bold;
font-size:120%;
width:200px;
color:white;
text-decoration:none;
}  
 
a:visited 
{
color:white;
text-decoration:none;
}

a:hover
{
font-size:18px;
color:black;
}

table
{
width:100%;
height:50px;	
padding:0px;
}

th
{
color:white;
padding:5px;
}

td
{
color:white;
text-align:left;
padding:2px;
}



  	
      body{
	padding: 0;
    margin: 0;
background-color:#c0e7da  ;
}

.mySlides {display: none}
img {vertical-align: middle;}


.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}


.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}


.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}


.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}


.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}


.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}


.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
.footer {
    background: #171b1e;
    color: #d3d3d3;
    height: 400px;
    position: relative;
    font-family: Times, Times New Roman, serif;
    font-size: small;

}

.footer .footer-content
{
    border-bottom: 1px solid #686868;
    height: 350px;
    display: flex;

}
.footer .footer-content h1,
 {
    font-family: "Times New Roman", Times, serif;
    font-weight: bold;
}

.footer .footer-content .footer-section
{
    flex: 1;
    padding-top: 40px;
    padding-bottom: 40px;
    padding-left:20px;
    padding-right:20px;
    display: inline-block;

}
.footer .footer-content .newsletter-form .contact-input
{
    background: #404040; 
    width: 400px;
    margin-bottom: 10px;
    line-height: 1.5rem;
    padding: .6rem 1.2rem;
    border:none;
    border-radius: 7px;

}
.footer .footer-content .newsletter-form .contact-input:hover {
    background: #303030;
    border:none;
}
.btm {
padding:.7rem;
border-radius: 7px;
background-color: #4CAF50;
  border: none;
  color: white;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
.footer .footer-bottom
{
    background: #282828;
    
    height: 30px;
    width: 100%;
    position:absolute;
    bottom: 0px;
    left:0px;
    padding-top: 10px;

}
#div1 {
  width: 180px;
  height: 50px;
  padding: 10px;
}


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
  <header>
    <?php include('./views/header.php');
    $alerti = "";
    if (isset($_GET['error'])) {
        $alerti = "Please fill all the blanks";
        echo '<div class="alert alert-danger">' . $alerti . '</div>';
    }
    ?>

</header>

<br>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/albanianalphs.jpg" style="width:1000px;height:500px">
  <div class="text"> Alpet Shqiptare </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/theth.jpg"  style="width:1000px;height:500px">
  <div class="text"> Theth </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/Valbona_Valley_National_Park.jpg" style="width:1000px;height:500px">
  <div class="text"> Lugina e Valbones </div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html> 

<audio id="audio-container" controls>
  <source  src="Falcon-Mark_Mattingly-169493032.mp3" type="audio/ogg"  bgcolor="black">
</audio>
<div class="korniza1">

<p>
  While Albania may have gone from a virtually unknown land to a well-established stop on the Balkan backpacker trail in barely a decade, its interior remains little known. But a popular three-day round trip that combines a spectacular ferry ride and a fantastic day hike between two remote mountain hamlets has put northern Albania’s mysterious highlands on the map.
</p>
<br><br>


<p style="font-size:18pt;"> Albanian Alps </p>
<p>The Albanian Alps sprawl across four villages and many farms, and include Valbona National Park, which takes its name from the cold turquoise river that cuts through and the small village on its banks. With thick woods, burbling clear brooks, and rambling mountain passes, the area is an exhilarating place for hiking.
   It’s one of the last wild mountain ranges in Europe, tucked between the border mountains of Kosovo and Montenegro. Days on the nealy 125 miles of roughly marked trails can take you to the giddy heights of Valbona’s mountain peaks or over to the town of Theth and its Blood Feud Tower.</p><br>



<p style="font-size:18pt;"> National Park Theth </p>
<p>Theth is a wonderful village in northern Albania’s Shkodra region. Set among the peaks of the Shala mountains, Theth is isolated, and in times of snow, practically inaccessible.
  Many species of butterflies are found, which makes Theth one of the richest area in  Europe  for butterflies.
  The forest is mainly composed of oak, pine, bushes, hornbeam, osier etc. If the forests of the national park are well maintained, they can produce a considerable amount of wood for fire thus fulfilling the needs of inhabitants for heating.</p><br>

<p style="font-size:18pt;"> Valbona Valley </p>
<p>A national park of 8,000 hectares, it is one of the most beautiful natural areas in Albania. The park lies about 22 km from the alpine city of Bajram Curri. Before entering the valley you will find the spring (vrellen) of Shoshan, located only 3 km away from Bajram Curri.
  This spring rushes through limestone fissures on its way to the Valbona River creating an attractive canyon, 2-3 m wide and 50 m deep. After entering the valley, you will pass several picturesque villages. The first, with alpine style houses, is called Dragobia, and it is where the valley narrows. Past Dragobia, at the foot of the mountain where the Cerremi stream joins the Valbona River, is the famous cave where the national hero Bajram Curri was besieged and killed. It was after this event that the city took his name.
 </p><br>



<p>Komente:</p>
<form>
<textarea rows="6" cols="60" placeholder="Komento"></textarea>
<br>
<form  name=myform>
<input type=button value="Posto" 
onClick="alert('Komenti juaj &#235sht&#235 postuar me sukses!')" 
style="height:30px; width:100px; border-radius:10px; 
font-weight:bold;font-size:12pt; font-family:Arial"  >
</form>
</div>
<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<br>
<img id="drag1" src="images/thank you2.png" draggable="true" ondragstart="drag(event)" width="150" height="50">
</body>

<footer>
    <?php include('./views/footer.php'); ?>
</footer>
</html>
