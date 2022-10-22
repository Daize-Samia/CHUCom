<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: Home.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Connexion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="imagesProjet/la-communication.png"/>
    <!--Les icons à utiliser : lettre et lock -->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-achraf">
			<div class="wrap-achraf">
				<div class="achraf-pic js-tilt" data-tilt>
					<img src="imagesProjet/loginImage.png" alt="">
				</div>
				<form class="achraf-form validate-form" action="php/login.php" method="post">
					<div class="achraf-logo js-tilt">
					<img src="imagesProjet/LoginLogo.png" alt="">
				</div>
					<span class="achraf-title">
						&nbsp Connexion
					</span>
					<!--Probleme detecter -->
					<div class="form-outline mb-4">
                         <?php if(isset($_GET['error1'])){?>
                          <div class="alert alert-danger">
                        <p class="error"> <?php echo $_GET['error1']; ?></p></div>  <?php }?>
                        <?php if(isset($_GET['error2'])){?>
                          <div class="alert alert-danger">
                        <p class="error"> <?php echo $_GET['error2']; ?></p></div>  <?php }?>
                        <?php if(isset($_GET['error3'])){?>
                          <div class="alert alert-danger">
                        <p class="error"> <?php echo $_GET['error3']; ?></p></div>  <?php }?>
				    </div>

					<div class="wrap-input validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input" type="text" id="email" name="email" placeholder="Email">
						<span class="focus-achraf"></span>
						<span class="symbol-achraf">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input validate-input" data-validate = "Password is required">
						<input class="input" type="password" id="password" name="password" placeholder="Mot De Passe">
						<span class="focus-achraf"></span>
						<span class="symbol-achraf">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-achraf-form-btn">
						<button class="achraf-form-btn" name="login" id="login">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<br>
						<a class="txt2" href="signup.php">
							Mot de passe Oublier ?
						</a>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	
	



</body>
</html>