<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $this->config->config["pageTitle"] ?></title>
    <!-- bootstrap 5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <!-- BOX ICONS CSS-->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #0C2132;
        }

        a {
            color: #0C2132 !important;
        }

        form {
            width: 360px;
            height: 470px;
            top: calc(50vh - 235px);
            position: relative;
        }

        .form-control {
            border-width: 0px 0px 1px 0px;
            border-radius: 0px !important;
        }

        input[type='submit'] {
            width: 40%;
            background-color: #0C2132 !important;
            color: white !important;
            border-width: 0px;
        }

        input[type='submit']:hover {
            background-color: #508599 !important;
            color: white !important;
        }

        .form-group {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <?php
    if ($this->session->flashdata('message')) {
        echo '
            <div class="alert alert-success">
                ' . $this->session->flashdata("message") . '
            </div>
            ';
    }
    ?>
    <form class="bg-white p-3 m-auto" method="post" action="<?php echo base_url(); ?>login/validation">
        <div class="text-center">
            <img src="<?php echo base_url('/assets/'); ?>imgs/logo-vertical-t.png" alt="List Genie Data Portal Logo" width="160" height="auto" style="margin: auto;">
        </div>
        <div class="form-group">
            <label>Enter Email Address</label>
            <input type="text" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
            <span class="text-danger"><?php echo form_error('user_email'); ?></span>
        </div>
        <div class="form-group">
            <label>Enter Password</label>
            <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
            <span class="text-danger"><?php echo form_error('user_password'); ?></span>
        </div>
        <div class="form-group" style="display: flex; justify-content: space-evenly;">
            <input type="submit" name="login" value="Login" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url(); ?>register">Register</a>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>