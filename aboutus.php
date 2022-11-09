<?php 








?>

<style>
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
html{
  scroll-behavior: smooth;
}
body{
  overflow-x: hidden;
  text-decoration: none;
}
.max-width{
  max-width: 1330px;
  min-width: 500px;
  padding: 0 80px;
  margin: auto;
}


/* First-Half Of The About Page */
.about{
  height: 100vh;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 2.5s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: all .5s;
}
.about .max-width{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.about .about-c{
  /* display: flex; */
  background-image: url('assets/about/we.jpg');
  height: 100vh;
}
.about .about-c .left{
  width: 45%;
  flex: 33.3%;
  position: absolute;
  left: 0;
  height: 100vh;
  background: var(--cham);
  padding: 50px 60px;
}
.about .about-c .left h4{
  font-size: 40px;
  font-family: var(--font), serif;
  color: var(--whisky);
  padding-top: 20px;
  font-weight: 500;
  margin-top: 30%;
  border-top-left-radius: 3px;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 6.6s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: width .5s;
  transition: all .5s ease;
}
.about .about-c .left .line{
  content: '';
  display: block;
  background: #e5e5;
  margin-left: 20%;
  width: 50px;
  height: 2px;
  font-family: var(--font), serif;
  margin-bottom: 30px;
  animation-name: line;
  animation-duration: 2s;
  animation-delay: 6.8s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: width .5s;
}
.about .about-c .left p{
  padding-top: 10px;
  text-align: justify;
  font-size: 20px;
  font-family: var(--av), sans-serif;
  color: #474747;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 7s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: all .5s;
}
.about .about-c .right{
  width: 55%;
  flex: 33.3%;
  margin-left: 0%;
}
.about .about-c .right img{
  width: 55%;
  height: 100vh;
  position: fixed;
  right: 0;
}

/* Second-Half Of The About Page */

.team-f{
  height: 105vh;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 2.5s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
}
.team-f .max-width{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.team-f .about-c2{
  display: flex;
} 
.team-f .about-c2 .left{
  width: 45%;
  flex: 33.3%;
  position: absolute;
  left: 0;
}
.team-f .about-c2 .left img{
  width: 100%;
  height: 105vh;
}
.team-f .about-c2 .right{
  width: 55%;
  flex: 33.3%;
  position: absolute;
  right: 0;
  height: 105vh;
  background:  var(--sel);
  padding: 60px;
}
.team-f .about-c2 .right h4{
  font-size: 40px;
  font-family: var(--font), serif;
  color: var(--whisky);
  padding-top: 20px;
  font-weight: 500;
  padding-top: 30%;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 7.2s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: width .5s;
  transition: all .5s ease;
}
.team-f .about-c2 .right .line{
  content: '';
  display: block;
  background: #e5e5;
  margin-left: 25%;
  width: 50px;
  height: 2px;
  font-family: var(--font), serif;
  margin-bottom: 30px;
  animation-name: line;
  animation-duration: 2s;
  animation-delay: 7.4s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: width .5s;
}
.team-f .about-c2 .right p{
  text-align: justify;
  font-size: 20px;
  font-family: var(--av), sans-serif;
  font-weight: 400;
  color: #474747;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 7.7s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: all .5s;
}
.team-f .about-c2 .right .team-btn{
  margin-top: 8%;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 8s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: all .5s;
}
.team-f .about-c2 .right .team-btn a{
  border: 2px solid var(--whisky);
  font-size: 22px;
  font-family: var(--whisky), sans-serif;
  padding: 10px 20px;
  text-decoration: none;
  color: var(--whisky);
  transition: all .3s ease-in-out;
}
.team-f .about-c2 .right .team-btn a:hover{
  background: var(--whisky);
  color: var(--w);
  border: 2px solid var(--whisky);
}

/* Animation */

/* @keyframes line{
  from{
    width: 0px;
    height: 2px;
  }
  to{
    width: 50px;
    height: 2px;
  }
  
}

@keyframes txt{
  from{
    opacity: 0%;
  }
  to{
    opacity: 100%;
  }
} */




/***************************************************** 
# Responsiveness 
*****************************************************/

@media only screen and (max-width: 600px){
  
  .about .about-c .left{
    width: 100%;
    flex: 100%;
    height: 100vh;
  }
  .about .about-c .left h2{
    font-size: 20px;
  }
  .about .about-c .left p{
    font-size: 18px;
  }
  .about .about-c .right{
    display: none;
  }
  .team-f .about-c2 .left{
    display: none;
  }
  .team-f .about-c2 .right{
    width: 100%;
    height: 90vh;
    flex: 100%;
  }
  .team-f .about-c2 .right h2{
    font-size: 20px;
  }
  .team-f .about-c2 .right p{
    font-size: 18px;
  }
}





@media only screen and (max-width: 700px){
  
  .about .about-c .left{
    width: 100%;
    flex: 100%;
    height: 100vh;
  }
  .about .about-c .left h2{
    font-size: 20px;
  }
  .about .about-c .left p{
    font-size: 18px;
  }
  .about .about-c .right{
    display: none;
  }
  .team-f .about-c2 .left{
    display: none;
  }
  .team-f .about-c2 .right{
    width: 100%;
    height: 90vh;
    flex: 100%;
  }
  .team-f .about-c2 .right h2{
    font-size: 20px;
  }
  .team-f .about-c2 .right p{
    font-size: 18px;
  }
}




@media only screen and (max-width: 800px){
  
  .about .about-c .left{
    width: 100%;
    flex: 100%;
    height: 100vh;
  }
  .about .about-c .left h2{
    font-size: 22px;
  }
  .about .about-c .left p{
    font-size: 20px;
  }
  .about .about-c .right{
    display: none;
  }
  .team-f .about-c2 .left{
    display: none;
  }
  .team-f .about-c2 .right{
    width: 100%;
    height: 90vh;
    flex: 100%;
  }
  .team-f .about-c2 .right h2{
    font-size: 22px;
  }
  .team-f .about-c2 .right p{
    font-size: 20px;
  }
}




@media only screen and (max-width: 900px){
  
  .about .about-c .left{
    width: 100%;
    flex: 100%;
    height: 100vh;
  }
  .about .about-c .left h2{
    font-size: 22px;
  }
  .about .about-c .left p{
    font-size: 20px;
  }
  .about .about-c .right{
    display: none;
  }
  .team-f .about-c2 .left{
    display: none;
  }
  .team-f .about-c2 .right{
    width: 100%;
    height: 90vh;
    flex: 100%;
  }
  .team-f .about-c2 .right h2{
    font-size: 22px;
  }
  .team-f .about-c2 .right p{
    font-size: 20px;
  }
}

</style>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grosses Bouchées - France</title>
</head>
<body>
  <?php echo(include('nav2.php')); ?>
  <section id="about" class="about">
    <div class="max-width">
      <div class="about-c">
        <div class="left">
          <h4>À propos de nous</h4>
          <div class="line"></div>
          <p>Grosses Bouchées est surtout connu comme meilleur restaurant de France, déclaré le 5 décembre 2021.</p>
            <p> Grosses Bouchées est également connu pour sa cuisine et ses douceurs.</p>
          <p> t a été fondée par Carlton Escoffier en 2006. Grosses Bouchées est soutenue par une équipe de longue date de cadres et d'employés passionnés.</p>
        </div>
        <div class="right">
           <img src="assets/about/about3.jpg" alt="Our Team"> -
        </div>
      </div>
    </div>
  </section>
  <section id="team-f" class="team-f">
        <div class="max-width">
          <div class="about-c2">
            <div class="left">
              <img src="assets/about/about4.jpg" alt="Our Team">
            </div>
            <div class="right">
              <h4>Notre famille</h4>
              <div class="line"></div>
              <p>En savoir plus sur notre famille et vouloir courir dans les coulisses de Grosss Bouchées</p>
              <div class="team-btn">
                <a href="team.php">Savoir plus</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php include('footer.php'); ?>
</body>
</html>










