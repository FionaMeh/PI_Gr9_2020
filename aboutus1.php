<!DOCTYPE html>
<html>
<head>
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
font-size:90%;
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
    background-color: Gainsboro;
    }
    
    .slider-frame{
      overflow: hidden;
      height: 600px;
      width: 1200px;
      margin-left: 100px;
      margin-top: 20px;
    }
    
    @-webkit-keyframes slide_animation{
      0% {left:0px;}
      10% {left:0px;}
      20% {left:1200px;}
      30% {left:1200px;}
      40% {left: 2400px;}
      50% {left: 2400px;}
      60% {left: 1200px;}
      70% {left: 1200px;}
      80% {left: 0px;}
      90% {left: 0px}
      100% {left: 0px}
    }
    
    
    .slide-images{
      width: 3600px;
      height:50px;
      margin: 0 0 0 -2400px;
      padding-bottom:30px;
      position: relative;
      -webkit-animation-name: slide_animation;
      -webkit-animation-duration: 33s;
      -webkit-animation-iteration-count: infinite;
      -webkit-animation-play-state: running;
    }
    
    .img-container{
    height: 500px;
    width: 1200px;
    position: relative;
    float: left;
    }
    .footer{
    background: #282828;
    color: #d3d3d3;
    height: 400px;
    position: relative;
    font-family: Times, Times New Roman, serif;

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
.img{
	width:100;
	height:200;
}
</style>

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


<body>
  <div class="slider-frame">
    <div class="slide-images">
    <div class="img-container">
      <img src="images/porto-palermo-castle.jpg" style="width:1100px;height:500px"></a>
   
  </div>
      <div class="img-container">
      	<img src="images/Jale-riviera-albanese.jpg" style="width:1100px;height:500px"></a>
      </div>
      <div class="img-container">
        <img src="images/karaburunn.jpg" style="width:1100px;height:500px" ></a>
      </div>
    </div>
  </div>
  <div class="korniza1">
  <p>
    Albania’s rugged coastline, with traditional villages nestled in isolated bays and golden beaches lapped by turquoise waters, was a revelation when travellers first started discovering the country during the turn of the century. Since then Europe’s last untouched beaches have changed almost beyond recognition, but there’s still plenty of reason to come
    here and explore this magnificent coastline where the Adriatic and Ionian seas meet.…</p>
  <br><br>
  <p style="font-size:18pt;"> 1.Karaburun </p>
  <p>Easily accessed by a short boat ride from Vlora Bay, this peninsula has become one of the top destinations of the Albanian Riviera.
     The Karaburun Peninsula, the only maritime park in Albania, is a must-visit, especially in the hot summer months. Stretching across Vlora Bay, the peninsula is shaped like a finger which points to the breathtaking landscape surrounded by turquoise waters. A spectacular natural reserve, this entire area is now internationally famous for the intimate,
    pristine bays scattered throughout and its thriving nature. Virgin rugged beaches punctuate the entire Karaburun landscape. What makes it even more impressive is the area known as the Balcony of Karaburun, which stretches over its ridges. Jagged cliffs descend on the caves and slopes of rock formations over Dafina Beach or the shore of Bitri.
    The views from this point are particularly amazing!</p><br>
  
  <p style="font-size:18pt;"> 2.Jale </p>
  <p>The beach is the strongest point of this small coastal village. The sea water is among the cleanest and stunning in the entire Riviera. The beach is the main area where several bars, restaurants, and even pubs are found. The blue water, the half-moon shaped bay, the surrounding olive groves and beautiful sunsets are the key traits of Jali Beach.
     If you never been to Jali, don’t miss the chance to explore it this summer. A five km road in Vuno Village on the right side of Vlora-Saranda national road takes to Jali beach.  </p><br>
  
  <p style="font-size:18pt;"> 3.Porto Palermo </p>
  <p>In a picturesque bay just south of Himara, this 19th-century fortress, also known as the Castle of Ali Pasha, makes for an interesting stop-off along the coastal road. The fortress itself is eerily dark inside, but it's well worth paying to wander around and explore the battlements, which have superb sea views.
    The rocky and sheltered coastline would probably make for good snorkelling.</p><br>
  
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
</body>

  

<footer>
    <?php include('./views/footer.php'); ?>
</footer>
</html>
	 
	 
