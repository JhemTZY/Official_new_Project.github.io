<!DOCTYPE html>
<html lang="en">
<head>
  
<title>New Project</title>

 
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/login_css/login_all.min.css">
    <link href="<?= base_url() ?>public/assets/login_css/poppins.css" rel="stylesheet">
    <!--Stylesheet-->
    <link href="<?= base_url() ?>public/assets/login_css/login.css" rel="stylesheet">
 
</head>
<?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                       <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif;?>

<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
        <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif;?>
                <form action="<?= base_url('public');?>/login/auth" method="post">
                <h3>Login Here</h3>
                    <div class="mb-3">
                        <label for="InputForEmail" class="form-label">Email address</label>
                        <input type="email" name="email" placeholder="Email or Phone"  id="InputForEmail" value="<?= set_value('email') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForPassword" class="form-label">Password</label>
                        <input type="password" name="password" placeholder="Password" id="InputForPassword">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>


       
    </form>
</body>
</html>
<!-- partial -->
  
</body>
</html>
