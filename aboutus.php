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



  
  body {
  padding: 0;
    margin: 0;
      background-color: white;
      font: "Times New Roman", Times, serif;
      font-size: medium;
	  background-color:#fff1da;
  }
  


	/*search our website*/
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
			/*search our website*/
	.class_search2 
	{ 
		float:right; 
		background-color:green; 
		color:#FFCCFF; 
		text-align:center; 
		height:30px; 
		width:100px; 
		border-radius:6px; 
		font-size:15px;
		 outline: none;
		   border: none;
	}  
	
  .class_search3 {
      box-shadow: inset 0px 1px 0px 0px #a4e271;
      background: linear-gradient(to bottom, #89c403 5%, #77a809 100%);
      background-color: #89c403;
      border-radius: 6px;
      border: 1px solid #74b807;
      display: inline-block;
      cursor: pointer;
      color: #ffffff;
      font-family: Arial;
      font-size: 15px;
      font-weight: bold;
      padding: 6px 24px;
      text-decoration: none;
      text-shadow: 0px 1px 0px #528009;
  }

.class_search3:hover {
      background: linear-gradient(to bottom, #77a809 5%, #89c403 100%);
      background-color: #77a809;
  }
  
  .class_search3:active {
      position: relative;
      top: 1px;
  }

* {
  margin: 0;
  padding: 0;
}
.heading {
    text-align: center;
    font-size: 2.0em;
    letter-spacing: 1px;
    padding: 40px;
    color: white;
}

.gallery-image {
  padding: 20px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.gallery-image img {
  height: 250px;
  width: 350px;
  transform: scale(1.0);
  transition: transform 0.4s ease;
}

.img-box {
  box-sizing: content-box;
  margin: 10px;
  height: 250px;
  width: 350px;
  overflow: hidden;
  display: inline-block;
  color: white;
  position: relative;
  background-color: white;
}

.caption {
  position: absolute;
  bottom: 5px;
  left: 20px;
  opacity: 0.0;
  transition: transform 0.3s ease, opacity 0.3s ease;
}

.transparent-box {
  height: 250px;
  width: 350px;
  background-color:rgba(0, 0, 0, 0);
  position: absolute;
  top: 0;
  left: 0;
  transition: background-color 0.3s ease;
}

.img-box:hover img { 
  transform: scale(1.1);
}

.img-box:hover .transparent-box {
  background-color:rgba(0, 0, 0, 0.5);
}

.img-box:hover .caption {
  transform: translateY(-20px);
  opacity: 1.0;
}

.img-box:hover {
  cursor: pointer;
}


   {
  margin:5px 5px;
  font-weight:bold;
  color:black;
  }
  
div.alfa
   {
  margin-top:5%;
  margin-left:5%;
 }


  .footer{
    padding:0;
    margin:0;
    background: #282828;
    color: #d3d3d3;
    height: 400px;
    position: relative;
    font-family: Times, Times New Roman, serif;

}

.footer {
padding:0;
margin:0;
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



  






</style>
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


<a href="aboutus1.php"><img src="images/plazhe.jpg" style="width:550px; height:300px;margin-left:50px;" alt="kek me prtokall">
 </a>

<a href="aboutus2.php"><img src="images/alpett.jpg"  style="width:550px; height:300px; margin-left:50px;" alt="tiramisu">
 </a>

 
<div class="korniza1" style="width:400px; height:150px;margin:5px 50px;">
<h4><br><a href="aboutus1.php" style="color:black;">Untainted Beaches of Albania</a></h4>
<br>
 <p>Albania’s southern coastline, with its lovely traditional hamlets, cobblestoned streets and
    small Orthodox churches, has plenty of beautiful beaches lapped by pristine waters. And if 
	you get your fill of coastal bays, you can head for the natural springs near Saranda or the
	lake shores near the Macedonian border – Albania has plenty of surprises[...]</p>
</div>

<div class="korniza1" style="width:400px; height:150px; margin:-160px 650px;">
<h4><br><a href="aboutus2.php" style="color:black;">Picturesque mountains of Albania</a></h4>
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
	 
	 
