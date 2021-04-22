<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>SISTEM LELANG</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-5 col-xs-12 mt-5">
                <div class="card mt-5">
                    <div class="card-body">
                        <h2 class="text-center text-dark mb-3 mt-1">SISTEM LELANG</h2>
                        <hr>
                        <form action="controller/auth.php" method="POST">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-fw fa-envelope"></i> </span>
                                    </div>
                                    <input name="username" class="form-control" placeholder="username" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-fw fa-lock"></i> </span>
                                    </div>
                                    <input class="form-control" placeholder="Password" name="password" type="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block" name="userLogin"> Login
                                </button>
                            </div> <!-- form-group// -->
                            <div class="row mt-4 justify-content-end">
                                <div class="col-md-6">
                                    <p class="text-left"><a href="petugas.php">Login petugas</a></p>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-right"><a href="registrasi.php">Buat Akun</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
</body>

</html>