<?php
$apiKey = "2491caab176f88418b3a29767a2cd441";
$cityId = "786714";
$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();

?>
<!DOCTYPE html>
<html>
<head lang="en">
     <meta charset="utf-8">

     <title>Untainted</title>
     <link rel="stylesheet" href="views/stylesheet2.css"/>

<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
		 var readMoreHtml = $(".read-more").html();
		 var lessText = readMoreHtml.substr(0,100);
		 
		 if(readMoreHtml.length > 100){
		  $(".read-more").html(lessText).append("<a href='' class='read-more-link'> Read More &#187 </a>");
		 }else{
		  $(".read-more").html(readMoreHtml);
		 }
		 
		 $("body").on("click", ".read-more-link", function(event){
		  event.preventDefault();
		  
		  $(this).parent(".read-more").html(readMoreHtml).append("<a href='' class='read-less-link'> Read Less &#171</a>")
		 });
		 
		 $("body").on("click", ".read-less-link", function(event){
		  event.preventDefault();
		  
		  $(this).parent(".read-more").html(readMoreHtml.substr(0, 100)).append("<a href='' class='read-more-link'> Read More &#187 </a>")
		 });
			
		});
		</script>


     <script type="text/javascript">
        function showText(element) {
            var longtext = $(element).siblings('.longtext');
            var paragraph = longtext.children('p');
            paragraph.toggleClass('show-ellipsis');
            if (paragraph.hasClass('show-ellipsis')) {
                element.innerText = "READ MORE"
            } else {
                element.innerText = "READ LESS"
            }
        }
    </script>
<style>
#container {

    font-family: Arial;
    font-size: 0.95em;
    color: #929292;
}

.report-container {
    display: table;
    table-layout: fixed;
    border: #E0E0E0 1px solid;
    padding: 5px 0px 5px 10px;
    border-radius: 2px;
    width: 550px;
    margin: 0 auto;
}

.weather-icon {
    vertical-align: middle;
    margin-right: 20px;
  
}

.weather-forecast {
    color: #212121;
    font-size: 1.2em;
    font-weight: bold;
    margin: 20px 0px;
    display: table-cell;
}

span.min-temperature {
    margin-left: 15px;
    color: #929292;
}

.time {
    line-height: 25px;
    display: table-cell;
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
	 <div id="slider">
		<div id="box">
			<img class="img" width="1950px" height="550px" src="images/syriKalter.jpg">
		</div>
		<div class="text-block">
			<p>Visit beautiful places of our country.Slide for more pictures.</p>
			<a  class="next" onclick="nextImage()"> &#10094;</a>
			</br>
			<a class="previous" onclick="prevImage()">&#10095; </a>
		</div>
	</div>
	<!-- Slider - javascript -->
     <script type="text/javascript">
         var slider_content = document.getElementById('box');

         var image = ['syriKalter', 'visitalbania1', 'valbona', 'visitalbania4'];

         var i = image.length;

         function nextImage() {
             if (i < image.length) {
                 i = i + 1;
             } else {
                 i = 1;
             }
             slider_content.innerHTML = "<img class='fiona' src=images/" + image[i - 1] + ".jpg>";
         }

         function prevImage() {
             if (i < image.length + 1 && i > 1) {
                 i = i - 1;
             } else {
                 i = image.length;
             }
             slider_content.innerHTML = "<img class='fiona' src=images/" + image[i - 1] + ".jpg>";
         }


     </script>

     <br>
	<br>
	<br>
	<div>
		<table>
			<tr>
				<td style="width:44%" style="color:black;" ><hr/></td>
				<td text-align: center style="color:black;">Castle</td>
				<td style="width:55%"><hr/></td>
			</tr>
		</table>


	  <div id="o" class="row">
        <div id="o" class="column">
            <img src="images/gjirokaster.jpg" alt="Avatar"  style="width:360px;height:160px" style="width:100%" />
            <div class="longtext">
                <h1 style="color:black;">Gjirokastër Castle</h1>
				<p style="color:grey;" class="show-ellipsis">Gjirokastër Castle is a fortress in Gjirokastër, 
					Albania (during Ottoman rule it was historically known as Ergiri while local Greeks referred to it as Argyrokastro, 
					a name applied also to the castle).<br> Gjirokastër Castle is situated at a height of 336 metres).
					The castle dominates the town and overlooks the strategically important route along the river valley.
					 It is open to visitors and contains a military museum featuring captured artillery and memorabilia 
					 of the Communist resistance against German occupation, <br>as well as a captured United States Air Force 
					 plane to commemorate the Communist regime's struggle against the imperialist western powers.</p>
            </div>
            <button onclick="showText(this)" class="class_search3" class="moreButton">READ MORE</button>
        </div>

        <div id="o" class="column">
            <img src="images/kruje.jpg" alt="Avatar" style="width:360px;height:160px" style="width:100%" />
            <div class="longtext">

                <h1 style="color:black;">Krujë Castle</h1>
				<p style="color:grey;" class="show-ellipsis">Krujë castle was built in the 5th or 6th century,
					 perched above the city of the same name. At the time of the Ottoman threat, it was the headquarters
					  of Gjergj Kastrioti, the “Dragon of Albania,” an Albanian nobleman and military commander.
					   Kastrioti was sent as a hostage to the Ottoman <br> court early in his life, and after leaving service, 
					   led a rebellion against the Ottoman Empire in Albania.</p>

            </div>
            <button onclick="showText(this)" class="class_search3" class="moreButton">READ MORE</button>
        </div>

        <div id="o" class="column">
            <img src="images/rozafa (1).jpg" style="width:360px;height:160px" alt="Avatar" style="width:100%" />
            <div class="longtext">
                <h1 style="color:black;">Rozafa Castle</h1>
				<p style="color:grey;" class="show-ellipsis">From its ancient Illyrian walls and the medieval ruins of the Balshaj,
					 to the Towers of the Bushatllinj, Rozafa Castle is a monumental testament to the beauty of an everlasting fortress.
					Built during Antiquity,<br> enduring the Roman and Ottoman empires, and remaining intact up to the present day,
					 Rozafa Castle has witnessed the dramatic changes of tide over the course Albania’s fascinating history. 
					 Needless to say then that this archaeological area is incredibly rich in historical tales.
					  To understand the city of Shkodra, where the castle is located, and indeed the history of the country as a whole,
					   a visit to Rozafa Castle is a must!</p>
            </div>
            <button onclick="showText(this)" class="class_search3" class="moreButton">READ MORE</button>
        </div>


    </div>

     <table>
         <tr>

             <td style="width:20%">
                 <hr/>
             </td>
             <td style="text-align: center; color:black;">Summer Sports</td>
             <td style="width:20%">
                 <hr/>
             </td>
             <td style="width:26%">
                 <hr/>
             </td>
             <td text-align: center style="color:black;"> Hiking</td>
             <td style="width:22%">
                 <hr/>
             </td>
         </tr>
     </table>

     <table id="w">
         <tr>
             <td style="text-align:left">
                 <img class="img-round" src="images/jetblade_new.jpg" alt="Avatar" align="left"
                      style="width:128px;height:128px" hspace="20"/>
                 <p style="color:black;"><strong>Surfing,jet skiing and more</strong></p>
                 <div class="content1" style=" padding:0; margin:0; ">
                     <div class="read-more" style=" padding:0; margin:0; ">
                         <p style="color:grey;">Maybe it's on your bucket list or maybe not.<br>
                             But, it still sounds fun and for those that
                             live by the ocean and do surf this is on here for you.</p>
                     </div>
                 </div>
             </td>
             <td style="text-align:left" style=" padding:0; margin:0; ">
                 <img class="square" src="images/albania-trekking-from-valbona-to-theth.jpg" alt="Avatar" align="left"
                      style="width:110px;height:130px" hspace="20"/>
                 <p style="color:black;"><strong>Mountain Climbing</strong</p>
                 <div class="content1" style=" padding:0; margin:0; ">
                     <div class="read-more" style=" padding:0; margin:0; ">
                         <p style="color:grey;">Kind of an extreme sport and definitely not for the faint of heart.<br>
                             But, if you live for adventure then maybe climbing a mountain of
                             a low or high peak is exactly what you want to do. </p>
                     </div>
                 </div>


             </td>
         </tr>
         <tr style="text-align:left">
             <td>
                 <img class="img-round" src="images/kayaking.jpg" alt="Avatar" align="left"
                      style="width:128px;height:128px" hspace="20"/>
                 <p style="color:black;"><strong>Kayaking</strong></p>
                 <div class="content1" style=" padding:0; margin:0; ">
                     <div class="read-more" style=" padding:0; margin:0; ">
                         <p style="color:grey;"> Again, for those that love adventure.<br>
                             Once you try kayaking, we’re positive you’ll love it.
                             Kayaking provides a number of
										 advantages that make it unique .</p>
				</div>
				</div>
			</td>
			<td style="text-align:left">
				<img  class="square" src="images/albania-food-and-walking-tour.jpg" alt="Avatar" align="left" style="width:110px;height:130px"  hspace="20"/>
				<p style="color:black;"><strong>Hiking</strong></p>
				<div class="content1" style=" padding:0; margin:0; ">
					<div class="read-more" style=" padding:0; margin:0; ">
				<p style="color:grey;" >Hiking, walking in nature as a recreational activity.<br>
										  Especially among those with sedentary occupations, hiking 
										  is a natural exercise that promotes physical fitness, 
										  is economical and convenient, and requires no special 
										  equipment</p>
				</div>
				</div>
			</td >
		</tr>
	</table>
	
          <div id="container">
    <div class="report-container">
        <h2><?php echo $data->name; ?> Weather Status</h2>
        <div class="time">
            <div><?php echo date("l g:i a", $currentTime); ?></div>
            <div><?php echo date("jS F, Y",$currentTime); ?></div>
            <div><?php echo ucwords($data->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">
            <img
                src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo $data->main->temp_max; ?>&deg;C<span
                class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;C</span>
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
        </div>
    </div>

</div>
 </body>
<footer>
    <?php include('./views/footer.php'); ?>
</footer>
</html>
