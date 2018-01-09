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
<div class="container mt-5"  style="margin-top: 200px">
    <div class="row">
        <div class="col-sm-9 mx-auto" style="margin-top: 200px">
            <div class="card">
                <h3></h3>
                <div class="card-body">
                    <table class="table table-dark">
                        <thead>
                        <tr>
                            <th scope="col">SL NO</th>
                            <th scope="col">Categoty</th>
                            <th scope="col">Status</th>
                            <th scope="col">Category Description</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>
                                <a href="">Edit</a>
                                <a href="">Delete</a>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>
                                <a href="">Edit</a>
                                <a href="">Delete</a>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>
                                <a href="">Edit</a>
                                <a href="">Delete</a>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
</div>
<script src="../asset/js/jquery-3.2.1.js"></script>
<script src="../asset/js/bootstrap.bundle.js"></script>
<script src="../asset/js/bootstrap.min.js"></script>
</body>
</html>