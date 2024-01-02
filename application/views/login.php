<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('dist/css/sweetalert2.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('dist/css/adminlte.min.css') ?>">
    <link rel="favicon icon" href="<?= base_url('dist/img/icon.png') ?>">
    <title><?= $judul?></title>
    <script src="<?= base_url('plugins/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('dist/js/sweetalert.min.js') ?>"></script>
    <script src="<?= base_url('dist/js/adminlte.min.js') ?>"></script>
    <style>
        * {
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
            background: url(<?= base_url('dist/img/bg.jpg') ?>);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            width: 100%;
            height: 80vh;
        }

        .form {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            margin-top: 15vh;
        }

        .leftside {
            width: 50%;
            text-align: center;
            align-items: center;
        }

        .leftside img {
            width: 50%;
            height: auto;
        }

        .leftside h1 {
            font-size: 50px;
            color: white;
            padding: 20px 0px;
        }

        .rightside {
            padding-top: 40px;
            width: 50%;
            height: auto;
        }

        h2 {
            text-align: center;
            color: #002793;
            font-size: 45px;
        }

        .input-container {
            width: 350px;
            height: auto;
            margin: auto;
        }

        .input {
            width: 100%;
            margin-top: 25px;
            height: 50px;
            padding: 10px 20px;
            background-color: #dedde4;
            align-items: center;
            border-radius: 10px;
        }

        input {
            background: transparent;
            border: none;
            outline: none;
            width: 70%;
            line-height: 30px;
            font-size: 15px;
            border-radius: 10px;
        }

        :hover[type=submit] {
            background-color: #0000FF;
        }

        i {
            opacity: 50%;
        }

        .login {
            align-items: center;
            text-align: center;
            width: 100%;
            height: 50px;
            margin-top: 20px;
            background-color: #1E90FF;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }

        p {
            text-align: center;
            padding: 10px 0px;
            font-size: 20px;
            margin: 10px 0px;
        }

        .social-items {
            margin: auto;
            width: 100%;
            text-align: center;
        }

        .social-items a {
            display: inline-block;
            text-decoration: none;
            height: 40px;
            width: 40px;
            border: 1px solid #002793;
            margin: 0px 10px;
        }

        a i {
            color: #002793;
            opacity: 100%;
        }

        a .fa {
            line-height: 40px;
        }

        h6 {
            text-align: center;
            margin: 60px 0px;
            font-size: 18px;
            font-weight: normal;
        }

        span {
            text-decoration: underline;
            font-size: 20px;
            cursor: pointer;
        }

        a:hover i {
            color: red;
        }


        /*------------Responsive--------------*/
        @media screen and (max-width:768px) {
            .leftside {
                display: none;
            }

            .rightside {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="form">
        <div class="leftside">
            <img src="<?= base_url('dist/img/icon.png') ?>">
            <h1>WELCOME BACK</h1>
        </div>
        <div class="rightside">
            <h2>LOGIN</h2>
            <div class="input-container">
                <form action="" method="post">
                    <div class="input">
                        <i class="fa fa-user"></i>
                        <input type="text" name="username" id="username" placeholder="Username" autofocus="autofocus">
                    </div>
                    <div class="input">
                        <i class="fa fa-lock"></i>
                        <input type="password" name="password" id="password" placeholder="Password">
                    </div>
                    <input type="submit" class="login" value="LOGIN">
                </form>
            </div>
        </div>
    </div>
    <?php if ($this->session->flashdata('error')) : ?>
        <script>
            swal({
                icon: 'error',
                title: 'Ooppss...!!!',
                text: '<?= $this->session->flashdata('error') ?>',
                timer: 2000,
            });
        </script>
    <?php endif; ?>
</body>
</html>