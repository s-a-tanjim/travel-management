<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>
    Flight details
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

    $sql = 'SELECT * FROM flight_book';
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
        <th scope="col">Deperture</th>
        <th scope="col">Destination</th>
        <th scope="col">Deperture Date</th>
        <th scope="col">ReturngDate</th>
        <th scope="col">Adult</th>
        <th scope="col">Children</th>
        <th scope="col">Class</th>
      </tr>
    </thead>
    <tbody id="tbody">
    <?php
      $i=1;
      while ($record = mysqli_fetch_array($result)) {
        echo '<tr>
          <td>'.$i.'</td>
          <td>'.$record['name'].'</td>
          <td>'.$record['email'].'</td>
          <td>'.$record['flying_from'].'</td>
          <td>'.$record['flying_to'].'</td>
          <td>'.$record['departing_date'].'</td>
          <td>'.$record['returning_date'].'</td>
          <td>'.$record['adult_count'].'</td>
          <td>'.$record['child_count'].'</td>
          <td>'.$record['travel_class'].'</td>
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