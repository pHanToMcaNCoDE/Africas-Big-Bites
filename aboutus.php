<?php 

?>

<style>
@import url('https://fonts.googleapis.com/css2?family=Parisienne&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,500;1,300;1,400&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Nanum+Myeongjo&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap');


:root {
    /* Fonts */




    /* Heading */
    --p: 'Parisienne';



    --os: 'Open Sans';
    --ds: 'Dancing Script';
    --rd: 'Rajdhani';
    --m: 'Nanum Myeongjo';
    --rw: 'Raleway';


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

* {
    /* overflow-x: hidden; */
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

.max-width {
    max-width: 1200px;
    /* min-width: 600px; */
    padding: 0 40px;
    margin: auto;
}

/******************************************************************* 
# Aboutus section 
*********************************************************************/


/* First-Half Of The About Page */
.about {
    height: 100vh;
    animation-name: txt;
    animation-duration: 2s;
    animation-delay: 2.5s;
    animation-fill-mode: both;
    animation-timing-function: ease-in-out;
    transition: all .5s;
    background-color: var(--cham);
}

.about .max-width {
    display: flex;
    align-items: center;
    justify-content: space-evenly;
}

.about .max-width .about-c {
    display: flex;
    align-items: center;
    height: 100vh;
}

.about .max-width .about-c .left {
    width: 30vw;
    position: absolute;
    left: 10%;
    height: 100vh;
    /* padding: 50px 60px; */

}

.about .max-width .about-c .left h4 {
    font-size: 40px;
    font-family: var(--font), serif;
    color: var(--whisky);
    /* text-align: left; */
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

.about .max-width .about-c .left .line {
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

.about .max-width .about-c .left .txt {
    width: 100%;
    display: block;
}

.about .max-width .about-c .left .txt p {
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

.about .max-width .about-c .right {
    width: 50%;
    position: absolute;
    top: 0;
    right: 0;
}

.about .max-width .about-c .right img {
    width: 100%;
    height: 100vh;
    object-fit: cover;
    z-index: 999;
}

/* Second-Half Of The About Page */

.team-f {
    height: 105vh;
    animation-name: txt;
    animation-duration: 2s;
    animation-delay: 2.5s;
    animation-fill-mode: both;
    animation-timing-function: ease-in-out;
}

.team-f .max-width {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.team-f .max-width .about-c2 {
    display: flex;
}

.team-f .max-width .about-c2 .left {
    width: 50%;
    flex: 33.3%;
    position: absolute;
    left: 0;
}

.team-f .max-width .about-c2 .left img {
    width: 100%;
    height: 105vh;
    object-fit: cover;
}

.team-f .max-width .about-c2 .right {
    width: 50%;
    flex: 33.3%;
    position: absolute;
    right: 0;
    height: 105vh;
    background: var(--sel);
    padding: 60px;
}

.team-f .max-width .about-c2 .right h4 {
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

.team-f .max-width .about-c2 .right .line {
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

.team-f .max-width .about-c2 .right p {
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

.team-f .max-width .about-c2 .right .team-btn {
    margin-top: 8%;
    animation-name: txt;
    animation-duration: 2s;
    animation-delay: 8s;
    animation-fill-mode: both;
    animation-timing-function: ease-in-out;
    transition: all .5s;
}

.team-f .max-width .about-c2 .right .team-btn a {
    border: 2px solid var(--whisky);
    font-size: 22px;
    font-family: var(--whisky), sans-serif;
    padding: 10px 20px;
    text-decoration: none;
    color: var(--whisky);
    transition: all .3s ease-in-out;
}

.team-f .max-width .about-c2 .right .team-btn a:hover {
    background: var(--whisky);
    color: var(--w);
    border: 2px solid var(--whisky);
}



/* Responsive Design */


/* Phones */

@media only screen and (min-width: 320px) and (max-width: 480px) {

    /* Navigation Section */

    .about .max-width .about-c {
        display: block;
        justify-content: space-between;
        align-items: center;
    }

    .about .max-width .about-c left {
        width: 100%;
    }

    .about .max-width .about-c .left h4 {
        font-size: 35px;
    }

    /* .about .max-width .about-c .left .txt {
        width: 100%;
    } */

    .about .max-width .about-c .left .txt p {
        font-size: 18px;
    }

    .about .max-width .about-c .right {
        display: none;
    }

    /* .about .max-width .about-c .right img {
        display: none;
    } */

    /* Team Section */
    .team-f .max-width .about-c2 {
        display: block;
    }

    .team-f .max-width .about-c2 .left {
        display: none;
    }

    .team-f .max-width .about-c2 .right {
        width: 100%;
    }
}
</style>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link type="stylesheet" rel="css/aboutus.css"> -->
    <title>Grosses Bouchées - France</title>
</head>

<body>
    <?php 
      // require('nav.php'); 
    ?>
    <section id="about" class="about">
        <div class="max-width">
            <div class="about-c">
                <div class="left">
                    <h4>About ABB</h4>
                    <div class="line"></div>
                    <div class="txt">
                        <p>
                            ABB was crowned the best restaurant in France, on December 5, 2021.
                            ABB is also known for its cuisine and its sweets.
                        </p>
                        <p>
                            It was founded by Carlton Escoffier in 2006. Big Bites is backed by a long-standing team of
                            passionate executives and employees.
                        </p>
                    </div>
                </div>
                <div class="right">
                    <img src="assets/about/about3.jpg" alt="Our Team">
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
                    <h4>Our Family</h4>
                    <div class="line"></div>
                    <p>
                        Learn more about our family and want to run behind the scenes of ABB.
                    </p>
                    <div class="team-btn">
                        <a href="team.php">Savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php //require('footer1.php'); ?>
</body>

</html>

</html>