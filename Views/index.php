<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>LogIn</title>
        <link href="<?php echo base_url; ?>Assets/Css/styles.css" rel="stylesheet" />
        <script src="<?php echo base_url; ?>Assets/Js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <img src="<?php echo base_url; ?>Assets/Img/LogoENMBPMACHS.png" alt="Logo" class="logo">
                                    <div class="card-body">
                                        <form id="fmrLogin">

                                        <div class="alert alert-danger text-center d-none" id="alerta" role="alert"></div>

                                            <div class="form-group">
                                                <label class="small mb-1" for="user">User</label>
                                                <input class="form-control py-4" id="user" name="user" type="text" placeholder="Enter user name" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="userpass">Password</label>
                                                <input class="form-control py-4" id="userpass" name="userpass" type="password" placeholder="Enter password" />
                                            </div>

                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="">Forgot Password?</a>                                                
                                                <a class="btn btn-primary" type="submit" onclick="fmrLogin(event);">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="<?php echo base_url; ?>Assets/Js/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url; ?>Assets/Js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url; ?>Assets/Js/scripts.js"></script>
        <script>
            const base_url = "<?php echo base_url; ?>";
        </script>
        <script src="<?php echo base_url; ?>Assets/Js/functions.js"></script>
    </body>
</html>
