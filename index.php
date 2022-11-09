 <?php


 require("nav.php");





?>


<style>
@import url('https://fonts.googleapis.com/css2?family=Parisienne&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,500;1,300;1,400&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Nanum+Myeongjo&display=swap');


:root{
  /* Fonts */




  /* Heading */
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




/*********************************************************************************************************** 
# Hero Section 
************************************************************************************************************/


.hero{
  /* position: relative; */
  top: 0;
  height: 100vh;
  background: linear-gradient(rgba(0,0,0,.1), rgba(0,0,0,.2)), url('assets/hero.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
  animation-name: heroSlide;
  animation-duration: 1.5s;
  animation-delay: 2s;
  z-index: 90;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;  
  transition: width .5s;
}
.hero .max-width{
  display: flex;
}
.hero .h-c{
  text-align: center;
  position: absolute;
  margin: 21% 0 0 19%;
}
.hero .h-c h1{
  font-size: 93px;
  font-family: var(--p), serif;
  color: var(--whisky);
  animation-name: textAp;
  animation-duration: 1s;
  animation-delay: 5.4s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
}
.hero .h-c p::before{
  content: '';
  display: block;
  transform: translate(-35px, 30px);
  background: var(--w);
  width: 80px;
  height: 2px;
  border-radius: 5px;
  animation-name: textAp;
  animation-duration: 1s;
  animation-delay: 5.6s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;  
  transition: width .5s;
}
.hero .h-c p{
  font-size: 40px;
  font-family: var(--ds), serif;
  color: var(--w);
  animation-name: textAp;
  animation-duration: 1s;
  animation-delay: 5.6s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;  
  transition: width .5s;
}
.hero .h-c p::after{
  content: '';
  display: block;
  transform: translate(550px, -15px);
  background: var(--w);
  width: 80px;
  height: 2px;
  border-radius: 5px;
  animation-name: textAp;
  animation-duration: 1s;
  animation-delay: 5.6s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;  
  transition: width .5s;
}
.hero .btn{
  margin: 1% 0 0 3%;
  padding-top: 5%;
  padding-left: 3px;
  animation-name: textAp;
  animation-duration: 1s;
  animation-delay: 5.9s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;  
  transition: width .5s;
}
.hero .btn a{
  padding: 10px 20px;
  text-decoration: none;
  border: 2px solid var(--w);
  color: var(--w);
  font-size: 23px;
  font-family: var(--av), serif;
  background: none;
  transition: all .3s ease;
}
.hero .btn a:hover{
  color: var(--ck);
  background: var(--w);
}
.hero .down{
  width: 4vw;
  height: 6.5vh;
  text-align: center;
  border: 2px solid var(--lg);
  cursor: pointer;
  display: block;
  text-align: center;
  color: var(--lg);
  font-size: 23px;
  font-family: var(--os);
  padding-top: 6px;
  margin: 8% 0 0 48%;
  animation-name: textAp;
  animation-duration: 1s;
  animation-delay: 6.2s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;  
  transition: width .5s;
}








/*********************************************************************************************************** 
# Location Section 
************************************************************************************************************/


.hero .locations{
  padding: 5px 0;
  /* background: var(--ck); */
  /* opacity: .2; */
  margin-top: 63.5%;
  width: 100%;
}
.hero .locations .content{
  height: 10vh;
  display: flex;
  justify-content: space-around;
  align-items: center;
}
.hero .locations .content .loc{
  display: block;
  justify-content: space-evenly;
  align-items: center;
  padding: 2%;
}
.hero .locations .content .loc i{
  color: var(--whisky);
  font-size: 23px;
  padding-left: 45px;
}
.hero .locations .content .loc .txt p{
  font-size: 17px;
  font-family: var(--av);
  font-weight: 400;
  color: var(--w);
  text-align: center;
}

#one{
  animation-name: textAp;
  animation-duration: 1s;
  animation-delay: 7.4s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;  
  transition: width .5s;
}

#two{
  animation-name: textAp;
  animation-duration: 1s;
  animation-delay: 7.7s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;  
  transition: width .5s;
}
#three{
  animation-name: textAp;
  animation-duration: 1s;
  animation-delay: 8s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;  
  transition: width .5s;
}
#four{
  animation-name: textAp;
  animation-duration: 1s;
  animation-delay: 8.1s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;  
  transition: width .5s;
}





/*********************************************************************************************************** 
# Hours Section 
************************************************************************************************************/

.hrs{
  padding: 100px 0;
  height: 100vh;
  background: var(--sel);
  animation-name: textAp;
  animation-duration: 1s;
  animation-delay: 10s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
}
.hrs .max-width .content{
  display: block;
  justify-content: space-between;
}
.hrs .max-width .head{
  padding: 5% 0 5% 45%;
}
.hrs .max-width .head h1::before,
.hrs .max-width .head h1::after{
  content: '';
  display: block;
  transform: translateX(-150px);
  width: 30vw;
  height: 3px;
  background: var(--whisky);
}
.hrs .max-width .head h1{
  font-size: 50px;
  font-family: var(--p), serif;
  color: var(--whisky);
  animation-name: textAp;
  animation-duration: 1s;
  animation-delay: 9.6s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
}
.hrs .max-width .content .small-talk{
  padding: 12px;
}
.hrs .max-width .content .small-talk p{
  padding-top: 2%;
  text-align: center;
  font-family: var(--av);
  font-size: 20px;
  animation-name: textAp;
  animation-duration: 1s;
  animation-delay: 9.9s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
} 
.hrs .max-width .content form{
  padding: 2% 0 3% 25%;
  animation-name: textAp;
  animation-duration: 1s;
  animation-delay: 10.3s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
}
.hrs .max-width .content form input{
  padding: 8px;
  width: 55%;
  font-family: var(--av);
  font-size: 17px;
  outline: none;
  background: none;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  border: 2px solid var(--whisky);
}
.hrs .max-width .content form button{
  padding: 9.1px 20.5px;
  border: 2px solid var(--whisky);
  background: var(--whisky);
  margin-left: -4px;
  cursor: pointer;
  color: var(--sel);
  font-size: 18px;
}
.hrs .max-width .descp{
  display: flex;
  justify-content: space-evenly;
  align-items: center;
}


/* Line Dividing the sub-sections */

.hrs .max-width .descp .line{
  content: '';
  background: var(--whisky);
  width: 1px;
  height: 15vh;
  border-radius: 10px;
  animation-name: textAp;
  animation-duration: 1s;
  animation-delay: 10.7s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
}


/* Breakfast Sub-section */

.hrs .max-width .descp .breakfast{
  display: block;
  justify-content: space-evenly;
  align-items: center;
}
.hrs .max-width .descp .breakfast h2{
  font-size: 22px;
  font-family: var(--rd);
  color: var(--whisky);
  font-weight: 600;
  animation-name: textAp;
  animation-duration: 1s;
  animation-delay: 10.5s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
}
.hrs .max-width .descp .breakfast li{
  list-style: none;
}
.hrs .max-width .descp .breakfast li p{
  font-family: var(--av);
  font-size: 17px;
  font-weight: 400;
  padding-top: 10px;
  animation-name: textAp;
  animation-duration: 1s;
  animation-delay: 10.7s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
}


/* Brunch Sub-section */

.hrs .max-width .descp .brunch{
  display: block;
  justify-content: space-evenly;
  align-items: center;
}
.hrs .max-width .descp .brunch h2{
  font-size: 22px;
  font-family: var(--rd);
  color: var(--whisky);
  font-weight: 600;
}
.hrs .max-width .descp .brunch li{
  list-style: none;
}
.hrs .max-width .descp .brunch li p{
  font-family: var(--av);
  font-size: 17px;
  font-weight: 400;
  padding-top: 10px;
}


/* Lunch Sub-Section */

.hrs .max-width .descp .lunch{
  display: block;
  justify-content: space-evenly;
  align-items: center;
}
.hrs .max-width .descp .lunch h2{
  font-size: 22px;
  font-family: var(--rd);
  color: var(--whisky);
  font-weight: 600;
}
.hrs .max-width .descp .lunch li{
  list-style: none;
}
.hrs .max-width .descp .lunch li p{
  font-family: var(--av);
  font-size: 17px;
  font-weight: 400;
  padding-top: 10px;
}


/* Dinner Sub-section */


.hrs .max-width .descp .dinner{
  display: block;
  justify-content: space-evenly;
  align-items: center;
}
.hrs .max-width .descp .dinner h2{
  font-size: 22px;
  font-family: var(--rd);
  color: var(--whisky);
  font-weight: 600;
}
.hrs .max-width .descp .dinner li{
  list-style: none;
}
.hrs .max-width .descp .dinner li p{
  font-family: var(--av);
  font-size: 17px;
  font-weight: 400;
  padding-top: 10px;
}



  



  /***********************************
  # Menu Section 
  ************************************/
.menu{
  padding: 100px 0;
  height: 100vh;
  background: linear-gradient(rgba(0,0,0,.2), rgba(0,0,0,.4)), url('assets/menu3.jpg'); 
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed; 
}
.menu .max-width{
  display: block;
  justify-content: space-between;
  align-items: center;
}
.menu .max-width .content{
  display: block;
  justify-content: space-evenly;
  align-items: center;
  padding-top: 17%;
}
.menu .max-width .content h1::before,
.menu .max-width .content h1::after{
  content: '';
  display: block;
  transform: translateX(375px);
  width: 30vw;
  height: 3px;
  background: var(--w);
}
.menu .max-width .content h1{
  font-size: 50px;
  font-family: var(--p), sans-serif;
  font-weight: 700;
  color: var(--w);
  padding: 10px;
  text-align: center;
}
.menu .max-width .content .txt{
  padding-top: 10px;
  margin-left: 5%;
  margin-right: 20px;
}
.menu .max-width .content .txt p{
  text-align: center;
  font-family: var(--av);
  font-size: 19px;
  font-weight: 400;
  color: var(--w);
}
.menu .max-width .content .btn{
  margin: 40px 0 0 42%;
}
.menu .max-width .content .btn a{
  text-decoration: none;
  color: var(--w);
  font-family: var(--av);
  font-weight: 400;
  font-size: 20px;
  padding: 10px 25px;
  border: 2px solid var(--w); 
  transition: all .3s ease;
}
.menu .max-width .content .btn a:hover{
  background: var(--w);
  color: var(--ck);
}



  



/***********************************
# News Letter Section 
************************************/

.news{
  height: 18vh;
  background: var(--pb);
}
.news .menu .max-width .news-letter{
  display: block;
  justify-content: space-between;
  align-items: center;
}
.news .max-width .news-letter p{
  padding: 2% 10% 0 10%;
  text-align: center;
  font-family: var(--av);
  font-size: 20px;
  /* animation-name: textAp;
  animation-duration: 1s;
  animation-delay: 9.9s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out; */
} 



.news .max-width .news-letter form{
  padding: .7% 0 3% 25%;
  /* animation-name: textAp;
  animation-duration: 1s;
  animation-delay: 10.3s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out; */
}
.news .max-width .news-letter form input{
  padding: 8px;
  width: 55%;
  font-family: var(--av);
  font-size: 17px;
  outline: none;
  background: none;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  border: 2px solid var(--whisky);
}
.news .max-width .news-letter form button{
  padding: 9.1px 20.5px;
  border: 2px solid var(--whisky);
  background: var(--whisky);
  margin-left: -4px;
  cursor: pointer;
  color: var(--sel);
  font-size: 18px;
}

/* .line{
  /* margin-top: 2%; 
  content: '';
  background: var(--ash);
  width: 100%;
  height: 1px;
} */


  



/***********************************
# Event Section 
************************************/

.eve{
  padding: 100px 0;
  height: 100vh;
  background: var(--sel);
}
.eve .max-width{
  display: block;
  justify-content: space-between;
  align-items: center;
}
.eve .content{
  display: flex;
  justify-content: space-evenly;
  align-items: center;
  padding-top: 5%;
}

/* Left of Event */

.eve .content .left img{
  width: 40vw;
  height: 70vh;
  transition: all .3s ease;
}


/* Right of Event */


.eve .content .right{
  display: block;
  justify-content: space-between;
  align-items: center;
}
.eve .content .right p{
  padding: 5px 0 0 20%;
  font-family: var(--av);
  font-size: 19px;
  font-weight: 400;
  color: var(--ck);
  text-align: justify;
}
.eve .content .right h1::before,
.eve .content .right h1::after{
  content: '';
  display: block;
  transform: translateX(100px);
  width: 30vw;
  height: 3px;
  background: var(--whisky);
}
.eve .content .right h1{
    text-align: center;
  font-size: 50px;
  font-family: var(--p), sans-serif;
  font-weight: 500;
  color: var(--whisky);
  padding: 10px;
}
.eve .content .right .btn{
  display: block;
  margin: 5% 0 0 20%;
  align-items: center;
}
.eve .content .right .btn a{
  padding: 10px 20px;
  text-decoration: none;
  color: var(--whisky);
  border: 2px solid var(--whisky);
  font-family: var(--av);
  width: 0;
  font-weight: 400;
  transition: all .3s ease;
}
.eve .content .right .btn a:hover{
  color: var(--w);
  background: var(--whisky);
}



  



/***********************************
# Contact Section 
************************************/

.con{
  padding: 100px 0;
  height: 65vh;
  background: var(--whisky);
}
.con h1{
  text-align: left;
  font-family: var(--p);
  font-size: 50px;
  color: var(--sel);
  margin-top: 5%;
  padding-left: 7%; 
}
.con .content{
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-top: 7%;
}
.con .content .row{
  display: block;
}
.con .content .row .head{
  font-size: 23px;
  font-family: var(--rd);
  color: var(--dg);
  padding: 3px;
}
.con .content .row li{
  display: block;
  list-style: none;
  font-family: var(--av);
  font-weight: 400;
  font-size: 17px;
  padding: 5px;
  color: var(--w);
}
.con .content .row a{
  color: var(--w);
  text-decoration: none;
  font-size: 17px;
}


.bottom-line{
  content: '';
  display: block;
  width: 200px;
  height: 100%;
  background: var(--dg);
}


/*********************************************************************************************************** 
# All Animations For index file
************************************************************************************************************/

/* Hero  */
/* 
@keyframes heroSlide{
  from{
    width: 0;
    opacity: 0;
  }
  to{
    width: 100%;
    opacity: 1;
  }
}


/* text 


@keyframes textAp{
  from{
    opacity: 0%;
  }
  to{
    opacity: 100%;
  }
}

/* Hero Alternative 

@keyframes slideWidth{
  from{
      width: 0%;
    }
    to{
      width: 100%;
    }
} */

/* @keyframes slide{
  0%,100%{
    background-image: url('assets/AdobeStock_286382742_Preview.jpeg');
  }
  20%{
    background-image: url('assets/AdobeStock_87748851_Preview.jpeg');
  }
  40%{
    background-image: url('assets/AdobeStock_107301921_Preview.jpeg');
  }
  60%{
    background-image: url('assets/AdobeStock_110391032_Preview.jpeg');
  }
  80%{
    background-image: url('assets/AdobeStock_270234103_Preview.jpeg');
  }
} */
















/*********************************************************************************************************** 
# Responsive Design
************************************************************************************************************/
@media only screen and (max-width: 1200px){
  .hero{
    height: 90vh;
  }
  .hero .h-c{
    margin: 28% 0 0 25%;
  }
  .hero .h-c h1{
    font-size: 80px;
  }
  .hero .h-c p{
    font-size: 25px;
  }
  .hero .btn a{
    font-size: 23px;
    padding: 10px 20px;
  }
  .hero .h-c p::before, .hero .h-c p::after{
    display: none;
  }
  .hero .down{
    font-size: 20px;
    width: 4vw;
    height: 4.5vh;
  }


  

  .menu .max-width .content h1::before,
  .menu .max-width .content h1::after{
    display: none;
  }
}


@media only screen and (max-width: 1100px){
  .hero{
    height: 140vh;
  }
  .hero .h-c{
    margin: 28% 0 0 20%;
  }
  .hero .h-c h1{
    font-size: 80px;
  }
  .hero .h-c p{
    font-size: 25px;
  }
  .hero .btn a{
    font-size: 23px;
    padding: 10px 20px;
  }
  .hero .h-c p::before, .hero .h-c p::after{
    display: none;
  }
  .hero .down{
    font-size: 20px;
    width: 4vw;
    height: 4.5vh;
  }
  




  /*********************************************************************************************************** 
  # Location Section 
  ************************************************************************************************************/
  
  
    .hero .locations{
      padding: 5px 0;
      margin-top: 85%;
      width: 100%;
    }
    .hero .locations .content .loc i{
      font-size: 17px;
    }
    .hero .locations .content .loc .txt p{
      font-size: 15px;
    }

    
/************************************************************  
# Hours Section 
*************************************************************/


  .hrs .max-width .head h1::before,
  .hrs .max-width .head h1::after{
    margin-left: 4%;
  }


  /*********************************
  # Menu Section 
  *********************************/
  
  .menu .max-width .content h1{
    margin-left: 9%;
  }



  /***********************************
  # News Letter Section 
  ************************************/

  .news{
    height: 23vh;
  }
  .news .max-width .news-letter p{
    font-size: 16px;
  }
  .news .max-width .news-letter form input{
    font-size: 16px;
    margin-left: -20%;
    width: 100%;
  }



}


@media only screen and (max-width: 1000px){
  .hero{
    height: 90vh;
  }
  .hero .h-c{
    margin: 28% 0 0 20%;
  }
  .hero .h-c h1{
    font-size: 80px;
  }
  .hero .h-c p{
    font-size: 25px;
  }
  .hero .btn a{
    font-size: 23px;
    padding: 10px 20px;
  }
  .hero .h-c p::before, .hero .h-c p::after{
    display: none;
  }
  .hero .down{
    font-size: 20px;
    width: 4vw;
    height: 4.5vh;
  }


  
  .hrs .max-width .head h1::before,
  .hrs .max-width .head h1::after{
    display: none;
  }
  

  .menu .max-width .content h1::before,
  .menu .max-width .content h1::after{
    display: none;
  }
}


@media only screen and (max-width: 960px){
  .hero{
    height: 90vh;
  }
  .hero .h-c{
    margin: 50% 0 0 20%;
  }
  .hero .h-c h1{
    font-size: 75px;
  }
  .hero .h-c p{
    font-size: 25px;
  }
  .hero .btn a{
    font-size: 23px;
    padding: 10px 20px;
  }
  .hero .h-c p::before, .hero .h-c p::after{
    display: none;
  }
  .hero .down{
    font-size: 20px;
  }
  




/*********************************************************************************************************** 
# Location Section 
************************************************************************************************************/


  .hero .locations{
    padding: 5px 0;
    margin-top: 150%;
    width: 100%;
  }
  .hero .locations .content .loc i{
    font-size: 17px;
  }
  .hero .locations .content .loc .txt p{
    font-size: 15px;
  }



  /***********************************
  # Hours Section 
  ************************************/

  .hrs{
    height: 60vh;
  }
  .hrs .max-width .descp{
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    text-align: center;
    padding: 5%;
  }
  .hrs .max-width .descp .line{
    width: 1px;
    height: 15vh;
  }
  .hrs .max-width .head h1::before,
  .hrs .max-width .head h1::after{
    display: none;
  }
  .hrs .max-width .hrs-logo h1{
    font-size: 40px;
    margin-left: -7%;
  } 
  .hrs .max-width .content .small-talk p{
    font-size: 17px;
    padding-top: 5%;
    text-align: center;
  }
  .hrs .max-width .content form{
    margin-left: -10%;
  }
  .hrs .max-width .content form input{
    width: 70%;
  }
  .hrs .max-width .descp .breakfast,
  .hrs .max-width .descp .brunch,
  .hrs .max-width .descp .lunch,
  .hrs .max-width .descp .dinner{
    padding: 2%;
  }
  .hrs .max-width .descp .breakfast h2,
  .hrs .max-width .descp .brunch h2,
  .hrs .max-width .descp .lunch h2,
  .hrs .max-width .descp .dinner h2{
    font-size: 18.3px;
  }
  .hrs .max-width .descp .breakfast li p,
  .hrs .max-width .descp .brunch li p,
  .hrs .max-width .descp .lunch li p,
  .hrs .max-width .descp .dinner li p{
    font-size: 15px;
  }



/***********************************
# Menu Section 
************************************/

  .menu{
    height: 60vh;
  }
  .menu .max-width .content h1::before,
  .menu .max-width .content h1::after{
    display: none;
  }
  .menu .max-width .content .btn{
    margin-left: 38%;
  }



  /***********************************
  # Event Section 
  ************************************/

  .eve{
    height: 70vh;
  }
  .eve .content{
    display: flex;
    justify-content: space-evenly;
  }
  .eve .content .left{
    width: 50%;
  }
  .eve .content .right{
    width: 50%;
  }
  .eve .content .left img{
    width: 450px;
    height: 550px;
  }
  .eve .content .right h1::before,
  .eve .content .right h1::after{
    display: none;
  }
  .eve .content .right p{
    margin-left: 6%;
    font-size: 18px;
  }
  .eve .content .right .btn{
    margin-left: 25%;
  }





  /***********************************
  # News Letter Section 
  ************************************/

  .news{
    height: 10vh;
  }
  .news .max-width .news-letter p{
    font-size: 17px;
  }
  .news .max-width .news-letter form input{
    margin-left: -10%;
    width: 65%;
  }




  /***********************************
  # Contact Section 
  ************************************/


  .con{
    height: 40vh;
  }
  .con h1{
    font-size: 40px;
  }
  .con .content .row .head{
    font-size: 20px;
  }
  .con .content .row li{
    font-size: 16px;
  }
  .con .content .row a{
    font-size: 16px;
  }
  /* .eve .content .right h1{
    text-align: center;
    font-size: 40px;
  }
  .eve .content .right .btn{
    margin-left: 40%;
  } */

}





@media only screen and (max-width: 900px){
  .hero{
    height: 92vh;
  }
  .hero .h-c{
    margin: 50% 0 0 15%;
  }
  .hero .h-c h1{
    font-size: 75px;
  }
  .hero .h-c p{
    font-size: 25px;
  }
  .hero .btn a{
    font-size: 23px;
    padding: 10px 20px;
  }
  .hero .h-c p::before, .hero .h-c p::after{
    display: none;
  }
  .hero .down{
    font-size: 20px;
    width: 7vw;
    height: 4.6vh;
  }
  




/*********************************************************************************************************** 
# Location Section 
************************************************************************************************************/


  .hero .locations{
    padding: 5px 0;
    margin-top: 140%;
    width: 100%;
  }
  .hero .locations .content .loc i{
    font-size: 17px;
  }
  .hero .locations .content .loc .txt p{
    font-size: 15px;
  }


  



  /***********************************
  # Hours Section 
  ************************************/

  .hrs{
    height: 100vh;
  }
  .hrs .max-width .descp{
    display: block;
    justify-content: space-evenly;
    align-items: center;
    text-align: center;
    padding: 5%;
  }
  .hrs .max-width .descp .line{
    width: 50%;
    height: 1px;
    margin: 5% 0 0 25%;
  }
  .hrs .max-width .head h1::before,
  .hrs .max-width .head h1::after{
    display: none;
  }
  .hrs .max-width .hrs-logo h1{
    font-size: 40px;
    margin-left: -7%;
  } 
  .hrs .max-width .content .small-talk p{
    font-size: 17px;
    padding-top: 5%;
    text-align: center;
  }
  .hrs .max-width .content form{
    margin-left: -10%;
  }
  .hrs .max-width .content form input{
    width: 70%;
  }
  .hrs .max-width .descp .breakfast,
  .hrs .max-width .descp .brunch,
  .hrs .max-width .descp .lunch,
  .hrs .max-width .descp .dinner{
    padding: 2%;
  }
  .hrs .max-width .descp .breakfast h2,
  .hrs .max-width .descp .brunch h2,
  .hrs .max-width .descp .lunch h2,
  .hrs .max-width .descp .dinner h2{
    font-size: 18.3px;
  }
  .hrs .max-width .descp .breakfast li p,
  .hrs .max-width .descp .brunch li p,
  .hrs .max-width .descp .lunch li p,
  .hrs .max-width .descp .dinner li p{
    font-size: 15px;
  }



  /***********************************
  # Menu Section 
  ************************************/

  .menu{
    height: 60vh;
  }
  .menu .max-width .content .txt p{
    font-size: 18px;
    text-align: center;
  }

  .menu .max-width .content h1::before,
  .menu .max-width .content h1::after{
    display: none;
  }
  .menu .max-width .content h1{
    font-size: 40px;
    font-family: var(--p), sans-serif;
    font-weight: 700;
    color: var(--w);
    padding: 10px;
    text-align: center;
  }
  .menu .max-width .content .btn{
    margin-left: 40%;
  }
  .menu .max-width .content .btn a{
    font-size: 18px;
  }



  /***********************************
  # News Letter Section 
  ************************************/

  .news{
    height: 15vh;
  }
  .news .max-width .news-letter p{
    font-size: 17px;
  }
  .news .max-width .news-letter form input{
    margin-left: -10%;
    width: 65%;
  }



  /***********************************
  # Events Section 
  ************************************/

  .eve{
    height: 50vh;
  }
  .eve .content{
    display: block;
  }
  .eve .content .left img{
    display: none;
  }
  .eve .content .right{
    width: 100%;
    flex: 100%;
  }
  .eve .content .right h1::before,
  .eve .content .right h1::after{
    display: none;
  }
  .eve .content .right h1{
    text-align: center;
    font-size: 40px;
  }
  .eve .content .right p{
    text-align: center;
    width: 100%;
    margin-left: -10%;
    margin-right: 0;
    font-size: 17px;
  }
  .eve .content .right .btn{
    margin-left: 40%;
  }



  /***********************************
  # Hours Section 
  ************************************/


  .con{
    height: 50vh;
  }
  .con h1{
    font-size: 40px;
  }
  .con .content .row{
    padding-left: 20px;
  }
  .con .content .row .head{
    font-size: 20px;
  }
  .con .content .row li{
    font-size: 16px;
  }
  .con .content .row a{
    font-size: 16px;
  }
}





@media only screen and (max-width: 800px){
  .hero{
    height: 100vh;
  }
  .hero .h-c{
    margin: 50% 0 0 15%;
  }
  .hero .h-c h1{
    font-size: 75px;
  }
  .hero .h-c p{
    font-size: 25px;
  }
  .hero .btn a{
    font-size: 23px;
    padding: 10px 20px;
  }
  .hero .h-c p::before, .hero .h-c p::after{
    display: none;
  }
  .hero .down{
    font-size: 20px;
    width: 7vw;
    height: 4.6vh;
  }
  




/*********************************************************************************************************** 
# Location Section 
************************************************************************************************************/


  .hero .locations{
    padding: 5px 0;
    margin-top: 140%;
    width: 100%;
  }
  .hero .locations .content .loc i{
    font-size: 17px;
  }
  .hero .locations .content .loc .txt p{
    font-size: 15px;
  }


  



  /***********************************
  # Hours Section 
  ************************************/

  .hrs{
    height: 150vh;
  }
  .hrs .max-width .descp{
    display: block;
    justify-content: space-evenly;
    align-items: center;
    text-align: center;
    padding: 5%;
  }
  .hrs .max-width .descp .line{
    width: 50%;
    height: 1px;
    margin: 5% 0 0 25%;
  }
  .hrs .max-width .head h1::before,
  .hrs .max-width .head h1::after{
    display: none;
  }
  .hrs .max-width .hrs-logo h1{
    font-size: 40px;
    margin-left: -7%;
  } 
  .hrs .max-width .content .small-talk p{
    font-size: 17px;
    padding-top: 5%;
    text-align: center;
  }
  .hrs .max-width .content form{
    margin-left: -10%;
  }
  .hrs .max-width .content form input{
    width: 70%;
  }
  .hrs .max-width .descp .breakfast,
  .hrs .max-width .descp .brunch,
  .hrs .max-width .descp .lunch,
  .hrs .max-width .descp .dinner{
    padding: 2%;
  }
  .hrs .max-width .descp .breakfast h2,
  .hrs .max-width .descp .brunch h2,
  .hrs .max-width .descp .lunch h2,
  .hrs .max-width .descp .dinner h2{
    font-size: 18.3px;
  }
  .hrs .max-width .descp .breakfast li p,
  .hrs .max-width .descp .brunch li p,
  .hrs .max-width .descp .lunch li p,
  .hrs .max-width .descp .dinner li p{
    font-size: 15px;
  }



  /***********************************
  # Menu Section 
  ************************************/

  .menu{
    height: 100vh;
  }
  .menu .max-width .content .txt p{
    font-size: 18px;
    text-align: center;
  }

  .menu .max-width .content h1::before,
  .menu .max-width .content h1::after{
    display: none;
  }
  .menu .max-width .content h1{
    font-size: 40px;
    font-family: var(--p), sans-serif;
    font-weight: 700;
    color: var(--w);
    padding: 10px;
    text-align: center;
  }
  .menu .max-width .content .btn{
    margin-left: 40%;
  }
  .menu .max-width .content .btn a{
    font-size: 18px;
  }



  /***********************************
  # News Letter Section 
  ************************************/

  .news{
    height: 20vh;
  }
  .news .max-width .news-letter p{
    font-size: 17px;
  }
  .news .max-width .news-letter form input{
    margin-left: -10%;
    width: 65%;
  }



  /***********************************
  # Events Section 
  ************************************/

  .eve{
    height: 100vh;
  }
  .eve .content{
    display: block;
  }
  .eve .content .left img{
    display: none;
  }
  .eve .content .right{
    width: 100%;
    flex: 100%;
  }
  .eve .content .right h1::before,
  .eve .content .right h1::after{
    display: none;
  }
  .eve .content .right h1{
    text-align: center;
    font-size: 40px;
  }
  .eve .content .right p{
    text-align: center;
    width: 100%;
    margin-left: -10%;
    margin-right: 0;
    font-size: 17px;
  }
  .eve .content .right .btn{
    margin-left: 40%;
  }



  /***********************************
  # Hours Section 
  ************************************/


  .con{
    height: 70vh;
  }
  .con h1{
    font-size: 40px;
  }
  .con .content .row{
    padding-left: 20px;
  }
  .con .content .row .head{
    font-size: 20px;
  }
  .con .content .row li{
    font-size: 16px;
  }
  .con .content .row a{
    font-size: 16px;
  }
}










@media only screen and (max-width: 600px){

/***********************************
# Hero Section 
************************************/

  .hero{
    width: 150%;
    height: 100vh;
  }
  .hero .h-c{
    margin: 50% 0 0 30%;
  }
  .hero .h-c h1{
    font-size: 41px;
  }
  .hero .h-c p{
    font-size: 18px;
  }
  .hero .btn a{
    font-size: 18px;
    padding: 8px 18px;
  }
  .hero .h-c p::before, .hero .h-c p::after{
    display: none;
  }
  .hero .down{
    font-size: 18px;
    width: 8vw;
    height: 5vh;
  }

  /***********************************
  # Location Section 
  ************************************/

  .hero .locations{
    margin-top: 95%;
    width: 100%;
  }
  .hero .locations .content .loc .txt p{
    font-size: 12px;
  }
  .hero .locations .content .loc i{
    font-size: 18px;
    padding-left: 30px;
  }



  /***********************************
  # Hours Section 
  ************************************/

  .hrs{
    width: 150%;
    height: 160vh;
  }
  .hrs .max-width .descp{
    display: block;
    justify-content: space-evenly;
    align-items: center;
    text-align: center;
    padding: 7%;
  }
  .hrs .max-width .descp .line{
    width: 50%;
    height: 1px;
    margin: 5% 0 0 25%;
  }
  .hrs .max-width .head h1{
    margin-left: -10%;
  }
  .hrs .max-width .head h1::before,
  .hrs .max-width .head h1::after{
    display: none;
  }
  .hrs .max-width .hrs-logo h1{
    font-size: 30px;
    text-align: center;
  } 
  .hrs .max-width .content .small-talk p{
    font-size: 17px;
    padding-top: 5%;
    text-align: center;
  }
  .hrs .max-width .content form{
    margin-left: -10%;
  }
  .hrs .max-width .content form input{
    width: 70%;
  }
  .hrs .max-width .descp .breakfast,
  .hrs .max-width .descp .brunch,
  .hrs .max-width .descp .lunch,
  .hrs .max-width .descp .dinner{
    padding-top: 5%;
  }
  .hrs .max-width .descp .breakfast h2,
  .hrs .max-width .descp .brunch h2,
  .hrs .max-width .descp .lunch h2,
  .hrs .max-width .descp .dinner h2{
    font-size: 18.3px;
  }
  .hrs .max-width .descp .breakfast li p,
  .hrs .max-width .descp .brunch li p,
  .hrs .max-width .descp .lunch li p,
  .hrs .max-width .descp .dinner li p{
    font-size: 15px;
  }



  /***********************************
  # Menu Section 
  ************************************/

  .menu{
    width: 150%;
    height: 90vh;
  }
  .menu .max-width .content .txt p{
    font-size: 16px;
    text-align: center;
  }

  .menu .max-width .content h1::before,
  .menu .max-width .content h1::after{
    display: none;
  }
  .menu .max-width .content h1{
    font-size: 40px;
    font-family: var(--p), sans-serif;
    font-weight: 700;
    color: var(--w);
    padding: 10px;
    text-align: center;
  }
  .menu .max-width .content .btn{
    margin-left: 36%;
  }
  .menu .max-width .content .btn a{
    font-size: 18px;
  }



  /***********************************
  # News Letter Section 
  ************************************/

  .news{
    width: 150%;
    height: 16vh;
  }
  .news .max-width .news-letter p{
    font-size: 16px;
  }
  .news .max-width .news-letter form input{
    font-size: 16px;
    margin-left: -30%;
    width: 100%;
  }



  /***********************************
  # Event Section 
  ************************************/

  .eve{
    width: 150%;
    height: 100vh;
  }
  .eve .content{
    display: block;
  }
  .eve .content .left img{
    display: none;
  }
  .eve .content .right{
    width: 100%;
    flex: 100%;
  }
  .eve .content .right h1::before,
  .eve .content .right h1::after{
    display: none;
  }
  .eve .content .right h1{
    text-align: center;
    font-size: 40px;
  }
  .eve .content .right p{
    text-align: center;
    width: 100%;
    margin-left: -10%;
    margin-right: 0;
    font-size: 16px;
  }
  .eve .content .right .btn{
    margin-left: 40%;
  }



  /***********************************
  # Contact Section 
  ************************************/


  .con{
    width: 150%;
    height: 70vh;
  }
  .con h1{
    font-size: 40px;
  }
  .con .content .row{
    padding-left: 15px;
  }
  .con .content .row .head{
    font-size: 20px;
  }
  .con .content .row li{
    font-size: 16px;
  }
  .con .content .row a{
    font-size: 16px;
  }
}














@media only screen and (max-width: 500px){

/***********************************
# Hero Section 
************************************/

  .hero{
    width: 150%;
    height: 90vh;
  }
  .hero .h-c{
    margin: 70% 0 0 16%;
  }
  .hero .h-c h1{
    font-size: 41px;
  }
  .hero .h-c p{
    font-size: 18px;
  }
  .hero .btn a{
    font-size: 18px;
    padding: 8px 18px;
  }
  .hero .h-c p::before, .hero .h-c p::after{
    display: none;
  }
  .hero .down{
    font-size: 18px;
    width: 8vw;
    height: 5vh;
  }

  /***********************************
  # Location Section 
  ************************************/

  .hero .locations{
    margin-top: 145%;
    width: 100%;
  }
  .hero .locations .content .loc .txt p{
    font-size: 12px;
  }
  .hero .locations .content .loc i{
    font-size: 18px;
    padding-left: 30px;
  }



  /***********************************
  # Hours Section 
  ************************************/

  .hrs{
    width: 150%;
    height: 150vh;
  }
  .hrs .max-width .descp{
    display: block;
    justify-content: space-evenly;
    align-items: center;
    text-align: center;
    padding: 7%;
  }
  .hrs .max-width .descp .line{
    width: 50%;
    height: 1px;
    margin: 5% 0 0 25%;
  }
  .hrs .max-width .head h1{
    margin-left: -10%;
  }
  .hrs .max-width .head h1::before,
  .hrs .max-width .head h1::after{
    display: none;
  }
  .hrs .max-width .hrs-logo h1{
    font-size: 30px;
    text-align: center;
  } 
  .hrs .max-width .content .small-talk p{
    font-size: 17px;
    padding-top: 5%;
    text-align: center;
  }
  .hrs .max-width .content form{
    margin-left: -10%;
  }
  .hrs .max-width .content form input{
    width: 70%;
  }
  .hrs .max-width .descp .breakfast,
  .hrs .max-width .descp .brunch,
  .hrs .max-width .descp .lunch,
  .hrs .max-width .descp .dinner{
    padding-top: 5%;
  }
  .hrs .max-width .descp .breakfast h2,
  .hrs .max-width .descp .brunch h2,
  .hrs .max-width .descp .lunch h2,
  .hrs .max-width .descp .dinner h2{
    font-size: 18.3px;
  }
  .hrs .max-width .descp .breakfast li p,
  .hrs .max-width .descp .brunch li p,
  .hrs .max-width .descp .lunch li p,
  .hrs .max-width .descp .dinner li p{
    font-size: 15px;
  }



  /***********************************
  # Menu Section 
  ************************************/

  .menu{
    width: 150%;
    height: 100vh;
  }
  .menu .max-width .content .txt p{
    font-size: 16px;
    text-align: center;
  }

  .menu .max-width .content h1::before,
  .menu .max-width .content h1::after{
    display: none;
  }
  .menu .max-width .content h1{
    font-size: 40px;
    font-family: var(--p), sans-serif;
    font-weight: 700;
    color: var(--w);
    padding: 10px;
    text-align: center;
  }
  .menu .max-width .content .btn{
    margin-left: 30%;
  }
  .menu .max-width .content .btn a{
    font-size: 18px;
  }



  /***********************************
  # News Letter Section 
  ************************************/

  .news{
    width: 150%;
    height: 23vh;
  }
  .news .max-width .news-letter p{
    font-size: 16px;
  }
  .news .max-width .news-letter form input{
    font-size: 16px;
    margin-left: -50%;
    width: 100%;
  }



  /***********************************
  # Event Section 
  ************************************/

  .eve{
    width: 150%;
    height: 100vh;
  }
  .eve .content{
    display: block;
  }
  .eve .content .left img{
    display: none;
  }
  .eve .content .right{
    width: 100%;
    flex: 100%;
  }
  .eve .content .right h1::before,
  .eve .content .right h1::after{
    display: none;
  }
  .eve .content .right h1{
    text-align: center;
    font-size: 40px;
  }
  .eve .content .right p{
    text-align: center;
    width: 100%;
    margin-left: -10%;
    margin-right: 0;
    font-size: 16px;
  }
  .eve .content .right .btn{
    margin-left: 34%;
  }



  /***********************************
  # Contact Section 
  ************************************/


  .con{
    width: 150%;
  }
  .con h1{
    font-size: 40px;
  }
  .con .content .row{
    padding-left: 15px;
  }
  .con .content .row .head{
    font-size: 20px;
  }
  .con .content .row li{
    font-size: 16px;
  }
  .con .content .row a{
    font-size: 16px;
  }
}







@media only screen and (max-width: 415px){

  /***********************************
  # Hero Section 
  ************************************/

  .hero{
    width: 150%;
    height: 80vh;
  }
  .hero .h-c{
    margin: 70% 0 0 16%;
  }
  .hero .h-c h1{
    font-size: 37px;
  }
  .hero .h-c p{
    font-size: 18px;
  }
  .hero .btn a{
    font-size: 18px;
    padding: 8px 18px;
  }
  .hero .h-c p::before, .hero .h-c p::after{
    display: none;
  }
  .hero .down{
    font-size: 18px;
    width: 8vw;
    height: 5vh;
  }

  /***********************************
  # Location Section 
  ************************************/

  .hero .locations{
    margin-top: 145%;
    width: 100%;
  }
  .hero .locations .content .loc .txt p{
    font-size: 12px;
  }
  .hero .locations .content .loc i{
    font-size: 18px;
    padding-left: 30px;
  }



  /***********************************
  # Hours Section 
  ************************************/

  .hrs{
    width: 150%;
    height: 120vh;
  }
  .hrs .max-width .descp{
    display: block;
    justify-content: space-evenly;
    align-items: center;
    text-align: center;
    padding: 7%;
  }
  .hrs .max-width .descp .line{
    width: 50%;
    height: 1px;
    margin: 5% 0 0 25%;
  }
  .hrs .max-width .head h1{
    margin-left: -10%;
  }
  .hrs .max-width .head h1::before,
  .hrs .max-width .head h1::after{
    display: none;
  }
  .hrs .max-width .hrs-logo h1{
    font-size: 30px;
    text-align: center;
  } 
  .hrs .max-width .content .small-talk p{
    font-size: 17px;
    padding-top: 5%;
    text-align: center;
  }
  .hrs .max-width .content form{
    margin-left: -10%;
  }
  .hrs .max-width .content form input{
    width: 70%;
  }
  .hrs .max-width .descp .breakfast,
  .hrs .max-width .descp .brunch,
  .hrs .max-width .descp .lunch,
  .hrs .max-width .descp .dinner{
    padding-top: 5%;
  }
  .hrs .max-width .descp .breakfast h2,
  .hrs .max-width .descp .brunch h2,
  .hrs .max-width .descp .lunch h2,
  .hrs .max-width .descp .dinner h2{
    font-size: 18.3px;
  }
  .hrs .max-width .descp .breakfast li p,
  .hrs .max-width .descp .brunch li p,
  .hrs .max-width .descp .lunch li p,
  .hrs .max-width .descp .dinner li p{
    font-size: 15px;
  }



  /***********************************
  # Menu Section 
  ************************************/

  .menu{
    width: 150%;
    height: 65vh;
  }
  .menu .max-width .content .txt p{
    font-size: 16px;
    text-align: center;
  }

  .menu .max-width .content h1::before,
  .menu .max-width .content h1::after{
    display: none;
  }
  .menu .max-width .content h1{
    font-size: 40px;
    font-family: var(--p), sans-serif;
    font-weight: 700;
    color: var(--w);
    padding: 10px;
    text-align: center;
  }
  .menu .max-width .content .btn{
    margin-left: 30%;
  }
  .menu .max-width .content .btn a{
    font-size: 18px;
  }



  /***********************************
  # News Letter Section 
  ************************************/
  
  .news{
    width: 150%;
    height: 20vh;
  }
  .news .max-width .news-letter p{
    font-size: 16px;
  }
  .news .max-width .news-letter form input{
    font-size: 16px;
    margin-left: -50%;
    width: 100%;
  }



  /***********************************
  # Event Section 
  ************************************/

  .eve{
    width: 150%;
    height: 60vh;
  }
  .eve .content{
    display: block;
  }
  .eve .content .left img{
    display: none;
  }
  .eve .content .right{
    width: 100%;
    flex: 100%;
  }
  .eve .content .right h1::before,
  .eve .content .right h1::after{
    display: none;
  }
  .eve .content .right h1{
    text-align: center;
    font-size: 40px;
  }
  .eve .content .right p{
    text-align: center;
    width: 100%;
    margin-left: -10%;
    margin-right: 0;
    font-size: 16px;
  }
  .eve .content .right .btn{
    margin-left: 34%;
  }



  /***********************************
  # Contact Section 
  ************************************/
  
  
  .con{
    width: 150%;
    height: 60vh;
  }
  .con h1{
    font-size: 40px;
  }
  .con .content .row{
    padding-left: 15px;
  }
  .con .content .row .head{
    font-size: 20px;
  }
  .con .content .row li{
    font-size: 16px;
  }
  .con .content .row a{
    font-size: 16px;
  }
}







@media only screen and (max-width: 300px){

  /***********************************
  # Hero Section 
  ************************************/

  .hero{
    width: 200%;
    height: 100vh;
  }
  .hero .h-c{
    margin: 70% 0 0 40%;
  }
  .hero .h-c h1{
    font-size: 28px;
  }
  .hero .h-c p{
    font-size: 16px;
  }
  .hero .btn a{
    font-size: 18px;
    padding: 8px 18px;
  }
  .hero .h-c p::before, .hero .h-c p::after{
    display: none;
  }
  .hero .down{
    font-size: 18px;
    width: 8vw;
    height: 5vh;
  }

  /***********************************
  # Location Section 
  ************************************/

  .hero .locations{
    margin-top: 145%;
    width: 100%;
  }
  .hero .locations .content .loc .txt p{
    font-size: 12px;
  }
  .hero .locations .content .loc i{
    font-size: 18px;
    padding-left: 30px;
  }



  /***********************************
  # Hours Section 
  ************************************/

  .hrs{
    width: 200%;
    height: 155vh;
  }
  .hrs .max-width .descp{
    display: block;
    justify-content: space-evenly;
    align-items: center;
    text-align: center;
    padding: 7%;
  }
  .hrs .max-width .descp .line{
    width: 50%;
    height: 1px;
    margin: 5% 0 0 25%;
  }
  .hrs .max-width .head h1{
    margin-left: -10%;
  }
  .hrs .max-width .head h1::before,
  .hrs .max-width .head h1::after{
    display: none;
  }
  .hrs .max-width .hrs-logo h1{
    font-size: 30px;
    text-align: center;
  } 
  .hrs .max-width .content .small-talk p{
    font-size: 17px;
    padding-top: 5%;
    text-align: center;
  }
  .hrs .max-width .content form{
    margin-left: -10%;
  }
  .hrs .max-width .content form input{
    width: 70%;
  }
  .hrs .max-width .descp .breakfast,
  .hrs .max-width .descp .brunch,
  .hrs .max-width .descp .lunch,
  .hrs .max-width .descp .dinner{
    padding-top: 5%;
  }
  .hrs .max-width .descp .breakfast h2,
  .hrs .max-width .descp .brunch h2,
  .hrs .max-width .descp .lunch h2,
  .hrs .max-width .descp .dinner h2{
    font-size: 18.3px;
  }
  .hrs .max-width .descp .breakfast li p,
  .hrs .max-width .descp .brunch li p,
  .hrs .max-width .descp .lunch li p,
  .hrs .max-width .descp .dinner li p{
    font-size: 15px;
  }



  /***********************************
  # Menu Section 
  ************************************/

  .menu{
    width: 200%;
    height: 90vh;
  }
  .menu .max-width .content .txt p{
    font-size: 16px;
    text-align: center;
  }

  .menu .max-width .content h1::before,
  .menu .max-width .content h1::after{
    display: none;
  }
  .menu .max-width .content h1{
    font-size: 40px;
    font-family: var(--p), sans-serif;
    font-weight: 700;
    color: var(--w);
    padding: 10px;
    text-align: center;
  }
  .menu .max-width .content .btn{
    margin-left: 30%;
  }
  .menu .max-width .content .btn a{
    font-size: 18px;
  }



  /***********************************
  # News Letter Section 
  ************************************/
  
  .news{
    width: 200%;
    height: 23vh;
  }
  .news .max-width .news-letter p{
    font-size: 16px;
  }
  .news .max-width .news-letter form input{
    font-size: 16px;
    margin-left: -45%;
    width: 100%;
  }



  /***********************************
  # Event Section 
  ************************************/

  .eve{
    width: 200%;
    height: 90vh;
  }
  .eve .content{
    display: block;
  }
  .eve .content .left img{
    display: none;
  }
  .eve .content .right{
    width: 100%;
    flex: 100%;
  }
  .eve .content .right h1::before,
  .eve .content .right h1::after{
    display: none;
  }
  .eve .content .right h1{
    text-align: center;
    font-size: 40px;
  }
  .eve .content .right p{
    text-align: center;
    width: 100%;
    margin-left: -10%;
    margin-right: 0;
    font-size: 16px;
  }
  .eve .content .right .btn{
    margin-left: 34%;
  }



  /***********************************
  # Contact Section 
  ************************************/
  
  
  .con{
    width: 200%;
    height: 80vh;
  }
  .con h1{
    font-size: 40px;
  }
  .con .content .row{
    padding-left: 15px;
  }
  .con .content .row .head{
    font-size: 20px;
  }
  .con .content .row li{
    font-size: 16px;
  }
  .con .content .row a{
    font-size: 16px;
  }
}


</style>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grosses Bouchées - Bienvenu</title>
  <script src="https://kit.fontawesome.com/032421aa45.js" crossorigin="anonymous"></script>
</head>
<body>


  <!-- Hero Section -->
  <section id="hero" class="hero">
    <div class="max-width">
      <div class="h-c">
        <h1>Grosses Bouchées</h1>
        <p>hommes affamés rendus heureux</p>
        <div class="btn"><a href="reservations.php">Réservations</a></div>
        <div class="down">
          <i class="fa-solid fa-angle-down"></i>
        </div>
      </div>
      <div class="locations">
        <div class="content">
            <div class="loc" id="one">
              <i class="fa-solid fa-location-dot"></i>
              <div class="txt">
                <p>Lorem ipsum</p>
              </div>
            </div>
            <div class="loc" id="two">
              <i class="fa-solid fa-location-dot" id="l-2"></i>
              <div class="txt">
                <p>Lorem ipsum</p>
              </div>
            </div>
            <div class="loc" id="three">
              <i class="fa-solid fa-location-dot" id="l-3"></i>
              <div class="txt">
                <p>Lorem ipsum</p>
              </div>
            </div>
            <div class="loc" id="four">
              <i class="fa-solid fa-location-dot" id="l-4"></i>
              <div class="txt">
                <p>Lorem ipsum</p>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>


  
  <!-- Hours Section -->


  <section class="hrs" id="hrs">
    <div class="max-width">
        <div class="head">        
          <h1>Heures</h1>
        </div>
      <div class="content">
        <div class="small-talk">
          <p>Venez prendre une énorme bouchée sur notre menu aux heures suivantes indiquées ci-dessous. Vous pouvez faire des réservations avant les heures indiquées ci-dessous.</p>
        </div>
        <div class="descp">
         
          <div class="breakfast">
            <h2>Période de petit-déjeuner (matin):</h2>
            <li><p>Monday 7 - 9 GMT</p></li>
            <li><p>Wednesday 8 - 9 GMT</p></li>
            <li><p>Thursday 8 - 10 GMT</p></li>
          </div>
          <div class="line"></div>
          <div class="lunch">
            <h2>Brunch (spéciaux, matin):</h2>
            <li><p>Monday 10:30 - 11:30 GMT</p></li>
          </div>
          <div class="line"></div>
          <div class="lunch">
            <h2>Période du midi (après-midi):</h2>
            <li><p>Tuesday 1 - 3 GMT</p></li>
            <li><p>Thursday 2 - 3 GMT</p></li>
            <li><p>Friday 1 - 2 GMT</p></li>
          </div>
          <div class="line"></div>
          <div class="dinner">
            <h2>Période du dîner (après-midi):</h2>
            <li><p>Monday 7 - 9 GMT</p></li>
            <li><p>Saturday 7 - 9 GMT</p></li>
            <li><p>Friday 8 - 10 GMT</p></li>
            <li><p>Sunday 9 - 11 GMT</p></li>
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
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.
          Voluptatum ducimus voluptates voluptas?</p> 
          <div class="btn">
              <a href="#">Show menu</a> 
          </div>
        </div>
      </div>
  </section>

  


  <!--------------------- News Letter Section ---------------------->


  <section class="news">
    <div class="max-width">
      <div class="news-letter"> 
        <p>Pour plus d'informations ou des nouvelles sur les nouveautés et l'événement des Grosses Bouchées, inscrivez-vous à notre newsletter.</p>
        <form action="" method="post">
          <input type="email" name="newsletter" placeholder="Adresse e-mail">
          <button type="submit">Soumettre</button>
        </form>
      </div>
    </div>
    </div>
  </section>
  <div class="line"></div>


  <!--------------------------- Event Section ------------------------->

  <section class="eve" id="eve">
    <div class="max-width">
       <div class="box"></div> 
        <div  class="content">
          <div class="left">
            <img src="assets/menu1.jpg" alt="Food Image">
          </div>
          <div class="right"> 
            <h1>Events</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> 
            <p>Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.</p> 
            <p>Voluptatum ducimus voluptates voluptas?</p>
            <div class="btn">
              <a href="#">Show menu</a> 
            </div>
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
                  <li>lorem: +1-12-123-234</li>
                  <li>lorem: +1-45-456-567</li>
                  <li>lorem: +1-78-789-890</li>
                  <li>lorem: +1-01-012-123</li>
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
                  <li>lorem ipsum</li>
                  <li>lorem ipsum</li>
                  <li>lorem ipsum</li>
                  <li>lorem ipsum</li>
                </div>

                <div class="row">
                  <div class="head">E-mail:</div>
                  <li>Lorem ipsum</li>
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