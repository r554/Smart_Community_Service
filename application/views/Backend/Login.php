<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Pengaduan - Pemerintah Kabupaten Jember</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/admin/images/logo-pemkab-jember.png">
    <link href="<?= base_url() ?>assets/admin/css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <center>
                                        <img src="<?= base_url() ?>assets/admin/images/logo-pemkab-jember.png" alt="" width="100px" height="100px">
                                    </center>
                                    <br>
                                    <h3 class="text-center mb-4">LOGIN</h3>
                                    <h4 class="text-center mb-4">Sistem Pengaduan Layanan Pemkab Jember</h4>
                                    <form action="<?= base_url('Login/login') ?>" method="POST">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Username</strong></label>
                                            <input name="username" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input name="password" type="password" class="form-control">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox ml-1">
                                                    <!-- <input type="checkbox" class="custom-control-input" id="basic_checkbox_1"> -->
                                                    <!-- <label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label> -->
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a href="page-forgot-password.html">Lupa Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                    </form>
                                    <!-- <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="./page-register.html">Sign up</a></p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?= base_url() ?>assets/admin/vendor/global/global.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/js/custom.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/js/deznav-init.js"></script>

</body>

</html>