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
  --whisky: #d4a37a;
  --lg: #ffffff;
  --dg: #474747;
  --lp: #e5e5;
  --ash: #4747;
  --drG: #474;
  --ck: #000;
  --w: #fff;
  --cr: crimson;
}
*{
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
.hrs h3, .menu h3,
.eve h3, .con h3{
  text-align: center;
  font-family: var(--p);
  font-size: 35px;
  color: var(--lp);
}

/* Navigation Styling */
nav{
  position: fixed;
  width: 100%;
  height: 70px;
  padding: 15px 0;
  z-index: 999;
}
nav .max-width{
  display: flex;
  justify-content: space-between;
  align-items: center;
}


/* Menu Styling */

nav .max-width .m div{
  content: '';
  height: 1.5px;
  background: var(--whisky);
  margin: 5px 0;
  border-radius: 10px;
  transition: .5s;
  animation-name: textAp;
  animation-duration: 1.5s;
  animation-delay: 3s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
}
nav .max-width .m{
  cursor: pointer;
  display: block;
  width: 40px;
}
nav .max-width .m .one{
  width: 30px;
}
nav .max-width .m .two{
  width: 20px;
}
nav .m .three{
  width: 10px;
}
nav .max-width .m:hover div{
  width: 40px;
}


nav .links{
  background: var(--lg);
  width: 30%;
  height: 100vh;
  position: absolute;
  left: -120%;
  top: 0%;
  /* z-index: 999; */
  padding: 100px;
  align-items: center;
  justify-content: center;
  z-index: 999;
}
nav .links.active{
  left: 0%;
}
nav .links li{
  padding-bottom: 35%;
  text-align: center;
  list-style: none;
  transition: width 0.5s ease-in-out;
}
nav .links li a{
  display: inline-block;
  color: var(--black);
  text-decoration: none;
  font-size: 30px;
  font-family: var(--m), sans-serif;
}
nav .links .cancel{
    height: 1px;
    width: 50px;
    border-radius: 10px;
    position: absolute;
    top: 3.5%;
    left: 31%;
    font-size: 25px;
    color: var(--whisky);
    cursor: pointer;
}
nav .logo a{
  text-decoration: none;
  font-size: 35px;
  margin-left: 80px;
  font-family: var(--p), sans-serif;
  color: var(--whisky);
  animation-name: textAp;
  animation-duration: 1.5s;
  animation-delay: 2s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  z-index: 2;
}
nav .socios{
  display: flex;
}
nav .socios li{
  list-style: none;
  display: inline-block;
}
nav .socios li a{
  display: inline-block;
  text-decoration: none;
  font-size: 22px;
  font-family: var(--rd), sans-serif;
  color: var(--lg);
  margin-left: 20px;
}
nav .socios li a::after{
  content: '';
  display: block;
  background: var(--whisky);
  width: 0;
  height: 1px;
  transition: all .3s;
}
nav .socios li a:hover::after{
  width: 100%;
  background: var(--whisky);
  color: var(--whisky);
}
.s1{
  animation-name: textAp;
  animation-duration: 1s;
  animation-delay:4s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
}
.s2{
  animation-name: textAp;
  animation-duration: 1s;
  animation-delay:4.3s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
}
.s3{
  animation-name: textAp;
  animation-duration: 1s;
  animation-delay:4.7s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
}
.s4{
  animation-name: textAp;
  animation-duration: 1s;
  animation-delay:5s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
}

/* Responsive Design */
@media only screen and (max-width: 1200px){

  /* Navigation */

  nav{
    position: fixed;
    width: 100%;
    height: 70px;
    padding: 15px 0;
  }
  nav .logo a{
    font-size: 35px;
  }
  nav .socios li a{
    margin-left: 20px;
    font-size: 22px;
  }
}


@media only screen and (max-width: 900px){

  /* Navigation */

  nav{
    position: fixed;
    width: 100%;
    height: 70px;
    padding: 15px 0;
  }
  nav .links .cancel i{
    font-size: 19px;
  }
  nav .logo a{
    font-size: 25px;
  }
  nav .links li {
    padding-top: 15%;
    width: 40%;
  }
  nav .links li a{
    padding-top: 20%;
  }
  nav .socios li a{
    margin-left: 20px;
    font-size: 20px;
  }
}


@media only screen and (max-width: 600px){
  
  nav .links{
    width: 100%;
    height: 150vh;
  }
  nav .links li {
    padding-bottom: 8%;
  }
  nav .links li a{
    text-align: center;
    padding-left: 60%;
  }
}

@media only screen and (max-width: 500px){


/* Navigation */

  nav{
    position: fixed;
    width: 100%;
    height: 70px;
    padding: 15px 0;
  }
  nav .logo a{
    display: none;
  }
  nav .socios li a{
    margin-left: 20px;
    font-size: 16px;
  }
  nav .links{
    width: 100%;
    height: 150vh;
  }
  nav .links li {
    padding-bottom: 10%;
  }
  nav .links li a{
    text-align: center;
    padding-left: 60%;
  }
}


@media only screen and (max-width: 415px){
  
  nav .links{
    width: 100%;
    height: 150vh;
  }
}


@media only screen and (max-width: 375px){


  /* Navigation */

  nav{
    position: fixed;
    width: 100%;
    height: 70px;
    padding: 15px 0;
  }
  nav .logo a{
    display: none;
  }
  nav .socios li a{
    margin-left: 20px;
    font-size: 16px;
  }
  nav .links{
    width: 100%;
    height: 150vh;
  }
  nav .links li {
    padding-bottom: 10%;
    /* width: 40%; */
  }
  nav .links li a{
    text-align: center;
    padding-left: 60%;
    /* padding-right: 50%; */
  }
}


@media only screen and (max-width: 300px){


  /* Navigation */

  nav{
    position: fixed;
    width: 100%;
    height: 70px;
    padding: 15px 0;
  }
  nav .logo a{
    display: none;
  }
  nav .socios li a{
    margin-left: 20px;
    font-size: 16px;
  }
  nav .links{
    width: 100%;
    height: 200vh;
  }
  nav .links li {
    padding-bottom: 10%;
    /* width: 40%; */
  }
  nav .links li a{
    text-align: center;
    padding-left: 60%;
    /* padding-right: 50%; */
  }
}





/* Animation */
@keyframes textAp{
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
  <title>Document</title>
  <!-- <script src="https://kit.fontawesome.com/032421aa45.js" crossorigin="anonymous"></script> -->
</head>
<body>
<nav>
    <div class="max-width">
      <div class="m">
        <div class="one"></div>
        <div class="two"></div>
        <div class="three"></div>
      </div>
      <div class="links" id="links">
        <div class="cancel">
          &#x2715;
        </div>
        <li><a class="lnks" href="#hero">Home</a></li>
        <li><a class="lnks2" href="aboutus.php">About</a></li>
        <li><a class="lnks3" href="#hrs">Heures</a></li>
        <li><a class="lnks4" href="#menu">Menu</a></li>
        <li><a class="lnks5" href="#eve">Events</a></li>
        <li><a class="lnks6" href="#con">Contact</a></li>
      </div>
      <div class="logo"><a href="index.php">Grosses Bouchées</a></div>
      <div class="socios">
        <li class="s1"><a href="#">FB</a></li>
        <li class="s2"><a href="#">IG</a></li>
        <li class="s3"><a href="#">TW</a></li>
        <li class="s4"><a href="#">LN</a></li>
      </div>
    </div>
  </nav>

  <script>
    let taskBar = document.getElementById('links');
    let menu = document.querySelector('.m');
    let cancel = document.querySelector('.cancel');
    let links = document.querySelector('.lnks');
    let links2 = document.querySelector('.lnks2');
    let links3 = document.querySelector('.lnks3');
    let links4 = document.querySelector('.lnks4');
    let links5 = document.querySelector('.lnks5');
    let links6 = document.querySelector('.lnks6');


    menu.addEventListener('click', ()=>{
      taskBar.classList.add('active');
      taskBar.style.transition = "all .5s";
    });

    cancel.addEventListener('click', ()=>{
      taskBar.classList.remove('active');
    });

    links.addEventListener('click', ()=>{
      taskBar.classList.remove('active');
    });

    links2.addEventListener('click', ()=>{
      taskBar.classList.remove('active');
    });

    links3.addEventListener('click', ()=>{
      taskBar.classList.remove('active');
    });

    links4.addEventListener('click', ()=>{
      taskBar.classList.remove('active');
    });

    links5.addEventListener('click', ()=>{
      taskBar.classList.remove('active');
    });

    links6.addEventListener('click', ()=>{
      taskBar.classList.remove('active');
    });


  </script>
</body>
</html>
