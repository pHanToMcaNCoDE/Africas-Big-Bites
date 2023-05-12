<?php
    require('connect.php');

    $c = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
    
    if($_POST['submit']){
        
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $people = $_POST['people'];
        $hrs = $_POST['hrs'];


        
        
        $sql = "INSERT INTO `Reservations`(`FullName`, `EmailAddress`, `PhoneNumber`, `ArrivalDate`, `Num_ofPeople`, `Hours`) 
        VALUES ('".$fname."','".$email."','".$phone."','".$date."','".$people."','".$hrs."')";

        if(empty($fname) || empty($email) || empty($phone) || empty($date) || empty($people) || empty($hrs)){
            header("Location: Reservation.php?msg=All fields are required!");
        }else {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: Reservation.php?email=Invalid E-mail Address!");
                exit();
            }else{
                if($c->query($sql)){
                    header("Location: Reservation.php?success=Seat Reserved");
                }
            }
        }    
    }
        
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
    --cr2: rgb(247, 128, 152);
    --pb: #e6ddd6;
    --cham: #fbe3d7;
    --sel: #eff3fc;
    --g: #66B830;
    --g2: #d1f1bc;
    --bl: #000;


}

#err {
    z-index: 999;
    position: absolute;
    top: 16%;
    right: 58%;
    transform: translate(50%, 1%);
    width: 65%;
    /* height: 5vh; */
    padding: 20px;
    align-items: center;
    background-color: var(--cr2);
    border: 1px solid var(--cr);
    border-radius: 6px;
    font-size: 18px;
    font-weight: 400;
    font-family: var(--av), sans-serif;
    color: var(--cr);
}

#err .fa-xmark {
    cursor: pointer;
}

#err.active {
    display: none;
}

#suc {
    z-index: 999;
    position: absolute;
    top: 16%;
    right: 58%;
    transform: translate(50%, 1%);
    width: 65%;
    /* height: 5vh; */
    padding: 20px;
    align-items: center;
    background-color: var(--g2);
    border: 1px solid var(--g);
    border-radius: 6px;
    font-size: 18px;
    font-weight: 400;
    font-family: var(--av), sans-serif;
    color: var(--g);
}

#suc .fa-xmark {
    cursor: pointer;
}

#suc.active {
    display: none;
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

.reservation {
    height: 100vh;
}

.reservation .max-width {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.reservation .max-width .left {
    width: 50vw;
    height: 100vh;
    background-image: linear-gradient(rgba(0, 0, 0, .3), rgba(0, 0, 0, .5)), url('assets/H.jpg');
    background-position: left;
    background-size: cover;
    background-repeat: no-repeat;
    position: absolute;
    top: 0;
    left: 0;
    /* background-color: var(--w); */
}

.reservation .max-width .left .logo {
    /* z-index: 999; */
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.reservation .max-width .left .logo h2 {
    font-size: 57px;
    font-family: var(--ds), sans-serif;
    font-weight: 600;
    color: var(--w);
    text-align: center;
}

.reservation .max-width .left .logo p {
    font-size: 25px;
    font-family: var(--os), sans-serif;
    font-weight: 300;
    color: var(--w);
    text-align: center;
}

.reservation .max-width .right {
    position: absolute;
    top: 0;
    right: 0;
    width: 50vw;
    height: 100vh;
    background: var(--cham);
}

.reservation .max-width .right form {
    top: 55%;
    right: 8%;
    transform: translate(1%, -50%);
    /* z-index: 999; */
    position: absolute;
    width: 42vw;
    height: 58vh;
    background: var(--w);
}

.reservation .max-width .right h2 {
    position: absolute;
    top: 10%;
    right: 30%;
    font-size: 30px;
    font-weight: 400;
    font-family: var(--m), sans-serif;
}

.reservation .max-width .right form .row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
}

.reservation .max-width .right form .row .content {
    display: block;
    margin: 8px;
}

.reservation .max-width .right form .row .content label {
    font-size: 19px;
    font-weight: 300;
    font-family: var(--av), sans-serif;
}

.reservation .max-width .right form .row .content input {
    width: 100%;
    outline: none;
    padding: 8px 15px;
    border: 1px solid var(--lg);
    border-radius: 6px;
    font-size: 17px;
    font-family: var(--av), sans-serif;
    font-weight: 300;
    word-spacing: 5px;
    letter-spacing: 2px;
}


.reservation .max-width .right form .row .content select {
    width: 100%;
    outline: none;
    padding: 8px 15px;
    border: 1px solid var(--lg);
    border-radius: 6px;
    font-size: 17px;
    font-family: var(--av), sans-serif;
    font-weight: 300;
    /* margin: 8%; */
}

.reservation .max-width .right .btn {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-left: 5%;
}

.reservation .max-width .right .btn input {
    padding: 13px 20px;
    border: 1px solid var(--whisky);
    background: var(--whisky);
    color: var(--w);
    font-family: var(--av), sans-serif;
    font-size: 18px;
    font-weight: 300;
    cursor: pointer;
}

.reservation .max-width .right .btn a {
    margin-right: 20px;
    text-decoration: none;
    padding: 13px 20px;
    border: 1px solid var(--bl);
    background: var(--bl);
    color: var(--w);
    font-family: var(--av), sans-serif;
    font-size: 18px;
    font-weight: 300;
    cursor: pointer;
}


/* Responsive Design */

@media only screen and (min-width: 320px) and (max-width: 480px) {

    #err {
        font-size: 17px;
        width: 70%;
    }

    .reservation .max-width {
        display: block;
    }

    .reservation .max-width .left {
        width: 100vw;
        height: 30vh;
        z-index: 999;
    }

    .reservation .max-width .left .logo h2 {
        font-size: 30px;
    }

    .reservation .max-width .left .logo p {
        font-size: 17px;
    }

    .reservation .max-width .right {
        width: 100vw;
        height: 100vh;
    }

    .reservation .max-width .right form .row .content {
        margin: 4px;
    }



    .reservation .max-width .right form .row .content input {
        font-size: 16px;
        /* width: 60%; */
    }

    .reservation .max-width .right form .row .content label {
        font-size: 17px;
    }

    .reservation .max-width .right form {
        width: 95%;
        height: 58%;
        position: absolute;
        left: 2%;
        top: 70%;
    }

    .reservation .max-width .right h2 {
        font-size: 20px;
    }

    .reservation .max-width .right .btn {
        justify-content: space-between;
    }

    .reservation .max-width .right .btn input {
        padding: 8px 10px;
        font-size: 17px;
    }

    .reservation .max-width .right .btn a {
        padding: 8px 10px;
        font-size: 15px;
    }
}



@media only screen and (min-width: 481px) and (max-width: 768px) {

    #err {
        font-size: 18px;
        width: 70%;
    }

    .reservation .max-width {
        display: block;
    }

    .reservation .max-width .left {
        width: 100vw;
        height: 30vh;
        z-index: 999;
    }

    .reservation .max-width .left .logo h2 {
        font-size: 38px;
    }

    .reservation .max-width .left .logo p {
        font-size: 18px;
    }

    .reservation .max-width .right {
        width: 100vw;
        height: 100vh;
    }

    .reservation .max-width .right form .row .content {
        margin: 4px;
    }



    .reservation .max-width .right form .row .content input {
        font-size: 17px;
        /* width: 60%; */
    }

    .reservation .max-width .right form .row .content label {
        font-size: 18px;
    }

    .reservation .max-width .right form {
        width: 95%;
        height: 58%;
        position: absolute;
        left: 2%;
        top: 70%;
    }

    .reservation .max-width .right h2 {
        font-size: 20px;
    }

    .reservation .max-width .right .btn input {
        padding: 8px 18px;
        font-size: 17px;
    }

    .reservation .max-width .right .btn a {
        padding: 8px 18px;
        font-size: 17px;
    }
}




@media only screen and (min-width: 769px) and (max-width: 1024px) {

    #err {
        font-size: 18px;
        width: 70%;
    }

    .reservation .max-width {
        display: flex;
    }

    .reservation .max-width .left {
        width: 50vw;
        height: 100vh;
        z-index: 999;
    }

    .reservation .max-width .left .logo h2 {
        font-size: 38px;
    }

    .reservation .max-width .left .logo p {
        font-size: 18px;
    }

    .reservation .max-width .right {
        width: 50vw;
        height: 100vh;
    }

    .reservation .max-width .right form .row .content {
        margin: 6px;
    }



    .reservation .max-width .right form .row .content input {
        font-size: 17px;
        /* width: 60%; */
    }

    .reservation .max-width .right form .row .content label {
        font-size: 18px;
    }

    .reservation .max-width .right form {
        width: 95%;
        height: 58%;
        position: absolute;
        left: 2%;
        top: 60%;
    }

    .reservation .max-width .right h2 {
        font-size: 30px;
    }

    .reservation .max-width .right .btn input {
        padding: 8px 18px;
        font-size: 17px;
    }

    .reservation .max-width .right .btn a {
        padding: 8px 18px;
        font-size: 17px;
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
    <script src=" https://kit.fontawesome.com/032421aa45.js" crossorigin="anonymous">
    </script>
</head>

<body>
    <?php //require "nav.php" ?>
    <!-- Form Secttion -->

    <section class="reservation">
        <div class="max-width">
            <div class="left">
                <div class="logo">
                    <h2>Africa's Big Bites</h2>
                    <p>make your reservations now</p>
                </div>
            </div>
            <div class="right">
                <?php
                    
                        if(isset($_GET['success'])){
                            $msg = $_GET['success'];
                            echo "<p id='suc' style='display: flex;'><i style='margin-right: 2%;' class='fa-solid fa-circle-check'></i>".$msg."<i style='position: absolute; right: 2%;' class='fa-solid fa-xmark'></i></p>";
                        }else if(isset($_GET['msg'])){
                            $msg = $_GET['msg'];
                            echo "<p id='err'><i style='margin-right: 2%;' class='fa-solid fa-circle-exclamation'></i>".$msg."<i style='position: absolute; right: 2%;' class='fa-solid fa-xmark'></i></p>";
                        }else if(isset($_GET['email'])){
                            $msg = $_GET['email'];
                            echo "<p id='err'><i style='margin-right: 2%;' class='fa-solid fa-circle-exclamation'></i>".$msg."<i style='position: absolute; right: 2%;' class='fa-solid fa-xmark'></i></p>";
                        }


                    ?>
                <h2>Fill the form below</h2>
                <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
                    <div class="row">
                        <div class="content">
                            <label for="Full Name">Full Name:<span
                                    style="color: var(--cr); margin-left: 1%;">*</span></label>
                            <input type="text" name="fname" placeholder="e.g; John Doe Cash">
                        </div>
                        <div class="content">
                            <label for="Email Address">Email Address:<span
                                    style="color: var(--cr); margin-left: 1%;">*</span></label>
                            <input type="text" name="email" placeholder="e.g; john.doe@gmail.com">
                        </div>
                    </div>
                    <div class="row">
                        <div class="content">
                            <label for="Email Address">Phone Number:<span
                                    style="color: var(--cr); margin-left: 1%;">*</span></label>
                            <input type="text" name="phone" placeholder="e.g; +(123) 000-00-000">
                        </div>
                        <div class="content">
                            <label for="Email Address">Arrival Date:<span
                                    style="color: var(--cr); margin-left: 1%;">*</span></label>
                            <input type="date" name="date">
                        </div>
                    </div>
                    <div class="row">
                        <div class="content">
                            <label for="Email Address">Number of people:<span
                                    style="color: var(--cr); margin-left: 1%;">*</span></label>
                            <select name="people">
                                <option disabled selected>--- select the # of people ---</option>
                                <option value="1">Single person</option>
                                <option vaue="2-6">2-10 people</option>
                                <option vaue="10-20">10-20 people</option>
                                <option vaue=">20">Alot of people</option>
                                <option vaue="Dinner">Dinner</option>
                            </select>
                        </div>
                        <div class="content">
                            <label for="Email Address">Hours:<span style="color: var(--cr); margin-left: 1%;">
                                    *</span></label>
                            <select name="hrs">
                                <option disabled selected>--- select hour ---</option>
                                <option vaue="Breakfast">Breakfast</option>
                                <option vaue="Brunch">Brunch</option>
                                <option vaue="Lunch">Lunch</option>
                                <option vaue="Dinner">Dinner</option>
                            </select>
                        </div>
                    </div>
                    <div class="btn">
                        <input type="submit" name="submit" value="Reserve your seat">
                        <a href="index.php">Back to home</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
    var not = document.getElementById('suc');
    var not2 = document.getElementById('err');
    var del = document.querySelector('.fa-xmark');


    del.addEventListener('click', () => {
        not.classList.add('active');
    });

    del.addEventListener('click', () => {
        not2.classList.add('active');
    });
    </script>
    <?php require "footer1.php"; ?>
</body>

</html>