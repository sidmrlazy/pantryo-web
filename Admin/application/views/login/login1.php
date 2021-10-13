<html>

<head>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/myalert.js"></script>
    <style>
        body,
        html {
            /* background-image: url('https://i.imgur.com/xhiRfL6.jpg'); */
            height: 100%;
            width: 100%;
            background-color: #45b1d9;
        }

        #profile-img {
            height: 180px;
        }

        .h-80 {
            height: 80% !important;
        }

        .left-section {
            background-color: blue;
        }

        .login-form {
            border: 1px solid #c7c7c7c7;
            border-radius: 5px;
            background-color: #fff;
        }

        .heading-login {
            font-family: "Open Sans", sans-serif;
            font-weight: bold;
        }

        .caption-login {
            font-family: "Open Sans", sans-serif;
            font-weight: 500;
            margin-bottom: 30px;
        }

        .login-btn {
            background-color: #458dd9 !important;
            border: 0;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="w-100 pt-5">

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
                <p class="caption-login">Please login</p>
                <input type="text" name="uname" id="inputname" class="form-control form-group" placeholder="Admin ID" required autofocus>
                <input type="password" name="password" id="inputPassword" class="form-control form-group" placeholder="Password" required autofocus>
                <button class="btn btn-lg btn-primary btn-block btn-signin login-btn" type="submit">LOGIN</button>
            </form>

        </div>
    </div>

    <!-- <div class="container h-80">
        <div class="row align-items-center h-100">
            <div class="col-3 mx-auto">
                <div class="text-center">
                    <img id="profile-img" class="rounded-circle profile-img-card" src="https://i.imgur.com/6b6psnA.png" />
                    <p id="profile-name" class="profile-name-card"></p>
                    
                </div>
            </div>
        </div>
    </div> -->
</body>

</html>