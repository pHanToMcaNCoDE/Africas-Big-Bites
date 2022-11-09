<?php 


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
  
  /* Colors */
  --lg: #e5e5e5;
  --dg: #474747;
  --lp: #e5e5;
  --ash: #4747;
  --drG: #474;
  --ck: #000;
  --w: #fff;
  --cr: crimson;
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
  min-width: 500px;
  padding: 0 40px;
  margin: auto;
}


/* Responsive Designs */
@media only screen and (max-width: 1440px){
  .form{
    height: 100vh;
    /* background-size: cover; */
    /* width: 110vw; */
  }
  .form .res-c{
    padding-left: 10%;
  }
  form{
    margin-top: -3%;
    height: 40vh;
  }

}

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
    width: 55%; 
    height: 60vh; 
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
    margin: -20% 0 0 36%;
  }
}


@media only screen and (max-width: 900px){

}

@media only screen and (max-width: 600px){

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
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php require("nav.php"); ?>
  <section id="form" class="form">
    <div class="max-width">
      <div class="res-c">
        <h1>Grosses Bouchées</h1>
        <p>hommes affamés rendus heureux</p>
      </div>
      <div class="thks">
        <h3>Thank You</h3>
        <hr>
        <div class="txt">
          <p>More information will be sent to you via email. We will give you a remindal of your reservation, few days before expectancy day.</p>
        </div>
      </div>
    </div>
  </section>

 
</body>
</html>