<html>
    <head>
        <title>Aplikasi Ujian Kampus Bung Hatta</title>
        <link href="<?php echo base_url(); ?>___/css/bootstrap.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>___/css/login.css" rel="stylesheet">
    </head>
    <body>      
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
			
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    ADMIN PANEL
                </div>
				<form action="adm/act_login" method="post" name="fl" id="f_login" onsubmit="return login();">

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form>
                            <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                <input type="text" name="username" class="form-control">
								
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" name="password" class="form-control" i>
								
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" class="button btn btn-outline-primary">LOGIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
	</head>
    <script src="<?php echo base_url(); ?>___/js/jquery-1.11.3.min.js"></script> 
<script type="text/javascript">
	base_url = "<?php echo base_url(); ?>";
	uri_js = "<?php echo $this->config->item('uri_js'); ?>";
</script>
<script src="<?php echo base_url(); ?>___/js/aplikasi.js"></script> 
</html>