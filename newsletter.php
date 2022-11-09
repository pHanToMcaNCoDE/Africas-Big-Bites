<?php



class Newsletter{

    private $c;

    public function getEmail($email){
        $c = mysql_connect(SERVER, USERNAME, PASSWORD, DATABASE);

        if($c->connect_error){
            die("Cannot connect to the database!". $c->connect_error);
        }else{

            $query = "INSERT INTO `newsletter` VALUES('".$email."');";

            $result = $c->query($query);

            $row = $c->fetch_assoc($result);

            if($row){
                echo "Success";
            }else{
                echo "Error";
            }

            return true;
        }
        $c->close();
    }
}

?>