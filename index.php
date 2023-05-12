 <?php


 require("nav.php");

//  require('login.php');




?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale= 1, user-scalable=0">
     <title>Grosses Bouchées - Bienvenu</title>
     <script src=" https://kit.fontawesome.com/032421aa45.js" crossorigin="anonymous"></script>

     <link href="css/style.css" rel="stylesheet" />
 </head>

 <body>


     <!-- Hero Section -->
     <section id="hero" class="hero">
         <div class="max-width">
             <div class="h-c">
                 <h1>Africa's Big Bites</h1>
                 <p>where hungry men are made happy</p>
                 <div class="btn"><a href="Reservation.php">Reservations</a></div>
                 <div class="down">
                     <a href="#hrs" style="color: white;"><i class="fa-solid fa-angle-down"></i></a>
                 </div>
             </div>
             <div class="locations">
                 <div class="content">
                     <div class="loc" id="one">
                         <i class="fa-solid fa-location-dot"></i>
                         <div class="txt">
                             <p>Abuja, Nigeria</p>
                         </div>
                     </div>
                     <div class="loc" id="two">
                         <i class="fa-solid fa-location-dot" id="l-2"></i>
                         <div class="txt">
                             <p>Washington DC, USA</p>
                         </div>
                     </div>
                     <div class="loc" id="three">
                         <i class="fa-solid fa-location-dot" id="l-3"></i>
                         <div class="txt">
                             <p>Munich, Germany</p>
                         </div>
                     </div>
                     <div class="loc" id="four">
                         <i class="fa-solid fa-location-dot" id="l-4"></i>
                         <div class="txt">
                             <p>Paris, France</p>
                         </div>
                     </div>
                 </div>
             </div>
     </section>



     <!-- Hours Section -->


     <section class="hrs" id="hrs">
         <div class="max-width">
             <div class="head">
                 <h1>Hours</h1>
             </div>
             <div class="content">
                 <div class="small-talk">
                     <p>Come and grab a huge bite from our menu at the following times listed below. YOU can make
                         reservations before the times listed below.</p>
                 </div>
                 <div class="descp">

                     <div class="breakfast">
                         <h2>Breakfast period (morning):</h2>
                         <li>
                             <p>Monday 7 - 9 GMT</p>
                         </li>
                         <li>
                             <p>Wednesday 8 - 9 GMT</p>
                         </li>
                         <li>
                             <p>Thursday 8 - 10 GMT</p>
                         </li>
                     </div>
                     <div class="line"></div>
                     <div class="lunch">
                         <h2>Brunch (specials, morning):</h2>
                         <li>
                             <p>Monday 10:30 - 11:30 GMT</p>
                         </li>
                     </div>
                     <div class="line"></div>
                     <div class="lunch">
                         <h2>Noon period (afternoon):</h2>
                         <li>
                             <p>Tuesday 1 - 3 GMT</p>
                         </li>
                         <li>
                             <p>Thursday 2 - 3 GMT</p>
                         </li>
                         <li>
                             <p>Friday 1 - 2 GMT</p>
                         </li>
                     </div>
                     <div class="line"></div>
                     <div class="dinner">
                         <h2>Dinner period (afternoon):</h2>
                         <li>
                             <p>Monday 7 - 9 GMT</p>
                         </li>
                         <li>
                             <p>Saturday 7 - 9 GMT</p>
                         </li>
                         <li>
                             <p>Friday 8 - 10 GMT</p>
                         </li>
                         <li>
                             <p>Sunday 9 - 11 GMT</p>
                         </li>
                     </div>
                 </div>
             </div>
         </div>
     </section>


     <!--------------------- Menu Section ---------------------->


     <section class="menu" id="menu">
         <div class="max-width">
             <div class="content">
                 <h1>Menu</h1>
                 <div class="txt">
                     <p>Check out our top class cuisines and review of our loyal customers. You can also make an order
                         at the times listed. Hit the button below!
                     </p>
                     <div class="btn">
                         <a href="menu.php">Show menu</a>
                     </div>
                 </div>
             </div>
     </section>

     <div class="line"></div>


     <!--------------------------- Event Section ------------------------->

     <section class="eve" id="eve">
         <div class="max-width">
             <div class="box"></div>
             <div class="content">
                 <div class="left">
                     <img src="assets/menu1.jpg" alt="Food Image">
                 </div>
                 <div class="right">
                     <h1>Events</h1>
                     <p>Do you wish to join us on our up coming event?</p>
                     <p>Then, join us this year to select new cuisines that will be added to our menu.
                     </p>
                     <p>Don't miss it!</p>
                 </div>
             </div>
         </div>
     </section>


     <!-- Contact Section -->

     <section class="con" id="con">
         <h1>Contact us</h1>
         <div class="max-width">
             <div class="content">
                 <div class="row">
                     <div class="head">Telephone:</div>
                     <li>Abuja, Nigeria: +234-12-123-234</li>
                     <li>Paris: +1-45-456-567</li>
                     <li>USA: +00-78-789-890</li>
                     <li>France: +3-01-012-123</li>
                 </div>
                 <div class="row">
                     <div class="head">Social Media:</div>
                     <li><a href="#">FB</a></li>
                     <li><a href="#">IG</a></li>
                     <li><a href="#">TW</a></li>
                     <li><a href="#">LN</a></li>
                 </div>

                 <div class="row">
                     <div class="head">Locations:</div>
                     <li>Paris, France</li>
                     <li>Abuja, Nigeria</li>
                     <li>Washington DC, USA</li>
                     <li>Munich, Germany</li>
                 </div>

                 <div class="row">
                     <div class="head">E-mail:</div>
                     <li>team.abb@gmail.com</li>
                 </div>
             </div>
         </div>
     </section>
     <div class="bottom-line"></div>

     <?php

        require("footer.php");
      ?>

 </body>

 </html>