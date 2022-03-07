<?php
session_start();
echo '<html>';
include_once './common/header.php';
include_once './common/navbar.php';
?>
<link rel="stylesheet" href="package.css">
<?php
  include_once './db/db_config.php';

  $sql = 'SELECT * FROM packages';
  $result=mysqli_query($conn, $sql);
?>
<br>
<br> <br> <br> <br> <br>
<P>TOUR PACKAGES</P>
<style>
  P {
    font-size: 50px;
    text-align: center;
    color: aliceblue;
  }
</style>
<br>

<div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-image table-dark table-bordered" style="width: 100%">
        <thead>
          <tr>

            <th width="20%" scope="col">PLACE</th>
            <th width="30%" scope="col">DETAILS</th>
            <th width="15%" scope="col">DAYS</th>
            <th width="15%" scope="col">FLIGHT</th>
            <th width="10%" scope="col">HOTEL</th>
            <th width="10%" scope="col">COST</th>
          </tr>
        </thead>
        <tbody>
          <?php
            while ($record = mysqli_fetch_array($result)) {
              echo '<tr>
              <td class="w-25">
                <a href="'.$record['page_url'].'" style="margin-left: -5px;">
                  <img src="'.$record['img_url'].'" ; class="img-fluid img-thumbnail" alt="Sheep">
              </td>
              <td>
                <h3>'.$record['city'].'</h3>'.$record['description'].'
              </td>
              <td>'.$record['days'].'</td>
              <td>'.$record['flight'].'</td>
              <td>'.$record['hotel'].'</td>
              <td>'.$record['cost'].'</td>
            </tr>
              ';
            }
          ?>

        </tbody>
      </table>
    </div>
  </div>
</div>

<?php

include_once './common/js.php';
include_once './common/footer.php';

echo '</body>
</html>';