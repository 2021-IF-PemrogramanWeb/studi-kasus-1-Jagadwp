<?php
session_start();

if(!isset($_SESSION['login'])) {
	header("Location: /index.php");
	exit;
}

include_once('databaseconnect.php');
$query = 'SELECT reason_id, count(*) AS total FROM activity GROUP BY reason_id ORDER BY reason_id';
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Reason Id', 'Total'],
            <?php
            $fire = pg_query($conn, $query);
            while ($result = pg_fetch_assoc($fire)) {
              echo "[{$result['reason_id']}, {$result['total']}],";
            }
         ?>
        ]);

        var options = {
          chart: {
            title: 'Trend of Reason',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous"
    />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Jagad's Website</title>
  </head>
  <body>
    <div class="px-3">
      <p class="fw-bold fw-bold px-2 pt-3 my-2">Welcome <?= $_SESSION["username"]?> !</p>
    </div>
    <section class="d-flex justify-content-center py-4">
      <div id="barchart_material" style="width: 900px; height: 500px;"></div>
    </section>

    <div class="social-auth-links text-center mt-2 mb-3">
        <a href="/index.php" class="btn btn-block btn-primary my-2"> Login Page</a>
        <a href="/table.php" class="btn btn-block btn-dark my-2"> Table Page </a>
        <a class="btn btn-danger btn-block ml-auto" aria-current="page" href="/logout.php">Sign Out</a>
        <?php if (isset($_COOKIE["test"])): ?>
        <a class="fst-italic btn text-success btn-block ml-auto disabled" aria-current="page" href=""><?= $_COOKIE["test"]?></a>
        <?php endif ?>
    </div>
  </body>
</html>


