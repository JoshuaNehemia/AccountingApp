<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    if($_POST['username'] == 'admin' && $_POST['password'] == 'admin'){
        $_SESSION['user'] = $_POST['username'];
        header("Location: /AccountingApp/App/Pages/books.php");
    }
}
?>