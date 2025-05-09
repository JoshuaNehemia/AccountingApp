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
  <div class="background-wrapper">
    <div class="navigation">
      <img src="/AccountingApp/App/Assets/Images/bag.svg" alt="accounting-app-logo" />
      <nav>
        <a class="center selected" data-tooltip="Dashboard">
          <img src="/AccountingApp/App/Assets/Images/finance.svg" alt="finance-icon" />
        </a>
        <a class="center" data-tooltip="Transactions">
          <img src="/AccountingApp/App/Assets/Images/receipt.svg" alt="receipt-icon" />
        </a>
        <a class="center" data-tooltip="Accounts">
          <img src="/AccountingApp/App/Assets/Images/balance.svg" alt="balance-icon" />
        </a>
        <a class="center" data-tooltip="Budget">
          <img src="/AccountingApp/App/Assets/Images/budget.svg" alt="budget-icon" />
        </a>
      </nav>
    </div>

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
            <div class="option">
              <select name="timeframe">
                <option value="week">This week</option>
                <option value="month">This month</option>
                <option value="year">This year</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
