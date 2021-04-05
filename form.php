<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bus Seat Reservation System</title>
    <style>

    body{
      background-color: #f7f7cd;
      font-family: monospace;
      font-size: 20px;
    }

    form{
      background-color: #95dbf5;
    }

    .input {
      width: 60%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
    }

    .button {
      background-color: #f7f7cd;
      border: solid 3px #1a2a30;
      color: #1a2a30;
      border-radius: 10px;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-family: monospace;
      font-size: 20px;
      margin: 4px 2px;
      cursor: pointer;
    }

    .button:hover{
      background-color: #1a2a30;
      border: solid 3px #f7f7cd;
      color: #f7f7cd;
    }
</style>
  </head>


  <body>
    <form action="reservation.php" method="post">
        <center>
        <br> <h1>Welcome to Bus Seat Reservation System</h1>
        <b>The price for single seat is RM8. <br>
        The price for double seat is RM4. <br><br>
        Please enter 1 for window, 2 for aisle, 3 for single seat:</b><br><br>

        <input type="number" class="input" name="choice" value="" /><br>
        <input type="submit" class="button" name="submit" value="Submit" />
        </center>
    </form><br><br>
    <center>
      <h2><u>Bus Seat List</u></h2>
      <b>Window Seat: 1-10 &emsp;&ensp; Aisle Seat: 11-20 &emsp;&ensp; Single Seat: 21-30</b><br><br>

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


              foreach ($seat as $key => $value) {
                  foreach ($value as $position => $price ) {
                    echo "<br>{$key} ({$position}): RM{$price} <br>";
                  }
                }


   ?>
</center>
  </body>
</html>
