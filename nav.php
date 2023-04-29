<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link type="stylesheet" rel="style.css">
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
