<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>
    Hotel details
  </title>
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="navbar.css">
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <meta name="viewport" content="width = device-width , initial-scale = 1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="feedback.css">
</head>

<body>
  <?php
  include_once './common/navbar.php';
  ?>

  <?php
    include_once './db/db_config.php';

    $sql = 'SELECT * FROM hotel_book';
    $result=mysqli_query($conn, $sql);
  ?>

  <div><br><br><br><br><br>
  </div>

  <div class="container">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Serial</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">ArrivalDate</th>
          <th scope="col">Deperture Date</th>
          <th scope="col">Total Person</th>
          <th scope="col">Room Type</th>
        </tr>
      </thead>
      <tbody id="tbody">
        <?php
      $i=1;
      while ($record = mysqli_fetch_array($result)) {
        echo '<tr>
          <td>'.$i.'</td>
          <td>'.$record['first_name'].' '.$record['last_name'].'</td>
          <td>'.$record['email'].'</td>
          <td>'.$record['phone_no'].'</td>
          <td>'.$record['from_date'].'</td>
          <td>'.$record['to_date'].'</td>
          <td>'.$record['guest_no'].'</td>
          <td>'.$record['room_type'].'</td>
          </tr>
        ';
        $i++;
      }
    ?>

      </tbody>
    </table>
  </div>
  <script src="https://www.gstatic.com/firebasejs/6.6.2/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/6.6.2/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/6.6.2/firebase-firestore.js"></script>

  <script src="firebase.js"></script><!-- FireBase End-->
  <script src="admin_flight.js"></script>

</body>

</html>