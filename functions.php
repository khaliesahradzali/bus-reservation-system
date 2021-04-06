<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bus Seat Reservation System</title>
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
function build_table($seat){
  $html = '<table>';
  // header row
  $html .= '<tr>';
  foreach($seat[0] as $key=>$value){
          $html .= '<th>' . htmlspecialchars($key) . '</th>';
      }
  $html .= '</tr>';

  // data rows
  foreach( $seat as $key=>$value){
      $html .= '<tr>';
      foreach($value as $key2=>$value2){
          $html .= '<td>' . htmlspecialchars($value2) . '</td>';
      }
      $html .= '</tr>';
  }

  // finish table and return it

  $html .= '</table>';
  return $html;
}

$seat = array(
  array('Seat Type'=>'Window', 'Seat Number'=>'Seat 1', 'Price(RM)'=>'6'),
  array('Seat Type'=>'Window', 'Seat Number'=>'Seat 2', 'Price(RM)'=>'6'),
  array('Seat Type'=>'Window', 'Seat Number'=>'Seat 3', 'Price(RM)'=>'6'),
  array('Seat Type'=>'Window', 'Seat Number'=>'Seat 4', 'Price(RM)'=>'6'),
  array('Seat Type'=>'Window', 'Seat Number'=>'Seat 5', 'Price(RM)'=>'6'),
  array('Seat Type'=>'Window', 'Seat Number'=>'Seat 6', 'Price(RM)'=>'6'),
  array('Seat Type'=>'Window', 'Seat Number'=>'Seat 7', 'Price(RM)'=>'6'),
  array('Seat Type'=>'Window', 'Seat Number'=>'Seat 8', 'Price(RM)'=>'6'),
  array('Seat Type'=>'Window', 'Seat Number'=>'Seat 9', 'Price(RM)'=>'6'),
  array('Seat Type'=>'Window', 'Seat Number'=>'Seat 10', 'Price(RM)'=>'6'),
  array('Seat Type'=>'Aisle', 'Seat Number'=>'Seat 11', 'Price(RM)'=>'6'),
  array('Seat Type'=>'Aisle', 'Seat Number'=>'Seat 12', 'Price(RM)'=>'6'),
  array('Seat Type'=>'Aisle', 'Seat Number'=>'Seat 13', 'Price(RM)'=>'6'),
  array('Seat Type'=>'Aisle', 'Seat Number'=>'Seat 14', 'Price(RM)'=>'6'),
  array('Seat Type'=>'Aisle', 'Seat Number'=>'Seat 15', 'Price(RM)'=>'6'),
  array('Seat Type'=>'Aisle', 'Seat Number'=>'Seat 16', 'Price(RM)'=>'6'),
  array('Seat Type'=>'Aisle', 'Seat Number'=>'Seat 17', 'Price(RM)'=>'6'),
  array('Seat Type'=>'Aisle', 'Seat Number'=>'Seat 18', 'Price(RM)'=>'6'),
  array('Seat Type'=>'Aisle', 'Seat Number'=>'Seat 19', 'Price(RM)'=>'6'),
  array('Seat Type'=>'Aisle', 'Seat Number'=>'Seat 20', 'Price(RM)'=>'6'),
  array('Seat Type'=>'Single', 'Seat Number'=>'Seat 21', 'Price(RM)'=>'12'),
  array('Seat Type'=>'Single', 'Seat Number'=>'Seat 22', 'Price(RM)'=>'12'),
  array('Seat Type'=>'Single', 'Seat Number'=>'Seat 23', 'Price(RM)'=>'12'),
  array('Seat Type'=>'Single', 'Seat Number'=>'Seat 24', 'Price(RM)'=>'12'),
  array('Seat Type'=>'Single', 'Seat Number'=>'Seat 25', 'Price(RM)'=>'12'),
  array('Seat Type'=>'Single', 'Seat Number'=>'Seat 26', 'Price(RM)'=>'12'),
  array('Seat Type'=>'Single', 'Seat Number'=>'Seat 27', 'Price(RM)'=>'12'),
  array('Seat Type'=>'Single', 'Seat Number'=>'Seat 28', 'Price(RM)'=>'12'),
  array('Seat Type'=>'Single', 'Seat Number'=>'Seat 29', 'Price(RM)'=>'12'),
  array('Seat Type'=>'Single', 'Seat Number'=>'Seat 30', 'Price(RM)'=>'12'),
);


    $length = count($seat);

    for($i=0; $i < $length; $i++){
        $seat[$i] = 0;
    }

    $choice = $_POST['choice'];
    $seatnum = 0;

    if ($choice == 1) {
      $seatnum = WindowReserve();

      if ($seatnum == -1){
        $seatnum = AisleReserve();

          if ($seatnum != -1) {
            echo "Sorry, all window seats are reserved. Please reserve an aisle or single seat instead.";
            $price = 4;
            printTicket($seatnum, $price);
            }
          }
          else {
            echo "Your window seat has been reserved succesfully!";
            $price = 4;
            printTicket($seatnum, $price);
          }
    }
    elseif ($choice == 2) {
        $seatnum = AisleReserve();

          if ($seatnum == -1) {
            $seatnum = WindowReserve();

            if ($seatnum != -1) {
                echo "Sorry, all isle seats are reserved. Please reserve a window or isle seat instead.";
                $price = 5;
                printTicket($seatnum, $price);
              }
            }
            else {
              echo "Your aisle seat has been reserved succesfully!";
              $price = 4;
              printTicket($seatnum, $price);
            }
        }
        elseif ($choice == 3) {
          $seatnum = SingleReserve();

            if ($seatnum == -1) {
              $seatnum = AisleReserve();

              if ($seatnum != -1) {
                echo "Sorry, all single seats are reserved. Please reserve an aisle or window seat instead.";
                $price = 4;
                printTicket($seatnum, $price);
              }
            }
            else {
              echo "Your single seat has been reserved succesfully!";
              $price = 8;
              printTicket($seatnum, $price);
            }
        }
        else {
          echo "Please try again! The submission in invalid";
          $choice = 0;
        }

        if ($seatnum == -1) {
          echo "Sorry, there are no available seats left. <br>";
        }


    function WindowReserve() {
      for ($i=0; $i < 10; $i++) {
        if (isset($seat[$i]) == 0) {
          $seat[$i] = 1;
          return $i + 1;
        }
      }
      return -1;

    }

    function AisleReserve() {
      for ($i=11; $i < 20; $i++) {
        if (isset($seat[$i]) == 0){
          $seat[$i] = 1;
          return ($i + 1);
        }
      }
      return -1;

    }

    function SingleReserve() {
      for ($i=21; $i < 30; $i++) {
        if (isset($seat[$i]) == 0) {
          $seat[$i] = 1;
          return $i + 1;
        }
      }
      return -1;

    }

    function printTicket($seatnum, $price) {
      echo "<br><br>Reserved seat number: " . $seatnum;
      echo "<br>Total price: RM" . $price;
    }


     ?>

</center>
  </body>
</html>
