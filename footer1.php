<?php

?>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Parisienne&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,500;1,300;1,400&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Nanum+Myeongjo&display=swap');


*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
:root{
  --font: 'Parisienne';
  --op: 'Open Sans';
  --ds: 'Dancing Script';
  --rg: 'Rajdhani';
  --m: 'Nanum Myeongjo';
}
html{
  scroll-behavior: smooth;
}
body{
  text-decoration: none;
}
.max-width{
  max-width: 1330px;
  min-width: 500px;
  padding: 0 80px;
  margin: auto;
}
footer{
  /* margin-top: 31px; */
  position: absolute;
  left: 0;
  width: 100%;
  background: rgb(140, 167, 169);
  opacity: .8;
  color: #fff;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 2.5s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
}
footer .max-width{
  display: flex;
  justify-content: space-between;
  align-items: center;
}
footer .f-c{
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 25px;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 7.7s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
}
footer .f-c .f-logo{
  text-align: center;
  padding-left: 30px;
}
footer .f-c .f-logo a{
  display: inline-block;
  text-decoration: none;
  font-size: 40px;
  font-family: var(--font), serif;
  color: #e5e5e5;
}
footer .f-c .f-logo a::after{
  content: '';
  display: block;
  background: #e4e4e5;
  width: 0;
  height: 2px;
  transition: width .3s;
}
footer .f-c .f-logo a:hover::after{
  width: 100%;
  transition: width .3s;
}
footer .f-c .f-logo p{
  text-align: center;
  font-family: var(--ds), sans-serif;
  font-size: 25px;
  color: #fff;
  display: block;
}
footer .f-c p::before{
  content: '';
  display: block;
  background: #e5e5e5;
  width: 20px;
  height: 2px;
  border-radius: 5px;
  transform: translate(-30px, 20px);
}
footer .f-c p::after{
  content: '';
  display: block;
  background: #e5e5e5;
  width: 20px;
  height: 2px;
  border-radius: 5px;
  transform: translate(300px, -11px);
}
footer .explore h2{
  font-size: 23px;
  font-family: var(--rg), serif;
  color: #474747;
  padding-bottom: 10px
}
footer .explore li{
  list-style: none;
  padding-top: 5px;
}
footer .explore li a{
  margin-top: 25px;
  text-decoration: none;
  font-size: 16px;
  font-family: var(--m), serif;
  color: #e5e5e5;
}
footer .explore li a::after{
  content: '';
  display: block;
  background: #e4e4e5;
  width: 0;
  height: 2px;
  transition: width .3s;
}
footer .explore li a:hover::after{
  width: 30%;
  transition: width .3s;
}
footer .visit h2{
  font-size: 23px;
  font-family: var(--rg), serif;
  color: #474747;
  padding-bottom: 10px
}
footer .visit li{
  padding-top: 10px;
  list-style: none;
  font-size: 16px;
  font-family: var(--m), serif;
  color: #e5e5e5;
}
footer .follow h2{
  font-size: 22px;
  font-family: var(--rg), serif;
  color: #474747;
  padding-bottom: 10px
}
footer .follow li{
  list-style: none;
}
footer .follow li a{
  text-decoration: none;
  font-size: 18px;
  font-family: var(--rg), serif;
  color: #e5e5e5;
}
footer .follow li a::after{
  content: '';
  display: block;
  background: #e4e4e5;
  width: 0;
  height: 2px;
  transition: width .3s;
}
footer .follow li a:hover::after{
  width: 30%;
  transition: width .3s;
}
footer .contact h2{
  font-size: 23px;
  font-family: var(--rg), serif;
  color: #474747;
  padding-bottom: 10px
}
footer .contact li{
  list-style: none;
}
footer .contact li p{
  font-size: 16px;
  color: #e5e5e5;
  font-family: var(--m), serif;
}
footer .end{
  text-align: center;
  background: #000;
  padding-top: 20px;
  padding-bottom: 20px;
  font-size: 16px;
  font-family: var(--m), serif;
  padding-left: 5%;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 7.7s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
}





/*******************************************************************
# Responsive Design 
*******************************************************************/





@media only screen and (max-width: 600px){
  footer{
    width: 150%;
  }
  footer .f-c .f-logo{
    display: none;
  }
  footer .explore, footer .visit, footer .follow, footer .contact{
    padding-left: 15px;
  }

}



@media only screen and (max-width: 420px){
  .footer .max-width footer{
    width: 200vw;
    height: 100vh;
  }

}




@media only screen and (max-width: 375px){
  footer{
    width: 150%;
  }
  footer .f-c .f-logo{
    display: none;
  }
  footer .explore, footer .visit, footer .follow, footer .contact{
    padding-left: 15px;
  }

}



@media only screen and (max-width: 300px){
  footer{
    width: 200%;
  }
  footer .f-c .f-logo{
    display: none;
  }
  footer .explore, footer .visit, footer .follow, footer .contact{
    padding-left: 15px;
  }

}



</style>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link type="stylesheet" rel="css/style.css">
</head>
<body>
  <section id="footer" class="footer">
    <div class="max-width">  
      <footer>
        <div class="f-c">
          <div class="f-logo">
            <a href="#">Grosses Bouchées</a>
            <p>hommes affamés rendus heureux</p>
          </div>
          <div class="explore">
            <h2>Explore</h2>
            <li><a href="#">Domicile</a></li>
            <li><a href="#">Sur</a></li>
            <li><a href="#">Les heures</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">Événements</a></li>
            <li><a href="#">Contacter</a></li>
          </div>
          <div class="visit">
            <h2>Visit</h2>
            <li>Avenue des Champs-Élysées, Paris</li>
            <li>Quai du Général-Sarrail, Lyon</li>
            <li>Quai du Général-Sarrail, Geneva</li>
            <li>Photo by Cheryl Gerber, Orléans</li>
          </div>
          <div class="follow">
            <h2>Follow</h2>
            <li><a href="#">FB</a></li>
            <li><a href="#">IG</a></li>
            <li><a href="#">TW</a></li>
            <li><a href="#">LN</a></li>
          </div>
          <div class="contact">
            <h2>Contact Us</h2>
            <li><p>+33-04-152-6371</p></li>
            <li><p>grossesbouchees@gmail.com</p></li>
          </div>
        </div>
        <div class="end">
        &copy; <?php echo(date('Y')); ?> Grosses Bouchées, All Rights Reserved</div>
      </div>
      </footer>
    </div>
  </section>
</body>
</html>




















