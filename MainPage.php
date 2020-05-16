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
     <h2>Castles</h2>
     <?php include "database.php" ?>
     <?php
     $sql = "SELECT * FROM keshtjellat";


     $rezultati = mysqli_query($con, $sql);

     if ($rezultati !== false) {
     if ($rezultati->num_rows > 0) {
     while ($rreshti = mysqli_fetch_assoc($rezultati)) {
     $rreshti_titulli = $rreshti['titulli'];
     $rreshti_teksti = $rreshti['teksti'];
     $rreshti_foto = $rreshti['foto']

     ?>


     <div id="o" class="row">
         <div id="o" class="column">
             <img src="images/<?php echo $rreshti_foto; ?>" alt="Avatar" style="width:360px;height:160px"
                  style="width:100%"/>
             <div class="longtext">
                 <h2 style="color:black;"><?= $rreshti_titulli; ?></h2>
                 <p style="color:grey;" class="show-ellipsis"><?= $rreshti_teksti ?></p>
             </div>
             <button onclick="showText(this)" class="class_search3" class="moreButton">READ MORE</button>

         </div>


         <?php } ?>

         <?php
         } else {
             echo "Nuk ka asnje lajm me kete ID";
         }
         } else {
             echo "Gabim gjate leximit te lajmit";

         }
         ?>
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
	
 </body>
<footer>
    <?php include('./views/footer.php'); ?>
</footer>
</html>
