<html>

<head>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/myalert.js"></script>
    <style>
        * {
            font-family: "Open Sans", sans-serif !important;
        }

        /* Login */
        .login-row {
            display: flex;
            justify-content: center !important;
            align-items: center !important;
        }

        .login-form {
            width: 100%;
            margin-top: 20px;
            position: fixed;
            justify-content: center !important;
            align-items: center;
            display: flex;
            /* margin-left: 200px; */
        }

        .card {
            padding: 50px;
            width: 50%;
            margin-top: 100px;
            margin-left: 20em;
        }

        .card h3 {
            margin-bottom: -5px;
            font-size: 16px;
        }

        .card h1 {
            font-weight: bold;
            margin-bottom: 20px;
        }

        .card p {

            color: #777;
            font-size: 14px;
        }

        .login-btn {
            background-color: #5e3360 !important;
            border: 0;
        }

        .login-btn:hover {
            background-color: #310b33 !important;
            border: 0;
        }

        .login-left-section {
            background-color: #c7c7c7c7;
            position: fixed;
            margin: 0;
            padding: 50px;
            top: 0;
            left: 0;
            bottom: 0;
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            flex-direction: column;
            background-image: url('assets/images/banners/login-banner-new.jfif');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        @media only screen and (max-width: 600px) {
            .login-left-section {
                display: none !important;
            }

            .login-form {
                width: 100% !important;
                margin-top: 20px !important;
                justify-content: center !important;
                align-items: center !important;
                display: flex !important;
                /* margin-left: 200px; */
            }

            .card {
                padding: 50px !important;
                width: 100% !important;
            }
        }
    </style>
</head>

<body>

    <div class="login-row">
        <div class="col-md-6">
            <form class="login-form container" action="<?php echo base_url('LoginAuth/checking') ?>" method="post">
                <?php
                if ($this->session->flashdata('error')) { ?>

                    <div class="alert alert-danger" role="alert">
                        <?php
                        echo $message = $this->session->flashdata('error');
                        ?>
                    </div>
                <?php }
                ?>
                <div class="card">
                    <h3>Welcome,</h3>
                    <h1>Admin</h1>
                    <p>Enter your Admin ID and password to login</p>
                    <input type="text" name="uname" id="inputname" class="form-control form-group" placeholder="Admin ID" required autofocus>
                    <input type="password" name="password" id="inputPassword" class="form-control form-group" placeholder="Password" required autofocus>
                    <button class="btn btn-lg btn-primary btn-block btn-signin login-btn" type="submit">Login</button>
                </div>
            </form>

        </div>


        <div class="col-md-6 login-left-section">
            <!-- <img src="assets/logo/PantryoLogo.png" /> -->

        </div>
    </div>

    <!-- <div class="w-100 pt-5">
        <div class="d-flex justify-content-center align-items-center">
            <form class="form-signin p-5 m-5 login-form w-50" action="<?php echo base_url('LoginAuth/checking') ?>" method="post">
                <?php
                if ($this->session->flashdata('error')) { ?>

                    <div class="alert alert-danger" role="alert">
                        <?php
                        echo $message = $this->session->flashdata('error');
                        ?>
                    </div>
                <?php }
                ?>

                <h3 class="heading-login">LOGIN</h3>
                <!-- <p class="caption-login"> login</p> -->
    <!-- <input type="text" name="uname" id="inputname" class="form-control form-group" placeholder="Admin ID" required autofocus>
    <input type="password" name="password" id="inputPassword" class="form-control form-group" placeholder="Password" required autofocus>
    <button class="btn btn-lg btn-primary btn-block btn-signin login-btn" type="submit">LOGIN</button> -->
    </form>

    </div>
    </div> -->
</body>

</html>