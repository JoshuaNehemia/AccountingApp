<?php
$selected = "dashboard";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Accounting App - Dashboard</title>
  <link rel="stylesheet" href="/AccountingApp/App/Assets/Styles/basic.css" />
  <link rel="stylesheet" href="/AccountingApp/App/Assets/Styles/dashboard.css" />
</head>

<body>
  <?php
  include("../Assets/Snippets/navigation-bar.php");
  ?>

  <div class="content">
    <h1 class="title left">Dashboards</h1>
    <div class="summary">
      <div class="assets">
        <div class="header">
          <img src="/AccountingApp/App/Assets/Images/money.svg" alt="money-icon" />
          <b>Total Assets: </b>
        </div>
        <div class="value">
          <div>$12,345.00</div>
        </div>
      </div>

      <div class="inout">
        <div class="header">
          <img src="/AccountingApp/App/Assets/Images/inout.svg" alt="in-out-icon" />
          <b>In and Out: </b>
        </div>
        <div class="value">
          <div>$12,345.00</div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>