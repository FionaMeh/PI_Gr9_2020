<!DOCTYPE html>
<html>
<head>

<title>Untainted</title>
<link rel="stylesheet" href="stylesheet3.css"/>
	

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

<div class="alfa">


<a href="faqja1_pamja1.html"><img src="images/plazhe.jpg" style="width:550px; height:300px;margin-left:50px;" alt="kek me prtokall">
 </a>

<a href="faqja1_pamja2.html"><img src="images/alpett.jpg"  style="width:550px; height:300px; margin-left:50px;" alt="tiramisu">
 </a>

 
<div class="korniza1" style="width:400px; height:150px;margin:5px 50px;">
<h4><br><a href="faqja1_pamja1.html" style="color:black;">Untainted Beaches of Albania</a></h4>
<br>
 <p>Albania’s southern coastline, with its lovely traditional hamlets, cobblestoned streets and
    small Orthodox churches, has plenty of beautiful beaches lapped by pristine waters. And if 
	you get your fill of coastal bays, you can head for the natural springs near Saranda or the
	lake shores near the Macedonian border – Albania has plenty of surprises[...]</p>
</div>

<div class="korniza1" style="width:400px; height:150px; margin:-160px 650px;">
<h4><br><a href="faqja1_pamja2.html" style="color:black;">Picturesque mountains of Albania</a></h4>
<br>
 <p >If you think that Albania has only gorgeous beaches to offer visitors, think again. One of 
 the most beautiful things to do in the Land of the Eagles is to spend time relaxing, surrounded 
 only by nature. The Albanian Alps are among the most spectacular sites to see in the Balkan trail,
 so if you hate crowds, warm temperature and tourists, avoid the Riviera and come to visit one of the wildest areas of Europe.[...]</p>
</div>
</div>
 <br><br><br><br><br><br><br><br><br><br><br>
  <div class="gallery-image">
    <div class="img-box">
   <a> <img  src="images/albaniariviera.jpg" alt="beaches"></a>
      <div class="transparent-box">
        <div class="caption">
          <p>Nature</p>
        </div>
      </div> 
  </div>
  <br>
  <div class="img-box">
     <a><img src="images/albaniariviera1.jpg" alt="mountains"></a>
	
      <div class="transparent-box">
        <div class="caption">
          <p>Nature</p>
		  </div>
      </div>
	  </div>

 <div class="img-box">
     <a><img src="images/albaniariviera2.jpg"  alt="mountains"></a>
	
      <div class="transparent-box">
        <div class="caption">
          <p>Nature</p>
		  </div>
      </div>
	  </div>

  
  
  
  
  
 </body>
<footer>
    <?php include('./views/footer.php'); ?>
</footer>
</html>
	 
	 
