<?php 
// require("proxy.php");



// $fname = $lname = $mail = $phone = $date = $meal = $people = '';
// $fErr = $lErr = $emErr = $pErr = $dErr = $mErr = $pErr = '';


if(isset($_SERVER['REQUEST_METHOD']) == 'POST'){

  $fname = cleanData($_POST['fname']);
  $lname = cleanData($_POST['lname']);
  $email = cleanData($_POST['email']);
  $phone = cleanData($_POST['phone']);
  $date = cleanData($_POST['date']);
  $meal = cleanData($_POST['meal']);
  $people = cleanData($_POST['people']);


}

  // var regEx = "/^[a-Z]/"

  // if(empty($_POST['fname']) && empty($_POST['lname']) && empty($_POST['email']) && empty($_POST['phone']) && empty($_POST['date']) && empty($_POST['meal']) && empty($_POST['people'])){
  //   header('Location: reservations.php');
  // }else{
  //   header('Location: reservations.php');
  //   echo "yes!"
  // }

function cleanData($data){
  $data = trim($data);
  $data = htmlspecialchars($data);
  $data = stripslashes($data);

  return $data;
}

?>


<style>
@import url('https://fonts.googleapis.com/css2?family=Parisienne&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,500;1,300;1,400&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Nanum+Myeongjo&display=swap');

  :root{
  /* Fonts */
  --p: 'Parisienne';
  --os: 'Open Sans';
  --ds: 'Dancing Script';
  --rd: 'Rajdhani';
  --m: 'Nanum Myeongjo';
 



   /* For all Paragraphs */
   --av: 'Avenir';



  
/* Colors */
--whisky: #d4a37a;
--lg: #e5e5e5;
--dg: #474747;
--lp: #e5e5;
--ash: #4747;
--drG: #474;
--ck: #000;
--w: #fff;
--cr: crimson;
--pb: #e6ddd6;
--cham: #fbe3d7;
--sel: #eff3fc;


}
*{
  /* overflow-x: hidden; */
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
html{
  scroll-behavior: smooth;
}
body{
  overflow-x: hidden;
}
.max-width{
  max-width: 1330px;
  min-width: 600px;
  padding: 0 40px;
  margin: auto;
}
.form{
  height: 130vh;
  background-image: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.3)), url('assets/reservations.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  background-position: center;
  /* animation-name: bck;
  animation-duration: 2s;
  animation-delay: 1s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out; */
}
.form .res-c{
  position: absolute;
  top: 60%;
  left: 85%;
  transform: translate(-50%, -50%);
}
.form .res-c h1{
  font-family: var(--p), serif;
  font-size: 85px;
  color: #e5e5e5;
  width: 70vw;
  flex: 33.3%;
  animation-name: txt;
  animation-duration: 1s;
  animation-delay: 7s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
}
.form .res-c p{
  margin-left: 8%; 
  font-family: var(--ds), sans-serif;
  font-size: 35px;
  color: #fff;
  display: block;
  animation-name: txt;
  animation-duration: 1s;
  animation-delay: 7.3s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
}
.form .res-c p::before{
  content: '';
  display: block;
  background: var(--ck);
  width: 80px;
  height: 2px;
  border-radius: 5px;
  transform: translate(-90px, 28px);
}
.form .res-c p::after{
  content: '';
  display: block;
  background: #e5e5e5;
  width: 80px;
  height: 2px;
  border-radius: 5px;
  transform: translate(420px, -14px);
}



/* Form Styling */
form{
  background: var(--w);
  position: absolute;
  top: 70%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 60vw;
  height: 100vh;
  transition: left .5s;
  /* animation-name: form;
  animation-duration: 1s;
  animation-delay: 6.4s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out; */
}
form .head{
  text-align: center;
  color: #e5e5e5;
  font-size: 25px;
  font-weight: 500;
  font-family: var(--os), sans-serif;
  padding: 22px;
  background: var(--dg);
  border: 2px solid var(--dg);
}


/****************************************************** 
# For All Input fields 
*******************************************************/

form .row{
  padding-left: 1%;
  display: flex;
  justify-content: space-evenly;
  align-items: center;
}
form .row input{
  display: block;
  outline: none;
  border: none;
  background: none;
  border-bottom: 2px solid #474747;
  padding: 20px 0;
  margin: 3%;
  width: 100vw;
  font-size: 18px;
  background: var(--w);
  font-family: var(--os), sans-serif;
}


/****************************************************** 
# Radio Buttons
*******************************************************/

form .quest{
  font-size: var(--av);
  color: var(--ck);
  font-size: 20px;
  padding: 1% 0 2% 5%;
}
form .flex{
  display: flex;
  padding: 1% 0 0 1%;
}
form .flex .break{
  display: block;
  padding: 5%;
  width: 25vw;
  align-items: center;
  border: 1px solid #000;
  margin-left: 2%;
  cursor: pointer;
}
form .flex .break:active{
  border: 1px solid var(--whisky);
}
form .flex .brunch{
  display: block;
  padding: 6%;
  width: 25vw;
  align-items: center;
  border: 1px solid #000;
  margin-left: 2%;
  cursor: pointer;
}
form .flex .brunch:active{
  border: 1px solid var(--whisky);
}
form .flex .lunch{
  display: block;
  padding: 6%;
  width: 25vw;
  align-items: center;
  border: 1px solid #000;
  margin-left: 2%;
  cursor: pointer;
}
form .flex .lunch:active{
  border: 1px solid var(--whisky);
}
form .flex .dinner{
  display: block;
  padding: 6%;
  width: 25vw;
  align-items: center;
  border: 1px solid #000;
  margin-left: 2%;
  cursor: pointer;
}
form .flex .dinner:active{
  border: 1px solid var(--whisky);
}
form .flex label{
  font-size: 18px;
  color: #474747;
  text-align: right;
  padding-right: 25px;
  font-family: var(--os), sans-serif;
}
form .flex input{
  outline: none;
  border: none;
  width: 10%;
  cursor: pointer;
}




/****************************************************** 
# Select field 
*******************************************************/



form .quest2{
  font-size: var(--av);
  color: var(--ck);
  font-size: 20px;
  padding: 2% 0 0% 5%;
}
form .row select{
  margin-top: 2%;
  margin-left: -35%;
  outline: none;
  border: none;
  border-bottom: 2px solid #474747;
  width: 60%;
  transition: all .5s;
  background: var(--w);
  font-size: 16px;
  font-family: var(--os), sans-serif;
}
form .row select option{
  font-family: var(--av);
  color: var(--ck);
}





/****************************************************** 
# Form Buttons
*******************************************************/


form .su{
  margin: 2% 0 0% 3%;
}
form .su input{
  padding: 10px 40px;
  font-size: 18px;
  background: var(--whisky);
  color: var(--w);
  border: 2px solid var(--whisky);
  cursor: pointer;
  transition: all .3s ease-in-out;
}
/* form .su input:hover{
  opacity: 0.7;
  border: 2px solid #fff;
} */








/******************************************************** 
# Responsive Designs 
********************************************************/





@media only screen and (max-width: 1187px){
  .form{
    height: 110vh;
    width: 100vw;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .form .res-c{
    /* width: 50%; */
    display: none;
  }
  /* .form .res-c h1{
    font-size: 60px;
  }
  .form .res-c p{
    font-size: 40px;
  }
  .form .res-c p::before{
    width: 50px;
  }
  .form .res-c p::after{
    width: 50px;
  } */
  form{
    margin: -2% 0 0 26%;
    width: 90%; 
    height: 70vh; 
    position: absolute;
    top: 55%;
    left: 25%;
    transform: translate(-50%, -50%);
    /* padding: 20px; */
  }
  form .head{
    font-size: 20px;
  }
  form .content{
    padding: 0 auto 10px auto;
  }
  form .content input{
    font-size: 20px;
  }
  form .op{
    background: var(--lg);
    padding-bottom: 30%;
  }
  form .op label{
    font-size: 20px;
  }
  form .su{
    margin: 10% 0 0 36%;
  }
}


@media only screen and (max-width: 900px){
  .form{
    height: 110vh;
  }
  .form .max-width .res-c{
    display: none;
  }
  form{
    margin: -2% auto 5% 26%;
    width: 95%;
    height: 80vh;
  }
  form .head{
    font-size: 20px;
  }
  form .content{
    padding: 0 auto 10px auto;
  }
  form .content input{
    font-size: 18px;
  }
  form .op{
    background: var(--lg);
    padding-bottom: 30%;
  }
  form .op label{
    font-size: 18px;
  }
  form .su{
    margin: 10% 0 0 34%;
  }
}




@media only screen and (max-width: 600px){
  .form{
    height: 130vh;
  }
  .form .max-width .res-c{
    display: none;
  }
  form{
    margin: 5% auto 5% 28%;
    width: 60%;
    height: 100vh;
    /* padding: 20px; */
  }
  form .head{
    font-size: 19px;
  }
  form .content{
    padding: 0 auto 10px auto;
  }
  form .content input{
    font-size: 17px;
  }
  form .op{
    background: var(--lg);
    padding-bottom: 30%;
  }
  form .op label{
    font-size: 18px;
  }
  form .su{
    margin: -20% 0 0 30%;
  }
}




@media only screen and (max-width: 560px){
  .form{
    height: 130vh;
    width: 150vw;
  }
  .form .max-width .res-c{
    display: none;
  }
  form{
    margin: 5% auto 5% 45%;
    width: 100vw;
    height: 100vh;
    /* padding: 20px; */
  }
  form .head{
    font-size: 19px;
  }
  form .content{
    padding: 0 auto 10px auto;
  }
  form .content input{
    font-size: 17px;
  }
  form .op{
    background: var(--lg);
    padding-bottom: 30%;
  }
  form .op label{
    font-size: 18px;
  }
  form .su{
    margin: -20% 0 0 30%;
  }
}



@media only screen and (max-width: 800px){
  .form{
    height: 150vh;
  }
  form{
    position: absolute;
    top: 75%;
    width: 100vw;
    height: 120vh;
  }
  form .su{
    margin-top: 10%;
  }
}




@media only screen and (max-width: 500px){
  .form{
    width: 150vw;
    height: 150vh;
  }
  form{
    position: absolute;
    top: 75%;
    width: 140vw;
    left: 50%;
    height: 95vh;
  }
  form .su{
    margin-top: 10%;
  }
  form .row input{
    width: 50%;
  }
  form .flex .break, form .flex .brunch, 
  form .flex .lunch, form .flex .dinner{
    width: 40%;
  }
}






@media only screen and (max-width: 450px){
  .form{
    width: 200vw;
    height: 150vh;
  }
  form{
    position: absolute;
    top: 75%;
    width: 140vw;
    left: 50%;
    height: 90vh;
  }
  form .su{
    margin-top: 10%;
  }
  form .row input{
    width: 50%;
  }
  form .flex .break, form .flex .brunch, 
  form .flex .lunch, form .flex .dinner{
    width: 40%;
  }
}


@media only screen and (max-width: 400px){
  .form{
    width: 150vw;
    height: 150vh;
  }
  form{
    position: absolute;
    top: 75%;
    width: 140vw;
    left: 50%;
    height: 100vh;
  }
  form .su{
    margin-top: 10%;
  }
  form .row input{
    width: 50%;
  }
  form .flex .break, form .flex .brunch, 
  form .flex .lunch, form .flex .dinner{
    width: 40%;
  }
}





@media only screen and (max-width: 400px){
  .form{
    width: 200vw;
    /* height: 150vh; */
  }
}





/* Animation */
@keyframes bck{
  from{
    opacity: 0%;
    width: 0%;
  }
  to{
    opacity: 100%;
    width: 100%;
  }
}

@keyframes form{
  from{
    opacity: 0%;
    left: 0%;
  }
  to{
    opacity: 100%;
    left: 25%;
  }
}

@keyframes txt{
  from{
    opacity: 0%;
  }
  to{
    opacity: 100%;
  }
}


</style>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Réservations</title>
</head>
<body>
  <?php require("nav.php"); ?>
  <section id="form" class="form">
    <div class="max-width">
      <!-- <div class="res-c">
        <h1>Grosses Bouchées</h1>
        <p>hommes affamés rendus heureux</p>
      </div> -->
      <form action="proxy.php?msg=reservation" method="POST">
      <div class="head">Des détails</div>
        <div class="row">
          <?php

            if(empty($fname)){
                $fErr = "This field is required!";
            }
            echo "<span style= 'color: red; position: absolute; left: 2%;'> *</span>";
          ?>
          <input type="text" name="fname" placeholder="Prénom">

          <?php

            if(empty($lname)){
                $lErr = "This field is required!";
            }
            echo "<span style= 'color: red;'> *</span>";
          ?>
          <input type="text" name="lname" placeholder="Nom de famille">

          
          <?php

            if(empty($email)){
                $emErr = "This field is required!";
            }
            echo "<span style= 'color: red;'> *</span>";
          ?>
          <input type="email" name="email" placeholder="Adresse e-mail">
        </div>
        <div class="row">

        
        <?php

            if(empty($phone)){
                $pErr = "This field is required!";
            }
            echo "<span style= 'color: red; position: absolute; left: '> *</span>";
        ?>
          <input type="text" name="phone" placeholder="Mobile (indicatif international requis)">

          
          <?php

            if(empty($date)){
                $dErr = "This field is required!";
            }
            echo "<span style= 'color: red; position: absolute; left: 2%;'> *</span>";
          ?>
          <input type="date" name="date" value="date" placeholder= "La date choisie doit être dans les jours ouvrables">
        </div>



        <!-- Meal time -->

        <div class="quest">Pour quel service réservez-vous ?
          <?php

            if(empty($meal)){
                $mErr = "This field is required!";
            }
            echo "<span style= 'color: red;'> *</span>";
          ?>
        </div>
        <div class="flex">
            <div class="break">
              <input type="radio" name="food" value="Breakfast">
              <label for="breakfast">Déjeuner</label>
            </div>
            <div class="brunch">
              <input type="radio" name="food" value="Brunch">              
              <label for="brunch">le déjeuner</label>
            </div>
        </div>
        <div class="flex">
            <div class="lunch">
              <input type="radio" name="food" value="Lunch">              
              <label for="lunch">le déjeuner</label>
            </div>
            <div class="dinner">
              <input type="radio" name="food" value="Dinner">              
              <label for="dinner">Dîner</label>
            </div>
        </div>

        <!-- People to be present -->

        <div class="quest2">Pour quel service réservez-vous ?
          
          <?php

            if(empty($people)){
                $pErr = "This field is required!";
            }
            echo "<span style= 'color: red;'> *</span>";
            
          ?>

        </div>
        <div class="row">
          <select name="people">
            <option value="One">Un</option>
            <option value="Two">Deux</option>
            <option value="Three">Trois</option>
            <option value="Four">Quatre</option>
            <option value="Five">Cinq</option>
          </select>
        </div>
        <!-- <div class="block"></div>
            <div class="quest">Pour quel service réservez-vous ?</div>
            <div class="break">
              <input type="radio" name="food" value="Breakfast">
              <label for="breakfast">Déjeuner</label>
            </div>
            <div class="brunch">
              <input type="radio" name="food" value="Brunch">              
              <label for="brunch">le déjeuner</label>
            </div>
            <div class="lunch">
              <input type="radio" name="food" value="Lunch">              
              <label for="lunch">le déjeuner</label>
            </div>
            <div class="dinner">
              <input type="radio" name="food" value="Dinner">              
              <label for="dinner">Dîner</label>
            </div>
        </div> -->
        <div class="su">
          <input type="submit" value="Soumettre" name="Soumettre<"> 
        </div>
      </form>
    </div>
  </section>

  <?php

      require('footer.php');

  ?>
</body>
</html>