<?php

require_once "../../Library/Models/Transaction.php";

use App\Models\Transaction;

$selected = "transaction";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accounting App - Finances</title>
    <link rel="stylesheet" href="/AccountingApp/App/Assets/Styles/basic.css" />
    <link rel="stylesheet" href="/AccountingApp/App/Assets/Styles/table.css" />
    <link rel="stylesheet" href="/AccountingApp/App/Assets/Styles/form.css" />
</head>

<body>
    <?php
    include("../Assets/Snippets/navigation-bar.php");
    ?>
    <div class="content">
        <h1 class="title left">New Transactions</h1>
    </div>
    

</body>

</html>