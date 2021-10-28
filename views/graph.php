<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="views/css/style.css">
  <title>Graph</title>
</head>
<body class="vh-100 body-container">
<div id="graph-container" class="container-fluid h-custom my-container">
    <header class="d-flex justify-content-between mb-2">
    <section class="logo">
        <img src="assets/twitter-logo.svg" alt="logo_twitter">
    </section>
    <div id="current_date" class="btn btn-secondary border border-dark">
        <?php echo date('d/m/Y'); ?>
    </div>
    </header>

    <div id="graph">
        <canvas id="myChart" class="mt-4"></canvas>
    </div>
</div>
</body>
<script src="views/js/graph.js"></script>
</html>