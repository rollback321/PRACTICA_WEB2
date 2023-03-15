<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <!-- Google Font: Source Sans Pro -->
	  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url()?>plugins/fontawesome-free/css/all.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?= base_url()?>adminLTE_plantillas/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	
	  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url()?>adminLTE_plantillas/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url()?>adminLTE_plantillas/dist/css/stylelogin.css">
	<!-- Alertify -->
	<link rel="stylesheet" href="<?= base_url()?>plugins/alertify/css/alertify.min.css">

  <link rel="stylesheet" href="<?= base_url()?>adminLTE_plantillas/dist/css/adminlte.min.css">

    <meta name="viewport" >
	<!-- /.login-logo -->
	
    <title>Document</title>
</head>

<script src="<?= base_url()?>adminLTE_plantillas/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url()?>adminLTE_plantillas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url()?>adminLTE_plantillas/dist/js/adminlte.min.js"></script>

<body class="hold-transition login-page">
<body class="hold-transition login-page">
	<div class="img-left d-none d-md-flex"></div>
	<div class="login-box">  
		<!-- /.login-logo -->
		<div class="card card-outline card-primary">
			<div class="text-center display-4 logous pt-5">
				<i class="fas fa-user-lock"></i>
			</div> 
			<div class="card-header text-center">
				<h2 class="text-center"><b>SISTEMAS</b></h2>
			</div>

<!--begin /** Ventana emergente que aparece durate un corto tiempo al iniciar la interfaz */		 -->
			<div class="text-center display-4" id="load_register" >
				<i class="fas fa-spinner fa-spin"></i> <br> IIIIniciando Sesion...                 
			</div>
<!--end /** Ventana emergente que aparece durate un corto tiempo al iniciar la interfaz */		 -->	


			<div class="card-body">
				<p class="login-box-msg">Inicio de Sesion</p>

				<form class="form-box px-3" id="formLogin">
					<div class="form-input">
						<span><i class="fas fa-user"></i></span>
						<input type="text" name="name" id="usuario" placeholder="Usuario" tabindex="10" required>
					</div> 
					<div class="form-input">
						<span><i class="fa fa-key"></i></span>
						<input type="password" name="pass" id="password" placeholder="Contraseña" required>
					</div>
					<div class="row">          
						<!-- /.col -->
						<div class="col-12 mb-4">
							<button type="submit" class="btn btn-block ">
								Iniciar Sesion
							</button>
						</div>
						<!-- /.col -->
					</div>
				</form>
				<!-- /.social-auth-links --> 
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>               

	<!-- /.login-box -->

	<!-- jQuery -->
	<script src="<?php echo base_url();?>adminLTE_plantillas/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url();?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url();?>adminLTE_plantillas/dist/js/adminlte.min.js"></script>
	<!-- Alertify -->
	<script src="<?php echo base_url();?>plugins/alertify/alertify.min.js"></script>
	<script>
/**begin Ventana emergente que aparece durate un corto tiempo al iniciar la interfaz */		
		$('#load_register').hide();
/**end Ventana emergente que aparece durate un corto tiempo al iniciar la interfaz */	
	
/** $(#formLogin)....  se ejecuta cuando se click en el boton del formulario  */
		$("#formLogin").submit(function(event) {
			event.preventDefault();

/** var nombreusuario, var password obitnen los datos del formulario  */	
	
			var nombreusuario = $('#usuario').val();
			var password = $('#password').val();

			$.ajax({
				type: 'POST',
				url: "<?= site_url('Home/login') ?>",
				data: {
					name: nombreusuario,
					pass: password
				},
				beforeSend: function() {
					$('#btn').prop('disabled', true);
					$('#formLogin').hide();
					$('#load_register').show();
				},
				success: function(json) {
					if (json == 'Login Correcto') {
						window.location.replace("<?= base_url("C_Libros") ?>");  //llamando al controlador
					} else {
						alertify.alert('SISCO', json, function() {
							alertify.success('Vuelve a intentarlo');
						});
						$('#load_register').hide();
						$('#formLogin').show();
					}

					return false;
				},
				error: function(xhr) {
					alertify.alert('SeguiPRO', 'Existe un Error, vuelta Intentarlo de Nuevo', function() {
						alertify.success('Ok');
					});
					$('#btn').prop('disabled', false);

					$('#load_register').hide();
					$('#formLogin').show();
				},
				complete: function() {
					$('#formLogin')[0].reset();
					$('#startLogin').prop('disabled', false);
				},
				dataType: 'html'
			});
			
		});
	</script>

<h1> <?php echo "".route_to("dsa"); ?></h1>


</body>
    





</html>