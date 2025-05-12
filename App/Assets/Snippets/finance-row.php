<?php
$finance_id = 1;

if (isset($finance_id)) {
    $finance = "BCA";
    $balance = "$ 12345";


    echo <<<html
<tr>
    <td>
        $finance
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
