<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bus Seat Reservation</title>
    <style>
    body{
      background-color: #f7f7cd;
      font: bold 30px monospace;
    }
    </style>
  </head>
  <body>
<center>
  <br><br>
<?php

    $seat = array("Seat 1" => array ("window" => 4),
                  "Seat 2" => array ("window" => 4),
                  "Seat 3" => array ("window" => 4),
                  "Seat 4" => array ("window" => 4),
                  "Seat 5" => array ("window" => 4),
                  "Seat 6" => array ("window" => 4),
                  "Seat 7" => array ("window" => 4),
                  "Seat 8" => array ("window" => 4),
                  "Seat 9" => array ("window" => 4),
                  "Seat 10" => array ("window" => 4),
                  "Seat 11" => array ("aisle" => 4),
                  "Seat 12" => array ("aisle" => 4),
                  "Seat 14" => array ("aisle" => 4),
                  "Seat 13" => array ("aisle" => 4),
                  "Seat 15" => array ("aisle" => 4),
                  "Seat 16" => array ("aisle" => 4),
                  "Seat 17" => array ("aisle" => 4),
                  "Seat 18" => array ("aisle" => 4),
                  "Seat 19" => array ("aisle" => 4),
                  "Seat 20" => array ("aisle" => 4),
                  "Seat 21" => array ("single" => 8),
                  "Seat 22" => array ("single" => 8),
                  "Seat 23" => array ("single" => 8),
                  "Seat 24" => array ("single" => 8),
                  "Seat 25" => array ("single" => 8),
                  "Seat 26" => array ("single" => 8),
                  "Seat 27" => array ("single" => 8),
                  "Seat 28" => array ("single" => 8),
                  "Seat 29" => array ("single" => 8),
                  "Seat 30" => array ("single" => 8)
                );



    $length = count($seat);

    for($i=0; $i < $length; $i++){
        $seat[$i] = 0;
    }

    $choice = $_POST['choice'];
    $seatnum = 0;

    if ($choice == 1) {
      $seatnum = bookWindow();

      if ($seatnum == -1){
        $seatnum = bookAisle();

          if ($seatnum != -1) {
            echo "Sorry, we were not able to book a window seat. Please have an aisle seat instead.";
            $price = 4;
            printTicket($seatnum, $price);
            }
          }
          else {
            echo "We have a window seat available!";
            $price = 4;
            printTicket($seatnum, $price);
          }
    }
    elseif ($choice == 2) {
        $seatnum = bookAisle();

          if ($seatnum == -1) {
            $seatnum = bookWindow();

            if ($seatnum != -1) {
                echo "Sorry, we were not able to book an aisle seat. Please have a window seat instead.";
                $price = 5;
                printTicket($seatnum, $price);
              }
            }
            else {
              echo "We have an aisle seat available!";
              $price = 4;
              printTicket($seatnum, $price);
            }
        }
        elseif ($choice == 3) {
          $seatnum = bookSingle();

            if ($seatnum == -1) {
              $seatnum = bookAisle();

              if ($seatnum != -1) {
                echo "Sorry, there are no single seats available. Please have an aisle seat instead.";
                $price = 4;
                printTicket($seatnum, $price);
              }
            }
            else {
              echo "We have a single seat available!";
              $price = 8;
              printTicket($seatnum, $price);
            }
        }
        else {
          echo "Invalid choice made. Please try again!";
          $choice = 0;
        }

        if ($seatnum == -1) {
          echo "Sorry, there are no available seats left. <br>";
        }

        //$choice = (int)readline("Please enter 1 for window, 2 for aisle, 3 for single seat: ");



    function bookWindow() {
      for ($i=0; $i < 10; $i++) {
        if (isset($seat[$i]) == 0) {
          $seat[$i] = 1;
          return $i + 1;
        }
      }
      return -1;

    }

    function bookAisle() {
      for ($i=11; $i < 20; $i++) {
        if (isset($seat[$i]) == 0){
          $seat[$i] = 1;
          return ($i + 1);
        }
      }
      return -1;

    }

    function bookSingle() {
      for ($i=21; $i < 30; $i++) {
        if (isset($seat[$i]) == 0) {
          $seat[$i] = 1;
          return $i + 1;
        }
      }
      return -1;

    }

    function printTicket($seatnum, $price) {
      echo "<br><br>Your seat number: " . $seatnum;
      echo "<br>Total price: RM" . $price;
    }


     ?>

</center>
  </body>
</html>
