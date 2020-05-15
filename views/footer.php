<head>
<style>

.footer {
    background: #171b1e;
    color: #d3d3d3;
    height: 400px;
    position: relative;
    font-family: Times, Times New Roman, serif;
    font-size: small;
    bottom: -650px;


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
</head>


<footer>
	  <div class="footer">


		  <div class="footer-content">
			  <div class="footer-section latestpost">
				  <h2>LATEST POST(S)</h2>
				  <br> <br>


				  <h3>Post title</h3>
				  <h4>Posted by Admin on 26.12.2019</h4>
				  <br>
				  <div class="read-more">

					Lastest posts that the admins have posted lately,
					 where you can see the  different untainted places
					(places that arent touched).You can see the beauty of these untainted places by looking at our photos we have posted for you.
					 </div>

	 <br><br>
	 <a style="color:red;" href="reservation.php">Book an Expedition</a>
	 </div>

			  <div class="footer-section contact ">
				  <h2>CONTACT DETAILS</h2>
				  <br> <br>

				   <p>FEF Company <br/>
					   Street Name&Number <br/>
					  Town <br/>
					  Postcode/zip
				  </p>
				  <br>

				<a href="Map.php">Click here for a Map to find us »</a>
				<br>
				<p> Tel:048-555-666<br/>
					Fax:038-222-444 <br/>
				<ul>
		   <li><span style="color:#000000; text-decoration:none;"><a href="MAILTO:fortunagashi@hotmail.com">visitalbania@hotmail.com</a></span></li>
		   </ul></p>


			</div>
			  <div class="footer-section newsletter-form">
 			<h2>NEWSLETTER</h2>
 			<br> <br>
 			<p>If you are interested to be part of our journey please submit your name and email down below and we will make sure to contact you in the near future:</p>
 			<br>
 			<form name ="footerform" action="./forma.php" method="post" >
 			<input id="emri" type="text" placeholder="Name" name="Emri" class="contact-input" /> <br/>
 			<input id="imella" type="email" placeholder="Email" name="Email" value=""  class="contact-input"/><br/>
			<div id="emailerror"></div>

 			<button input type="submit" name="footer-submit" class="btm">SUBMIT</button>

             </form>



 		</div>


			  </div>


<table>
	<tr>
			 <td style="text-align:left;">
				 <p style="color:white;">Copyright &copy; 2013 Domain Name - All Rights Reserved</p>
			 </td>
			 <td style="text-align:right;">
				 <p style="color:white;">Templates by CS Tamples</p>
			 </td>
		 </tr>
	 </table>
	</footer>

