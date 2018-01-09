<?php
session_start();



if($_SESSION['id'] == null) {
    header('Location: index.php');
}


    require_once '../vendor/autoload.php';
    $login = new App\classes\Login();

    if(isset($_GET['logout'])) {
        $login->adminLogout();
    }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
</head>
<body>
<?php include 'includes/menu.php'; ?>




<script src="../asset/js/jquery-3.2.1.js"></script>
<script src="../asset/js/bootstrap.bundle.js"></script>
<script src="../asset/js/bootstrap.min.js"></script>
</body>
</html>