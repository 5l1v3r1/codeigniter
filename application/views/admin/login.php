<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Emre Başaran - Nirvana Yazılım">
    <link rel="shortcut icon" href="<?php echo base_url("assets/admin"); ?>/img/logo-fav.png">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/admin"); ?>/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/admin"); ?>/lib/material-design-icons/css/material-design-iconic-font.min.css"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?php echo base_url("assets/admin"); ?>/css/style.css" type="text/css"/>
  </head>
  <body class="be-splash-screen">
    <div class="be-wrapper be-login">
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="splash-container">
            <div class="panel panel-default panel-border-color panel-border-color-primary">
              <div class="panel-heading">
                <img src="<?php echo base_url("assets/admin"); ?>/img/logo-xx.png" alt="logo" width="204" class="logo-img">
                <span class="splash-description">Lütfen yönetici bilgilerinizi giriniz.</span>
              </div>

              <div class="panel-body">
                <form action="<?php echo base_url(); ?>admin/login/login_ol" method="post">
                  <div class="login-form">

                    <div class="form-group">
                      <input id="username" type="text" name="email" placeholder="Kullanıcı Adı" class="form-control">
                    </div>

                    <div class="form-group">
                      <input id="password" name="sifre" type="password" placeholder="Şifre" class="form-control">
                    </div>

                    <div class="form-group row login-submit">
                      <div class="col-xs-12">
                        <button data-dismiss="modal" type="submit" class="btn btn-primary btn-xl">Giriş Yap</button>
                      </div>
                    </div>

                  </div>
                </form>
                
                <?php echo $this->session->flashdata("oturum_uyari"); ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <a href="http://www.emrebasaran.net/" style="display: none;">Emre Başaran</a>

    <script src="<?php echo base_url("assets/admin"); ?>/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/admin"); ?>/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/admin"); ?>/js/main.js" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/admin"); ?>/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){App.init();});
    </script>
  </body>
</html>