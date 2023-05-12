<?php
        require "connect.php";

        // ini_set("display_errors", "On");
        
        $c = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

        if(isset($_GET['delete'])){
            
            
            $id = $_GET['delete'];
            echo $id;

            $sql = "DELETE FROM `Favourite` WHERE `SerialNumber` = '$id'";

            if($result = $c->query($sql)){
                header("Location: favourite.php?delete=success");
            }else{
                header("Location: favourite.php?delete=error");
            }
        }

?>