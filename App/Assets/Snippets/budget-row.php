<?php
$budget_id = 1;

if (isset($budget_id)) {
    $budget = "Food";
    $balance = "$ 12345";


    echo <<<html
<tr>
    <td>
        $budget
    </td>
    <td>
        $balance
    </td>
    <td>
    <form action="edit-transaction.php" method="POST">
        <button type="submit" class="notion-button">detail</button>
    </form>
    </td>
</tr>
html;
}
