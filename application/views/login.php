<?php
// Panggil Class utama Aplikasi
require 'App.php'; 

// Inisiani class
$app = new App(); 

// set login Authentification
if(isset($_POST['cek_login'])) :
	$object = array(
		'user' => $_POST['username'],
		'pass' => $_POST['password']
	);

	$cek_login = $app->authentification( $object['user'], $object['pass'] );
	if( $cek_login == FALSE ) :
		$message = "Maaf Password dan Username tidak cocok!";
	endif;
endif;
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<title>Login Bitong</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178"  method="post" action="">
					<span class="login100-form-title">
						Selamat Datang
						<br>  <?php echo $app->get_app('company_name'); ?>
					</span>
	<?php echo (isset($message)) ? $message : ''; ?>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="username" placeholder="Username" />
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="password" placeholder="Password"  />
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-30 p-b-23">
						
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" name="cek_login" value="sign in" class="login100-form-btn">
							
						</input>
					</div>

					<div class="flex-col-c p-t-80 p-b-40">
						
					</div>
				</form>
			</div>
		</div>
	</div>
	
	    <?php
    //you login codes following
      
    $login = date('Y-m-d H:i:s');
     
    // and save to db to the field login_tym
     
    ?>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>