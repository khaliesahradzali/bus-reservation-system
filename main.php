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
    <form action="functions.php" method="post">
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
  array('Seat Type'=>'Window', 'Seat Number'=>'Seat 1', 'Price(RM)'=>'4'),
  array('Seat Type'=>'Window', 'Seat Number'=>'Seat 2', 'Price(RM)'=>'4'),
  array('Seat Type'=>'Window', 'Seat Number'=>'Seat 3', 'Price(RM)'=>'4'),
  array('Seat Type'=>'Window', 'Seat Number'=>'Seat 4', 'Price(RM)'=>'4'),
  array('Seat Type'=>'Window', 'Seat Number'=>'Seat 5', 'Price(RM)'=>'4'),
  array('Seat Type'=>'Window', 'Seat Number'=>'Seat 6', 'Price(RM)'=>'4'),
  array('Seat Type'=>'Window', 'Seat Number'=>'Seat 7', 'Price(RM)'=>'4'),
  array('Seat Type'=>'Window', 'Seat Number'=>'Seat 8', 'Price(RM)'=>'4'),
  array('Seat Type'=>'Window', 'Seat Number'=>'Seat 9', 'Price(RM)'=>'4'),
  array('Seat Type'=>'Window', 'Seat Number'=>'Seat 10', 'Price(RM)'=>'4'),
  array('Seat Type'=>'Aisle', 'Seat Number'=>'Seat 11', 'Price(RM)'=>'4'),
  array('Seat Type'=>'Aisle', 'Seat Number'=>'Seat 12', 'Price(RM)'=>'4'),
  array('Seat Type'=>'Aisle', 'Seat Number'=>'Seat 13', 'Price(RM)'=>'4'),
  array('Seat Type'=>'Aisle', 'Seat Number'=>'Seat 14', 'Price(RM)'=>'4'),
  array('Seat Type'=>'Aisle', 'Seat Number'=>'Seat 15', 'Price(RM)'=>'4'),
  array('Seat Type'=>'Aisle', 'Seat Number'=>'Seat 16', 'Price(RM)'=>'4'),
  array('Seat Type'=>'Aisle', 'Seat Number'=>'Seat 17', 'Price(RM)'=>'4'),
  array('Seat Type'=>'Aisle', 'Seat Number'=>'Seat 18', 'Price(RM)'=>'4'),
  array('Seat Type'=>'Aisle', 'Seat Number'=>'Seat 19', 'Price(RM)'=>'4'),
  array('Seat Type'=>'Aisle', 'Seat Number'=>'Seat 20', 'Price(RM)'=>'4'),
  array('Seat Type'=>'Single', 'Seat Number'=>'Seat 21', 'Price(RM)'=>'8'),
  array('Seat Type'=>'Single', 'Seat Number'=>'Seat 22', 'Price(RM)'=>'8'),
  array('Seat Type'=>'Single', 'Seat Number'=>'Seat 23', 'Price(RM)'=>'8'),
  array('Seat Type'=>'Single', 'Seat Number'=>'Seat 24', 'Price(RM)'=>'8'),
  array('Seat Type'=>'Single', 'Seat Number'=>'Seat 25', 'Price(RM)'=>'8'),
  array('Seat Type'=>'Single', 'Seat Number'=>'Seat 26', 'Price(RM)'=>'8'),
  array('Seat Type'=>'Single', 'Seat Number'=>'Seat 27', 'Price(RM)'=>'8'),
  array('Seat Type'=>'Single', 'Seat Number'=>'Seat 28', 'Price(RM)'=>'8'),
  array('Seat Type'=>'Single', 'Seat Number'=>'Seat 29', 'Price(RM)'=>'8'),
  array('Seat Type'=>'Single', 'Seat Number'=>'Seat 30', 'Price(RM)'=>'8'),
);

echo build_table($seat);




   ?>
 </center>
  </body>
</html>
