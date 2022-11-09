<?php

require("getReservations.php");
require("connect.php");




if(isset($_GET['msg']) && $_GET['msg'] == 'reservation'){

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];  
  $people = $_POST['people'];
  $food = $_POST['food'];
  $arrival = $_POST['date'];

  $reserve = new Reservations();

  if($reserve->getReservations($fname, $lname, $email, $phone, $arrival, $food, $people)){

    // echo("Your Reservation was a success!");
   
    header("Location: thanks.php");

  }else{
    echo("Sorry, Something went wrong!");
  }
}



// Newsletter

if(isset($_GET['s']) && $_GET['s'] == 'Success'){
  
  $email = $_POST['newsletter'];

  $new1 = new Newsletter();

  if($new1->getEmail($email)){
    header('Location: index.php');
  }else{
    echo("Something went wrong!");
  }
}

?>