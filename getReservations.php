<?php 


class Reservations{

  public function getReservations($fname, $lname, $email, $phone, $arrival, $food, $people){
    $connect = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

    if($connect->connect_error){
      echo("Error! ".$connect->connect_error);
    }else{
          
      // $custid = $connection->real_escape_string($custid); 
      $fname = $connect->real_escape_string($fname);
      $lname = $connect->real_escape_string($lname);
      $email = $connect->real_escape_string($email);
      $phone = $connect->real_escape_string($phone);
      $arrival = $connect->real_escape_string($arrival);
      $food = $connect->real_escape_string($food);
      $people = $connect->real_escape_string($people);



      // $cust = $this->custIDGen();

      $sql = $connect->prepare("INSERT INTO reservations(`firstName`, `lastName`, `phoneNumber`, `emailAddress`, `numberOfPeople`, `dateOfArrival`, `mealTime`)
       VALUES (?, ?, ?, ?, ?, ?, ?);");

      $sql->bind_param("sssssss", $fname, $lname, $phone, $email, $people, $arrival, $food);

      $sql->execute();
    
      return true;


    }
      $connect->close();
  }




  // private function custIDGen(){
  //   $connect = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
  //     if($connect->connect_error){
  //       echo("Error! ".$connect->connect_error);
  //     }else{
  //       $sql = "SELECT * FROM `custid`;";

  //       $result = $connect->query($sql);

  //       $row = $result->fetch_assoc();

  //       $mod = "";
  //       $start = $row['start'];
  //       $curr = $row['current'];
  //       $str = "cust-";

  //       if($start >= $curr){
  //         $curr++;
  //         if($curr < 10){
  //           $mod = '0'.$curr;
  //         }

  //       }else{
  //         $curr++;

  //         if($curr < 10){
  //           $mod = '0'.$curr;
  //         }else{
  //           $mod = $curr;
  //         }

  //       }
                    
  //       $sql = "UPDATE `custid` SET `current`= '".$curr."'";
  //       $connect->query($sql);
        
  //       return $str.$mod;
  //     }
    
  //       $connection->close(); 
  // }

}







?>