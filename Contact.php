<!DOCTYPE html>
<html>
<head lang="en">

    <meta charset="utf-8">
    <title>Contact</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style>

        body {
            margin: 0;
            padding: 0;
            text-align: center;
            background: url(images/travel.png) blue;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;

        }

        .rate {
            text-align: center;
            background: #f1f1f1;;
            width: 300px;
            position: absolute;
            top: 75%;
            left: 3%;
            box-sizing: border-box;
            box-shadow: 0 0 20px #000000b3;
            font-family: "Times New Roman", Times, serif;
        }

        .contact-form {
            width: 85%;
            max-width: 600px;
            background: #f1f1f1;
            position: absolute;
            top: 80%;
            left: 75%;
            transform: translate(-50%, -50%);
            padding: 30px 40px;
            box-sizing: border-box;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 0 20px #000000b3;
            font-family: "Times New Roman", Times, serif;
        }

        .contact-form h1 {
            margin-top: 0;
            font-weight: 200;
            font-family: "Times New Roman", Times, serif;

        }

        .txtb {
            border: 1px solid black;
            margin: 8px 18px;
            border-radius: 8px;
        }

        .txt label {
            display: block;
            text-align: left;
            color: green;
            text-transform: uppercase;
            font-size: 14px;
        }

        .txtb input, .txtb textarea {
            width: 100%;
            border: none;
            background: none;
            outline: none;
            font-size: 18px;
            margin-top: 6px;
        }

        input[type=submit] {
            display: block;
            background: rgb(60, 179, 113);
            padding: 14px 0;
            color: white;
            text-transform: uppercase;
            cursor: pointer;
            margin-top: 8px;
            width: 100%;

        }

        .btn:hover {
            background-color: #A9A9A9;
            color: white;
        }

    </style>
</head>



<?php include('./views/header.php');
$alerti = "";
if (isset($_GET['error'])) {
    $alerti = "Please fill all the blanks";
    echo '<div class="alert alert-danger">' . $alerti . '</div>';
}
    
    

if(isset($_POST['submit-rate'])) {
    $name = $_POST['teksti'];
    if (!empty($name)) {
        $file = fopen('lista.txt', 'a');
        fwrite($file, $name . "\n");
         } else {
         echo 'Ju lutem provoni perseri!';
    }
}
?>

<div class="rate">
    <h1>Rate us</h1>

    <p>Please input a rating between 1-10:</p>
    <form action="Forma.php" method="POST">
        <input id="Test" name="teksti" type="text">
        <input type="submit" name="submit-rate" value="Submit"/>

        <p id="rate"></p>
    </form>
    <form action="lista.txt" method="post">
    <input type="submit" name="test" id="test" value="Ratingu" /><br/>
    </form>
</div>


<form action="Forma.php" method="POST">

    <div class="contact-form">
        <i class="glyphicon glyphicon-envelope"></i>

        <h1>Contact Us</h1>
        <div class="txtb">
            <label>User Name :</label>
            <input type="text" name="name" placeholder="Name"
                   id="inputName">
        </div>

        <div class="txtb">
            <label>Email :</label>
            <input type="email" name="email" placeholder="Enter your email address">

        </div>

        <div class="txtb">
            <label>Message :</label>
            <textarea name="message" placeholder="Your message here"> </textarea>
        </div>
        <input type="submit" name="submit-send" value="Send"/>
    </div>
</form>


</body>

<?php include('./views/footer.php'); ?>

</html>

