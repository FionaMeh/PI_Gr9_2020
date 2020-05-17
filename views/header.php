

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
color:red;
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




.header-top ul {
    list-style-type: none;
    display: flex;
    padding: 3px;
}
</style>
</head>

<header>
<div class="container">
        <div class="header">
            <div class="header-top">
                <nav>
                    <ul>
                        <li>
                            <a href="login.php">Login |</a>
                        </li>
                        
                        <li>
                        <a href="logout.php">
                              Logout? |</a>
                            
                        </li>

                        
                    </ul>

                </nav>
            </div>
    <div class="searchF">
        <table>
            <tr>
                <td>
                    <h1>Explore the Untainted</h1>
                    <h3>Welcome to our page</h3>
                </td>
                <td>
                    <!--Search-->
                    <form id="search">

                        <button class="button">SEARCH</button>
                        <input class="class_search1" type="text" name="Search" placeholder="Search Our Website...">
                    </form>
                </td>
            </tr>
        </table>
        <br><br><br>
    </div>
    <nav class="topnav">



        <a href="MainPage.php"  >HOME </a>
        <a href="aboutus.php">About us  </a>
        <a href="Gallery.php" >Gallery </a>
        <a href="Booking.php">Booking  </a>
        <a href="Contact.php" >Contact </a>
		
        
		
		
    </nav>
</header>