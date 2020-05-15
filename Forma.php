<?php

include "database.php";

//forma per kontakt, validimi, perdorimi i shprehjeve regEx per email dhe
//konektimi me databaze

if (isset($_POST['submit-send'])) {
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


    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact_form (firstName, emaili, mesazhi) VALUES (
'$name', '$email', '$message') ";
    if ($con->query($sql) == TRUE) {
        echo "Your records are saved " . $name;
    } else {
        echo "Something wrong happened";
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

//validimi i formes per rating te contact

if (isset($_POST['submit-rate'])) {
    $teksti = $_POST['teksti'];
    if (($teksti == "") || (!is_numeric($teksti)) || ($teksti < 1) || ($teksti > 10)) {
        died('Please fill the blank');
    } else {
        echo "Thank you for voting";
    }

}

//Forma per booking, validimet dhe konektimi me databaze
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

    }
    if ((isset($_POST['name']))) {
        $emri = $_POST['name'];
        if ($emri == "") {
            died('Please enter your name and last name');
        }
    }

    $sql = "INSERT INTO booked_form (client_name, room_type, check_IN, check_OUT ) VALUES (
'$emri', '$checkRoom', '$data1', '$data2' ) ";
    if ($con->query($sql) == TRUE) {
        echo "Your reservation was successful,  " . $emri . " we will be waiting for you on " . $data1;
    } else {
        echo "Error: " . $sql . " " . $con->error;
    }
    $con->close();


}

//validimi i formes te footer-i

if (isset($_POST['footer-submit'])) {
    $emrii = $_POST['Emri'];
    $eemail = $_POST['Email'];
    if (empty($eemail) || empty($emrii)) {
        echo "We need your info";

    } elseif (!isValidEmail($eemail)) {
        echo "Please give a valid email";
    } else {
        echo "Thank you! We will contact you asap";
    }

}
?>