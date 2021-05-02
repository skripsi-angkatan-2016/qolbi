<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8" />
    <title>Upvex - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/css/app.min.css" rel="stylesheet" type="text/css" />
</head>
    <body class="authentication-bg authentication-bg-pattern">
        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-4 d-flex align-items-center">
                        <h4>Halaman Vendor</h4>
                    </div>
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">
                            <div class="card-body ">
                        
                                <h5 class="auth-title">Sign In</h5>

                                <form id="form_login" method="post" action="" class="form-horizontal ">
                                <div class="alert alert-danger" align="center" style="display: none;"> </div>

                                    <div class="form-group mb-3">
                                        <label for="emai">Email </label>
                                        <input class="form-control" type="email" id="emai" required="" name="email" placeholder="Masukkan Email">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required="" name="password" id="password" placeholder="Masukkan  password">
                                    </div>

                                  

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-danger btn-block" type="submit"> Log In </button>
                                    </div>

                                </form>


                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            2021 &copy;
        </footer>

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $('#form_login').submit(function(e){
            e.preventDefault();

            var formData = new FormData(this);
            var url = "<?=base_url('loginvendor/check_account');?>";

            $.ajax({
                type : "POST",
                url : url,
                data : formData,
                cache : false,
                contentType : false,
                processData : false,
                success : function(data){
                msg = $.parseJSON(data);
                console.log(msg);
                if (msg.message == "success") {
                    window.location.href = "<?=base_url('loginvendor')?>";
                }else if (msg.message == "user not found") {
                    $('.alert').removeAttr('style');
                    $('.alert').html("User tidak ditemukan");
                    setTimeout(function(){
                    $('.alert').css("display","none");
                    },3000);
                }else if (msg.message == "akun tidak aktif") {
                    $('.alert').removeAttr('style');
                    $('.alert').html("Akun Tidak Aktif");
                    setTimeout(function(){
                    $('.alert').css("display","none");
                    },3000);
                }else if (msg.message=="wrong password") {
                    $('.alert').removeAttr('style');
                    $('.alert').html("Password/Username Anda salah");
                    setTimeout(function(){
                    $('.alert').css("display","none");
                    },3000);
                }
                }
            });
            });
            
        });
        </script>
    </body>


</html>