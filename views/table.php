<?php
require_once "database/connection.php";
require "controllers/RestrictAccess.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/views/css/style.css" />
    <title>Table</title>
  </head>
  <body class="vh-100 body-container">
    <div id="table-container" class="container-fluid h-custom my-container">
      <header class="d-flex justify-content-between mb-4">
        <section class="logo">
          <img src="/assets/twitter-logo.svg" alt="logo_twitter" />
        </section>
        <div id="current_date" class="btn btn-secondary border border-dark">
          <?php echo date('d/m/Y'); ?>
        </div>
      </header>

      <div id="content">
        <section id="button_car">
          <div id="car">
            <div class="car-div">
              <div class="rounded box bg-blue"></div>
              <div class="text-center">Mobil 1</div>
            </div>
            <div class="car-div">
              <div class="rounded box bg-green"></div>
              <div class="text-center">Mobil 2</div>
            </div>
          </div>
          <div id="btn">
            <a href="/graph" class="btn btn-warning text-dark left-btn">
              Graph
            </a>
            <button class="btn btn btn-info text-dark left-btn">
              Export
            </button>
            <a href="/logout" class="btn btn-danger text-dark left-btn">
              Logout
            </a>
          </div>
        </section>

        <section id="table">
          <table class="table table-bordered">
            <thead class="bg-green">
              <tr>
                <th scope="col">No</th>
                <th scope="col">On</th>
                <th scope="col">Off</th>
                <th scope="col">Act by</th>
                <th scope="col">Reason</th>
              </tr>
            </thead>
            <tbody>
            <?php
              $query = "SELECT * FROM logs";
              $stmt = $mysqli->query($query);
              $counter = 1;

              while ($log = $stmt->fetch_array()) {
                  echo "<tr>";

                  echo "<td>" . $counter++ . "</td>";
                  echo "<td>" . $log['on'] . "</td>";
                  echo "<td>" . $log['off'] . "</td>";
                  echo "<td>" . $log['act_by'] . "</td>";
                  echo "<td class=\"text-left\">" . $log['reason'] . "</td>";

                  echo "</tr>";
              }
              ?>
            </tbody>
          </table>
        </section>
      </div>
    </div>
  </body>
</html>
