<?php


   if(isset($_POST['submit-send']))
   {
       $name = $_POST['name'];
       $email = $_POST['email'];
       $message = $_POST['message'];


       $string_exp = "/^[A-Za-z .'-]+$/";


       if (empty($name) || empty($email) || empty($message)) {
           header('location:Contact.php?error');
       } elseif (!isValidEmail($email)) {
           died(' The email you entered is incorrect');
       } elseif (!preg_match($string_exp, $name) || (strlen($name) < 3)) {
           died(' The username you entered is incorrect');
       } else {
           $recipent = "eriseratr@gmail.com";
           $formcontent = "From: $name \n Message: $message";
           $mailHeader = "From: $email";
           if (mail($recipent, $formcontent, $mailHeader)) {
               print "<h3>Mesazhi juaj u pranua</h3>";
           } else {
               print "<h3>Mesazhi juaj nuk u pranua, ju lutem provoni me vone</h3>";
           }

       }


   }


function isValidEmail($imella)
{
    return preg_match('/\A[a-z0-9]+([-._][a-z0-9]+)*@([a-z0-9]+(-[a-z0-9]+)*\.)+[a-z]{2,4}\z/', $imella)
        && preg_match('/^(?=.{1,64}@.{4,64}$)(?=.{6,100}$).*/', $imella);
}

function died($error)
{
    echo '<script type="text/javascript">alert("We are very sorry, but there were error(s) found with the form you submitted.' . $error . ' ");</script>';
}

if (isset($_POST['submit-rate'])) {
    $teksti = $_POST['teksti'];
    if (($teksti == "") || (!is_numeric($teksti)) || ($teksti < 1) || ($teksti > 10)) {
        echo "Not possible";
    } else {
        echo "Faleminderit qe votuat";
    }

}


if (isset($_POST['submitted'])) {

    if (isset($_POST['checkRoom'])) {
        $checkRoom = $_POST['checkRoom'];
    } else {
        died('Please choose the type of room');

    }
    if (isset($_POST['pass'])) {
        $pass = $_POST['pass'];
        if ((!is_numeric($pass)) || (strlen($pass) != 4)) {
            died('give a valid pin');
        }
    }
    if ((isset($_POST['data1'])) || isset($_POST['data1'])) {
        $data1 = $_POST['data1'];
        $data2 = $_POST['data2'];
        if ($data1 == "" || $data2 == "") {
            died('give dates');
        }

    } else {
        died('Please enter pin');
    }


}
if (isset($_POST['footer-submit']))
    $emrii = $_POST['Emri'];
$eemail = $_POST['Email'];
if (empty($eemail) || empty($emrii)) {
    echo "We need your info";

} elseif (!isValidEmail($eemail)) {
    echo "Please give a valid email";
} else {
    echo "Thank you! We will contact you asap";
}


?>


