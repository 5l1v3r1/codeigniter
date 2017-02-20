<?php if(!$this->session->oturum_kaydi){redirect(base_url()."admin/login");} ?>
<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Emre Başaran - Nirvana Yazılım">
    <link rel="shortcut icon" href="<?php echo base_url("assets/admin"); ?>/img/logo-fav.png">
    <title>Yönetici Paneli | Anasayfa</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/admin"); ?>/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/admin"); ?>/lib/material-design-icons/css/material-design-iconic-font.min.css"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/admin"); ?>/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/admin"); ?>/lib/jqvmap/jqvmap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/admin"); ?>/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/admin"); ?>/lib/datatables/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/admin"); ?>/lib/select2/css/select2.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url("assets/admin"); ?>/css/style.css" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/admin"); ?>/lib/jquery.gritter/css/jquery.gritter.css">

    <script src="<?php echo base_url("assets/admin"); ?>/lib/sweetalert/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/admin"); ?>/lib/sweetalert/sweetalert.css">
    <script src="<?php echo base_url("assets/admin"); ?>/ckeditor/ckeditor.js" type="text/javascript"></script>
</head>

<body>
    <div class="be-wrapper be-fixed-sidebar">
      <nav class="navbar navbar-default navbar-fixed-top be-top-header">
        <div class="container-fluid">
          <div class="navbar-header"><a href="<?php echo base_url("admin"); ?>" class="navbar-brand"></a></div>
          <div class="be-right-navbar">
            <ul class="nav navbar-nav navbar-right be-user-nav">
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="<?php echo base_url("assets/admin"); ?>/img/avatar.png" alt="Avatar"><span class="user-name">Yönetici</span></a>
                <ul role="menu" class="dropdown-menu">
                  <li>
                    <div class="user-info">
                      <div class="user-name">Yönetici</div>
                      <div class="user-position online">Aktif</div>
                    </div>
                  </li>
                  <li><a href="<?php echo base_url("admin/login/cikis"); ?>"><span class="icon mdi mdi-power"></span> Çıkış</a></li>
                </ul>
              </li>
            </ul>
            <div class="page-title"><span># Giriş</span></div>
            <ul class="nav navbar-nav navbar-right be-icons-nav">

              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon mdi mdi-notifications"></span><span class="indicator"></span></a>
                <ul class="dropdown-menu be-notifications">
                  <li>
                    <div class="title">Bildirimler<span class="badge">1</span></div>
                    <div class="list">
                      <div class="be-scroller">
                        <div class="content">
                          <ul>
                            <li class="notification notification-unread"><a href="#">
                                <div class="image"><img src="<?php echo base_url("assets/admin"); ?>/img/avatar.png" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">Versiyon Güncellemesi v2.0</span> <br>Yeni güncelleme aktifleştirildi.</div><span class="date"></span>
                                </div></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon mdi mdi-apps"></span></a>
                <ul class="dropdown-menu be-connections">
                  <li>
                    <div class="list">
                      <div class="content">
                        <div class="row">

                          <div class="col-xs-4">
                            <a href="<?php echo base_url("admin/seo"); ?>" class="connection-item"><img src="<?php echo base_url("assets/admin"); ?>/img/slack.png" alt="Github"><span>Seo Ayarları</span></a>
                          </div>

                          <div class="col-xs-4">
                            <a href="<?php echo base_url("admin/site"); ?>" class="connection-item"><img src="<?php echo base_url("assets/admin"); ?>/img/bitbucket.png" alt="Github"><span>Site Ayarları</span></a>
                          </div>

                          <div class="col-xs-4">
                            <a target="_blank" href="<?php echo base_url(); ?>" class="connection-item"><img src="<?php echo base_url("assets/admin"); ?>/img/logo-symbol.png" alt="Github"><span>Siteyi Aç</span></a>
                          </div>

                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      
      <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a href="<?php echo base_url("admin"); ?>" class="left-sidebar-toggle"># Giriş</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">

                  <li class="divider">MENÜ</li>

                  <li class="active">
                    <a href="<?php echo base_url("admin"); ?>"><i class="icon mdi mdi-home"></i><span>Giriş</span></a>
                  </li>

                  <li class="parent">
                    <a href="<?php echo base_url(); ?>admin/sablon">
                      <i class="icon mdi mdi-assignment-account"></i><span>Şablon</span>
                    </a>
                    <ul class="sub-menu">
                      <li><a href="<?php echo base_url(); ?>admin/sablon/ekle">Şablon Ekle</a></li>
                      <li><a href="<?php echo base_url(); ?>admin/sablon">Şablonlar</a></li>
                    </ul>
                  </li>


                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>