<?php 
require("proxy.php");

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

.book{
  height: 110vh;
  background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.7)), url('assets/AdobeStock_201764898_Preview.jpeg');
  background-repeat: no-repeat;
  background-size: cover;
  /* background-attachment: fixed; */
  animation-name: bck2;
  animation-duration: 1s;
  animation-delay: .5s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
}
.book .book-c{
  position: absolute;
  top: 50%;
  left: 80%;
  transform: translate(-50%, -50%);
}
.book .book-c h1{
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
.book .book-c p{
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
.book .book-c p::before{
  content: '';
  display: block;
  background: #e5e5e5;
  width: 80px;
  height: 2px;
  border-radius: 5px;
  transform: translate(-90px, 28px);
}
.book .book-c p::after{
  content: '';
  display: block;
  background: #e5e5e5;
  width: 80px;
  height: 2px;
  border-radius: 5px;
  transform: translate(420px, -14px);
}

/* Form Styling */
.form1{
  position: absolute;
  top: 55%;
  left: 25%;
  width: 30%;
  height: 80vh;
  transform: translate(-50%, -50%);
  animation-name: form;
  animation-duration: 1s;
  animation-delay: 6.4s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
}
.form1 .head{
  text-align: center;
  color: #e5e5e5;
  font-size: 25px;
  font-weight: 500;
  font-family: var(--os), sans-serif;
  padding: 22px;
  background: #474747;
}
.form1 .content{
  display: block;
  height: 30vh;
  justify-content: space-evenly;
  align-items: center;
  padding: 35px;
  background: #e5e5e5;
}
.form1 .content input{
  display: block;
  text-align: center;
  margin-top: 20px;
  outline: none;
  border: none;
  border-bottom: 2px solid #474747;
  width: 100%;
  background: #e5e5e5;
  font-size: 15px;
  font-family: var(--os), sans-serif;
}
.form1 .content select{
  margin-top: 30px;
  outline: none;
  border: none;
  border-bottom: 2px solid #474747;
  width: 100%;
  transition: all .5s;
  background: #e5e5e5;
  font-size: 16px;
  font-family: var(--os), sans-serif;
}
.form1 .content select option{
  text-align: center;
}

.form2{
  position: absolute;
  top: 80%;
  left: 25%;
  width: 30%;
  height: 37vh;
  transform: translate(-50%, -50%);
  background: #e5e5e5;
  animation-name: form;
  animation-duration: 1s;
  animation-delay: 6.4s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
}
.form2 .dash{
  content: '';
  display: block;
  height: 1px;
  width: 90%;
  background: #474747;
  margin-top: 40px;
  margin-left: 4%;
}
.form2 .ops{
  display: block;
}
.form2 .quest{
  padding-top: 20px;
  padding-bottom: 20px;
  color: #474747;
  text-align: center;
  font-size: 18px;
  font-family: var(--os), sans-serif;
}
.form2 .rd{
    padding-left: 2%;
}
.form2 .rd label{
  font-size: 18px;
  color: #474747;
    padding-left: 7%;
  margin-top: -5px;
  font-family: var(--os), sans-serif;
}
.form2 .rd .input{
  width: 100%;
}
.form2 .smt{
  padding-top: 10px;
  margin: 3% auto 0% 30%;
}
.form2 .smt input{
  padding: 10px 40px;
  font-size: 18px;
  background: #fff;
  color: #000;
  border: 2px solid #fff;
  transition: all .3s ease-in-out;
}
.form2 .smt input:hover{
  background: #fff;
  opacity: 0.7;
  border: 2px solid #fff;
}


/* Responsive Designs */
/* @media only screen and (max-width: 1440px){
  .book{
    height: 110vh;
    width: 100vw;
    background-size: cover;
    background-attachment: fixed;
  }
  .book .book-c{
    padding-left: 10%;
  } 
  .form1{
    position: absolute;
    top: 65%;
    left: 25%;
    width: 35%;
  }
  .form1  .content{
    height: 15vh;
  }
  .form2{
    position: absolute;
    top: 60%;
    left: 25%;
    width: 35%;
    height: 20vh;
  }
  .form1 .head{
    font-size: 20px;
  }
  .form1 .content{
    padding: 0 auto 10px auto;
  }
  .form1 .content input{
    font-size: 20px;
  }
  .form2 .rd{
    padding-left: 2%;
  }
  .form2 .rd label{
    font-size: 18px;
    padding-left: 7%;
  }
  .form2 .rd .input{
    width: 100%;
  }
  .form2 .smt{
    margin: 3% auto 0% 32%;
  }

} */

@media only screen and (max-width: 1187px){
  .book{
    height: 110vh;
    background-size: cover;
    background-attachment: fixed;
  }
  .book .book-c{
    display: none;
  }
  .form1{
    margin: -3% auto 20% 28%;
    width: 45%;
  } 
  .form1 .content{
    height: 20vh;
  }
  .form1 input{
    padding-bottom: 10px;
  }
  .form2{
    margin: 3% auto 10% 28%;
    width: 45%;
    height: 20vh;
  }
  /* .form2 .dash{
    display: none;
  } */
  .form1 .head{
    font-size: 20px;
  }
  .form1 .content input{
    font-size: 20px;
  }
  .form2 .rd{
    padding-left: 2%;
  }
  .form2 .rd label{
    font-size: 18px;
    padding-left: 10%;
  }
  .form2 .rd .input{
    width: 100%;
  }
  .form2 .smt{
    margin: 3% auto 0% 35%;
  }
}


@media only screen and (max-width: 900px){
  .book{
    height: 110vh;
    background-size: cover;
    background-attachment: fixed;
  }
  .book .book-c{
    display: none;
  }
  .form1{
    margin: -15% auto 10% 28%;
    width: 55%;
  } 
  .form2{
    margin: -10% auto 10% 28%;
    width: 55%;
    height: 17vh;
  }
  .form2 .dash{
    display: none;
  }
  .form1 .head{
    font-size: 20px;
  }
  .form1 .content{
    padding: 0 auto 10px auto;
  }
  .form1 .content input{
    font-size: 20px;
  }
  .form2 .rd{
    padding-left: 2%;
  }
  .form2 .rd label{
    font-size: 18px;
    padding-left: 10%;
  }
  .form2 .rd .input{
    width: 100%;
  }
  .form2 .smt{
    margin: 3% auto 0% 35%;
  }
}

@media only screen and (max-width: 600px){
  .book{
    height: 110vh;
  }
  .book .book-c{
    display: none;
  }
  .form1{
    margin: -28% auto 10% 28%;
    width: 55%;
  } 
  .form2{
    margin: -25% auto 10% 28%;
    width: 55%;
  }
  .form2 .content{
    height: 40vh;
  }
  .form1 .head{
    font-size: 19px;
  }
  .form1 .content{
    height: 15vh;
  }
  .form1 .content input{
    font-size: 17px;
  }
  .form2 .rd label{
    font-size: 16px;
  }
  .form2 .rd .input{
    width: 100%;
  }
  .form2 .smt{
  margin: 3% auto 0% 28%;
  }
}



/* Animation */
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

@keyframes bck2{
  from{
    opacity: 0%;
    /* width: 0%; */
  }
  to{
    opacity: 100%;
    /* width: 100%; */ 
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
  <title>Grosses Bouchées - France</title>
  <link type="stylesheet" rel="css/style.css">
</head>
<body>
  <?php include("nav.php"); ?>
  <section id="book" class="book">
    <div class="max-width">
      <div class="book-c">
        <h1>Grosses Bouchées</h1>
        <p>hommes affamés rendus heureux</p>
      </div>
      <form action="proxy.php?pg=reservation" method="post" class="form1">
        <div class="head">Réservation</div>
            </div>
          </div>
          <div class="smt">
          <input type="submit" value="Soumettre" name="Soumettre">
          </div>
      </form>
    </div>
  </section>

</body>
</html>
















