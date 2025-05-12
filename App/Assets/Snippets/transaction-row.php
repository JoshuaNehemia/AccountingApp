<?php
$transaction_id = 1;

if (isset($transaction_id)) {
    $date = "27 May 2025";
    $notes = "Big Mac Burgers";
    $type = "Credit";
    $category = "Foods 🍔";
    $amount = "25$";
    $finance = "American Bank";


    echo <<<html
<tr>
    <td>
        $date
    </td>
    <td>
        $notes
    </td>
    <td>
        $type
    </td>
    <td>
        $category
    </td>
    <td>
        $amount
    </td>
    <td>
        $finance
    </td>
    <td>
    <form action="edit-transaction.php" method="POST">
        <button type="submit" class="notion-button">edit</button>
    </form>
    </td>
</tr>
html;
}
