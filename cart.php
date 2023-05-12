<?php

    // require('navigation.php');
    // require('signout.php');


    // protectPage();

        ini_set("display_errors", "On");

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
    --g: #66B830;
    --g2: #d1f1bc;


}

* {
    /* overflow-x: hidden; */
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

#suc {
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 999;
    position: absolute;
    top: 20%;
    right: 35%;
    width: 30%;
    padding: 10px 20px;
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

html {
    scroll-behavior: smooth;
}

.max-width {
    max-width: 1200px;
    /* min-width: 600px; */
    padding: 0 40px;
    margin: auto;
}

nav {
    width: 100%;
    height: 70px;
    padding: 5px 0;
    background-color: var(--w);
}

nav .max-width {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

nav .max-width .logo a {
    font-family: var(--ds), sans-serif;
    font-weight: 500;
    font-size: 30px;
    text-decoration: none;
}

nav .max-width .activities {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

nav .max-width .activities li {
    list-style: none;
}

nav .max-width .back {
    display: flex;
    justify-content: space-evenly;
    align-items: center;
}

nav .max-width .back i {
    color: var(--ck);
    font-size: 20px;
}

nav .max-width .back a {
    color: var(--ck);
    font-size: 20px;
    font-weight: 400;
    font-family: var(--av), sans-serif;
    text-decoration: none;
}

nav .max-width .activities li a {
    margin-left: 30px;
}

nav .max-width .activities li a i {
    color: var(--ck);
    font-size: 20px;
    list-style: none;
}

nav .max-width .activities li {
    position: relative;
}

nav .max-width .activities li .count {
    width: 18px;
    height: 18px;
    background-color: crimson;
    border-radius: 50%;
    color: white;
    position: absolute;
    top: -5px;
    right: -10px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid var(--w);
}

nav .max-width .activities li .count p {
    color: var(--w);
    font-size: 12px;
    font-family: var(--av), sans-serif;
    font-weight: 300px;
}



/* Cart Page */


.cart-main {
    background-color: var(--cham);
    padding: 100px 0 0 0;
    height: 110vh;
}

.cart-main h3 {
    font-size: 50px;
    color: var(--ck);
    font-weight: 500;
    font-family: var(--ds);
    text-align: center;
}

.cart-main .max-width {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
    position: absolute;
    top: 55%;
    left: 35%;
    transform: translate(-50%, -50%);
}

.cart-main .max-width .cart-left {
    width: 200%;
    height: 100vh;
    max-height: 580px;
    overflow-y: scroll;
    margin-top: 16%;
}

.cart-main .max-width .cart-left .cart-table {
    width: 56.5vw;
    height: 50vh;
    font-family: var(--av), sans-serif;
    min-width: max-content;
    border-collapse: separate;
    margin: 20px 10px 10px 0;
    text-align: left;
    background-color: var(--w);
}

.cart-main .max-width .cart-left .cart-table tbody tr td {
    border-bottom: 1px solid var(--ck);
    padding: 1%;
    text-align: center;
}

.cart-main .max-width .cart-left .cart-table thead tr th {
    position: sticky;
    text-align: center;
    background-color: var(--ck);
    color: var(--w);
    z-index: 999;
    top: 0px;
    padding: 1%;
}

.cart-main .max-width .cart-left .cart-table tbody tr td img {
    width: 150px;
    height: 150px;
    border-radius: 10px;
}

.cart-main .max-width .cart-right {
    width: 20%;
    position: absolute;
    top: 30%;
    right: -20%;
}

.cart-main .max-width .cart-right .c {
    width: 30vw;
    height: 20vh;
    background: var(--w);
}

.cart-main .max-width .cart-right .c .content {
    display: block;
    justify-content: center;
    align-items: center;
}

.cart-main .max-width .cart-right .c .content .txt {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    position: sticky;
}

.cart-main .max-width .cart-right .c .content .txt p {
    font-size: 20px;
    font-weight: 400;
    font-family: var(--av), sans-serif;
}

.cart-main .max-width .cart-right .c .content .txt span {
    font-size: 18px;
    font-weight: 600;
    font-family: var(--av), sans-serif;
}

@media only screen and (min-width: 320px) and (max-width: 480px) {


    #suc {
        position: absolute;
        top: 11%;
        right: 20%;
        width: 70%;
        padding: 10px 20px;
        font-size: 15px;
    }

    nav .max-width .logo a {
        font-size: 17px;
    }

    nav .max-width .back i {
        font-size: 17px;
    }

    nav .max-width .back a {
        font-size: 17px;
    }


    nav .max-width .activities li a i {
        font-size: 17px;
    }



    /* Cart page */

    .cart-main {
        height: 180vh;
    }

    .cart-main .max-width {
        position: relative;
        top: 35%;
        /* height: 100vh; */
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
    }

    .cart-main .max-width .cart-left {
        position: absolute;
        left: 15%;
        width: 100%;
        overflow-y: scroll;
        overflow-x: scroll;
    }

    .cart-main .max-width .cart-left .cart-table {
        width: 30%;
        height: 50vh;
        font-family: var(--av), sans-serif;
        min-width: max-content;
        border-collapse: separate;
        text-align: left;
        background-color: var(--w);
    }

    .cart-main .max-width .cart-left .cart-table tbody tr td {
        border-bottom: 1px solid var(--ck);
        padding: .2%;
        text-align: center;
    }

    .cart-main .max-width .cart-left .cart-table thead tr th {
        position: sticky;
        text-align: center;
        background-color: var(--ck);
        color: var(--w);
        z-index: 999;
        top: 0px;
        padding: .5%;
    }

    .cart-main .max-width .cart-left .cart-table tbody tr td img {
        width: 100px;
        height: 100px;
    }


    .cart-main .max-width .cart-right {
        width: 100%;
        margin-top: 100%;
    }

    .cart-main .max-width .cart-right .c {
        width: 80%;
        height: 40%;
    }

    .cart-main .max-width .cart-right .c .content {
        display: block;
    }

    .cart-main .max-width .cart-right .c .content .txt {
        display: block;
    }

    .cart-main .max-width .cart-right .c .content .txt p {
        font-size: 17px;
    }

    .cart-main .max-width .cart-right .c .content .txt span {
        font-size: 16px;
    }
}



@media only screen and (min-width: 481px) and (max-width: 768px) {


    #suc {
        position: absolute;
        top: 11%;
        right: 20%;
        width: 70%;
        padding: 10px 20px;
        font-size: 15px;
    }

    nav .max-width .logo a {
        font-size: 17px;
    }

    nav .max-width .back i {
        font-size: 17px;
    }

    nav .max-width .back a {
        font-size: 17px;
    }


    nav .max-width .activities li a i {
        font-size: 17px;
    }



    /* Cart page */

    .cart-main {
        height: 180vh;
    }

    .cart-main .max-width {
        position: relative;
        top: 35%;
        /* height: 100vh; */
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
    }

    .cart-main .max-width .cart-left {
        position: absolute;
        left: 25%;
        width: 100%;
        overflow-y: scroll;
        overflow-x: scroll;
    }

    .cart-main .max-width .cart-left .cart-table {
        width: 30%;
        height: 50vh;
        font-family: var(--av), sans-serif;
        min-width: max-content;
        border-collapse: separate;
        text-align: left;
        background-color: var(--w);
    }

    .cart-main .max-width .cart-left .cart-table tbody tr td {
        border-bottom: 1px solid var(--ck);
        padding: .2%;
        text-align: center;
    }

    .cart-main .max-width .cart-left .cart-table thead tr th {
        position: sticky;
        text-align: center;
        background-color: var(--ck);
        color: var(--w);
        z-index: 999;
        top: 0px;
        padding: .5%;
    }

    .cart-main .max-width .cart-left .cart-table tbody tr td img {
        width: 100px;
        height: 100px;
    }


    .cart-main .max-width .cart-right {
        width: 100%;
        margin-top: 100%;
    }

    .cart-main .max-width .cart-right .c {
        width: 80%;
        height: 40%;
    }

    .cart-main .max-width .cart-right .c .content {
        display: block;
    }

    .cart-main .max-width .cart-right .c .content .txt {
        display: block;
    }

    .cart-main .max-width .cart-right .c .content .txt p {
        font-size: 17px;
    }

    .cart-main .max-width .cart-right .c .content .txt span {
        font-size: 16px;
    }
}
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale= 1, user-scalable=0">
    <title>Grosses Bouchées - Bienvenu</title>
    <link rel="stylesheet" href="css/style.css">
    <script src=" https://kit.fontawesome.com/032421aa45.js" crossorigin="anonymous"></script>
</head>

<body>

    <nav class="nav-two">
        <div class="max-width">
            <div class="back">
                <i class="fa-solid fa-backward-step"></i>
                <a href="menu.php">
                    Back
                </a>
            </div>
            <div class="logo"><a href="index.php" style="color: var(--ck);">Africa's Big Bites</a>
            </div>
            <div class=" activities">
                <li class="fav">

                    <div class="count">
                        <?php
                            require "connect.php";

                            $connect = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

                            $sql = "SELECT COUNT(`ProductName`) FROM `Favourite` ";

                            $result = $connect->query($sql);

                            if($row = $result->fetch_assoc()){
                                $count = $row['COUNT(`ProductName`)'];
                            }
                        ?>
                        <p><?php echo $count; ?></p>
                    </div>
                    <a href="favourite.php"><i class="fa-solid fa-heart"></i></a>
                </li>
                <li class="cart" style="position: relative;">
                    <div class="count">
                        <?php
                            // require "connect.php";

                            // $connect = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

                            $sql = "SELECT COUNT(`ProductName`) FROM `cart` ";

                            $result = $connect->query($sql);

                            if($row = $result->fetch_assoc()){
                                $count = $row['COUNT(`ProductName`)'];
                            }
                        ?>
                        <p><?php echo $count; ?></p>
                    </div>
                    <a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a>
                </li>
            </div>
        </div>
    </nav>
    <!-------------------------------------- Navigation Bar ------------------------------------------->



    <section class="cart-main">
        <?php 
                if(isset($_GET['delete'])){
                    echo "<p id='suc' syle='position: relative;'><i style='margin-right: 2%;' class='fa-solid fa-circle-check'></i>An item has been removed from your cart!<i style='position: absolute; right: 2%;' class='fa-solid fa-xmark'></i></p>";
                }else{
                    
                }
                    

        ?>
        <h3>Your Cart</h3>
        <div class="max-width">
            <div class="cart-left">
                <table class="cart-table">
                    <thead>
                        <tr>
                            <th scope="col">Product Image</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Product Price</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            // require('connect.php');

                            // $c = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

                                $query = "SELECT * FROM `Cart`;";

                                $result = $connect->query($query);

                                while($row = $result->fetch_assoc()){

                                        echo "<tr scope='row'>
                                            <td><img src=".$row['ProductImage']." alt=".$row['ProductName']."></td>
                                            <td>".$row['ProductName']."</td>
                                            <td>$ ".$row['ProductPrice']."</td>
                                            <td style='display: flex; justify-content: space-between; align-items: center; padding-bottom: 10rem; cursor: pointer;'>
                                            <abbr title='Order now'><i style='color: var(--g); font-size: 20px; margin-top: 150px;' class='fa-solid fa-truck-fast'></i></abbr>
                                                <abbr title='Delete'>
                                                    <a href='deleteProduct.php?delete=".$row['SerialNumber']."'>
                                                    <svg width='23' height='23' viewBox='0 0 15 15' fill='none' xmlns='http://www.w3.org/2000/svg' style='margin-left: 8%; color: var(--cr); margin-top: 150px;'>
                                                        <path d='M0.877075 7.49988C0.877075 3.84219 3.84222 0.877045 7.49991 0.877045C11.1576 0.877045 14.1227 3.84219 14.1227 7.49988C14.1227 11.1575 11.1576 14.1227 7.49991 14.1227C3.84222 14.1227 0.877075 11.1575 0.877075 7.49988ZM7.49991 1.82704C4.36689 1.82704 1.82708 4.36686 1.82708 7.49988C1.82708 10.6329 4.36689 13.1727 7.49991 13.1727C10.6329 13.1727 13.1727 10.6329 13.1727 7.49988C13.1727 4.36686 10.6329 1.82704 7.49991 1.82704ZM9.85358 5.14644C10.0488 5.3417 10.0488 5.65829 9.85358 5.85355L8.20713 7.49999L9.85358 9.14644C10.0488 9.3417 10.0488 9.65829 9.85358 9.85355C9.65832 10.0488 9.34173 10.0488 9.14647 9.85355L7.50002 8.2071L5.85358 9.85355C5.65832 10.0488 5.34173 10.0488 5.14647 9.85355C4.95121 9.65829 4.95121 9.3417 5.14647 9.14644L6.79292 7.49999L5.14647 5.85355C4.95121 5.65829 4.95121 5.3417 5.14647 5.14644C5.34173 4.95118 5.65832 4.95118 5.85358 5.14644L7.50002 6.79289L9.14647 5.14644C9.34173 4.95118 9.65832 4.95118 9.85358 5.14644Z' fill='currentColor' fill-rule='evenodd' clip-rule='evenodd'>
                                                        </path>
                                                    </svg>
                                                    </a>
                                                </abbr>
                                            </td>
                                        </tr>";
                                }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="cart-right">
                <div class="c">
                    <div class="content">
                        <div class="txt">
                            <p>Number Of Products:</p>
                            <?php

                                $query = "SELECT COUNT(`ProductName`) FROM `Cart`";
                                $result = $connect->query($query);
                                $row = $result->fetch_assoc();
                                
                                    $prd = $row['COUNT(`ProductName`)'];
                                    
                                    echo "<p>".$prd."</p>";
                                
                            ?>
                        </div>
                        <hr>
                        <hr>
                        <div class="txt">
                            <p>Total Price:</p>
                            <?php

                                $query = "SELECT ROUND(SUM(`ProductPrice`), 2) FROM `Cart`";
                                $result = $connect->query($query);
                                $row = $result->fetch_assoc();
                                
                                    $total = $row['ROUND(SUM(`ProductPrice`), 2)'];
                                    
                                    echo "<span> $".$total."</span>";
                                
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
    var notif = document.getElementById('suc');
    var del = document.querySelector('.fa-xmark');


    del.addEventListener('click', () => {
        notif.classList.add('active');
    });
    </script>
</body>

</html>