<?php
$selected = "finance";
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
        <h1 class="title left">Finances</h1>
        <div class="finances-table">
            <table>
                <thead>
                    <tr>
                        <th class="left">
                            Banks
                        </th>
                        <th class="left">
                            Balances
                        </th>
                        <th class="left">
                            
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < 20; $i++) {
                        include("../Assets/Snippets/finance-row.php");
                    }
                    ?>
                </tbody>
            </table>
        </div>
        
        <div class="floating-container">
            <a class="menu-option">Add Expense</a>
            <a class="menu-option">Add Income</a>
            <div class="floating-button">+</div>
        </div>
    </div>
</body>

</html>