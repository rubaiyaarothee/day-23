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
        <div class="col-sm-8 mx-auto" style="margin-top: 200px">
            <div class="card">
                <h3></h3>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Category Name</label>
                            <div class="col-sm-9">
                                <option>---Select Categoty Name---</option>
                               <option value="1">Category one</option>
                                <option value="2">Category Two</option>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label" >Category Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control"  name="Category Description" ></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label" >Publication Status</label>
                            <div class="col-sm-9">
                                <input type="radio" name="status" value="1"> published
                                <input type="radio" name="status" value="0"> unpublished
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success btn-block" name="btn">Save Category Info</button>
                                </div>
                            </div>
                    </form>
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