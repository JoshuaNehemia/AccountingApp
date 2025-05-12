<?php
if(isset($selected))
{
}
else
{
    $selected == "";
}
?>

<div class="navigation">
    <img src="/AccountingApp/App/Assets/Images/bag.svg" alt="accounting-app-logo" />
    <nav>
        <a href="index.php" class="center <?php if($selected == "dashboard"){echo "selected";}?>" data-tooltip="Dashboard">
            <img src="/AccountingApp/App/Assets/Images/finance.svg" alt="finance-icon" />
        </a>
        <a href="transaction.php" class="center <?php if($selected=="transaction"){echo "selected";}?>" data-tooltip="Transactions">
            <img src="/AccountingApp/App/Assets/Images/receipt.svg" alt="receipt-icon" />
        </a>
        <a href="finance.php" class="center <?php if($selected=="finance"){echo "selected";}?>" data-tooltip="Finances ">
            <img src="/AccountingApp/App/Assets/Images/balance.svg" alt="balance-icon" />
        </a>
        <a href="budget.php" class="center <?php if($selected=="budget"){echo "selected";}?>" data-tooltip="Budgets">
            <img src="/AccountingApp/App/Assets/Images/budget.svg" alt="budget-icon" />
        </a>
    </nav>
</div>
