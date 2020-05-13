<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <title>Booking</title>
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
		background-color: #484848; 
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
  </style>
</head>

<script>
    var i = 0;
    var slide_img = [];
    var time = 3000;

    slide_img[0] = 'images/room1.jpeg';
    slide_img[1] = 'images/room2.jpeg';
    slide_img[2] = 'images/room3.jpeg';
    slide_img[3] = 'images/room4.jpeg';
    slide_img[4] = 'images/room5.jpeg';


    function changeImg() {
        document.slide.src = slide_img[i];

        if (i < slide_img.length - 1) {
            i++;
        } else {
            i = 0;
        }

        setTimeout("changeImg()", time);
    }

    window.onload = changeImg;

    function bookingCounter() {
        if (typeof (Storage) !== "undefined") {
            if (sessionStorage.clickcount) {
                sessionStorage.clickcount = Number(sessionStorage.clickcount) + 1;
            } else {
                sessionStorage.clickcount = 1;
            }
            document.getElementById("result").innerHTML = "You have clicked the Book room button " + sessionStorage.clickcount + " times in this session";
        } else {
            document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
        }
    }


</script>
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
	
<table>
    <tr>
        <td>
            <img name="slide" class="slideimg">
        </td>
        <td>
            <div class="text1">
                <h2>Rooms&Suits</h2>
                <br>
                <p>The 25 guestrooms and 4 apartments range from 15 to 55 square meters, <br>
                    and all offer a bathroom with a bathtub,shower, or both.<br>
                    While the 15-square-meter Family Room features bunk beds for children,<br>
                    the 23-square-meter Deluxe South, the 19-square-meter Superior Room,<br>
                    and the 55-square-meter Apartment South Chandolines all boast a king-size bed.<br>
                    The 19-square-meter Premium South room and the 35-to-39-square-meter Suite North<br>
                    South play host to a queen-size bed. The Apartment South Chandolines and the Suite North<br>
                    South also include a living room and a sofa bed that sleeps two children, <br>
                    and apart from the Family Room and the Superior Room, all guestrooms feature a terrace or balcony.
                </p>
            </div>
        </td>
    </tr>
</table>
<table>
    <tr>
        <td>
            <img src="images/hotelobby.jpg" class="lobbyimg">
        </td>
        <td>
            <h2>OUR SERVICES</h2>
            <ul>
                <li>Room service</li>
                <li>Air heating&cooling in all rooms</li>
                <li>Free Wi-fi in the entire hotel</li>
                <li>Restaurant&Bar</li>
                <li>Breakfast buffet 06.30am-10.30am</li>
                <li>Dinner from 17:30pm-22:30pm</li>
                <li>24-hour reception</li>
                <li>Coffee and tea facilities in all rooms</li>
                <li>Business lounge</li>
                <li>Parking space</li>
                <li>Fitness center</li>
                <li>Bike and car rental</li>
                <li>Allergy friendly rooms</li>
                <li>Business lounge</li>
            </ul>
        </td>
        <td>
            <section>
                <div class="box">
                    <div>
                        <span><video src="video/hotel.mp4" autoplay="" muted="" loop=""></video></span>
                        <span><video src="video/hotel.mp4" autoplay="" muted="" loop=""></video></span>
                        <span><video src="video/hotel.mp4" autoplay="" muted="" loop=""></video></span>
                    </div>
                </div>
            </section>

            </br> </br> </br>
            <p>OUR HOTTEL LOBBY</p>
        </td>

    </tr>
</table>


<div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="booking-form">
                    <div class="form-header">
                        <h1>Book Your Room</h1>
                    </div>
                    <form name="era" method="POST" action="Forma.php">
                        <div class="form-group">
                            <div class="form-checkbox">
                                <label for="single-room">
                                    <input type="radio" name="checkRoom" id="single-room"
                                           value="Single-Room"<?php if (isset($checkRoom) && $checkRoom == 'Single-Room') echo 'checked="checked"'; ?>/>
                                    <span></span>Single room
                                </label>
                                <label for="couple-room">
                                    <input type="radio" name="checkRoom" id="couple-room"
                                           value="Couple-Room"<?php if (isset($checkRoom) && $checkRoom == 'Couple-Room') echo 'checked="checked"'; ?>/>

                                    <span></span>Couple room
                                    <label for="family-room">
                                        <input type="radio" name="checkRoom" id="family-room"
                                               value="Fam-Room"<?php if (isset($checkRoom) && $checkRoom == 'Fam-Room') echo 'checked="checked"'; ?>/>
                                        <span></span>Family room
                                    </label>
                            </div>
                        </div>

                        <table>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input class="form-control" type="date" name="data1">
                                        <span class="form-label">Check In</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input class="form-control" type="date" name="data2">
                                        <span class="form-label">Check Out</span>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input class="form-control" type="emri" name="name">
                                        <span class="form-label"> Name and Surname:</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input id="PIN" class="form-control" type="password" name="pass">
                                        <span class="form-label"> CARD PIN</span>
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <div class="form-btn">
                            <input type="submit" name="submitted" value="submitted">Book Room</input>
                            <div id="result"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
<footer>
    <?php include('./views/footer.php'); ?>
</footer>
</html>
	 
	 
		  
	
	 
	


	     
