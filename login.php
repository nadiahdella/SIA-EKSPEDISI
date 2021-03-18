<?php
include "config/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIA Ekspedisi Ciba Titipan</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo $base_url;?>includes/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo $base_url;?>includes/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background: #87B1FD; no-repeat;">

<div class="container">
    <div class="row justify-content-center">
        <h1 style="margin-top:50px;color:#fff;"><strong>Sistem Informasi Akuntansi</strong></h1>
        
    </div>
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <h1 style="margin-top:10px;color:#fff;"><strong>Ekspedisi Ciba Titipan</strong></h1>
    </div>
     <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-4">
        
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Form Login</h1>
                                </div>
                                <form class="user" action="login_proses.php" method="POST" enctype="multipart/form-data" >
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="password">
                                    </div>
                                    <button class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                    <hr>
                                </form>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo $base_url;?>includes/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo $base_url;?>includes/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo $base_url;?>includes/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo $base_url;?>includes/js/sb-admin-2.min.js"></script>

</body>

</html>
