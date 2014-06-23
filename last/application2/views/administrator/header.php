<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url().'assets/admin/theme/'; ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url().'assets/admin/theme/'; ?>css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url().'assets/admin/theme/'; ?>css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url().'assets/admin/theme/'; ?>css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap time Picker -->
        <link href="<?php echo base_url().'assets/admin/theme/'; ?>css/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>
        <!-- datetime picker -->
        <link href="<?php echo base_url().'assets/admin/theme/'; ?>css/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

         <!-- jQuery 2.0.2 -->
        <script src="<?php echo base_url().'assets/admin/theme/'; ?>js/jquery-2.0.2.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo base_url().'assets/admin/theme/'; ?>js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url().'assets/admin/theme/'; ?>js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url().'assets/admin/theme/'; ?>js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- CK Editor -->
        <script src="<?php echo base_url().'assets/admin/theme/'; ?>js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
        
        <!-- datetimepicker -->
        <script src="<?php echo base_url().'assets/admin/theme/'; ?>js/plugins/momentjs/moment.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/admin/theme/'; ?>js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <!-- bootstrap time picker -->
        <script src="<?php echo base_url().'assets/admin/theme/'; ?>js/plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <!-- TinyMCE -->
        <script type="text/javascript" src="<?php echo base_url().'assets/admin/theme/'; ?>js/plugins/tinymce/tinymce.min.js"></script>
        <script type="text/javascript">
           tinymce.init({
            selector: "#editor1",
            theme: "modern",
            subfolder:"",
            plugins: [
                 "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                 "searchreplace wordcount visualblocks visualchars code insertdatetime media nonbreaking",
                 "table contextmenu directionality emoticons paste textcolor filemanager"
           ],
           image_advtab: true,
           toolbar: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect forecolor backcolor | link unlink anchor | image media | print preview code"
         }); 
        </script>
        
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="<?php echo base_url().'administrator/'; ?>" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <img src="<?php echo base_url().'assets/admin/theme/'; ?>img/anpanel.png" alt="">
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="<?php echo base_url().'administrator/logout/'.$this->session->userdata('admin').'/'.$this->session->userdata('userid'); ?>">Sign Out</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>