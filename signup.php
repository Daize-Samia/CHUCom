<!DOCTYPE html>
<html lang="en">
<head>
	<title>Inscription</title>
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
				<div class="achraf-pic-2 " >
					<img src="imagesProjet/home-brands.png" alt="">
				</div>
				<form class="achraf-form" action="php/signup.php" method="POST" enctype="multipart/form-data" autocomplete="off">
					<div class="achraf-logo js-tilt">
					<img src="imagesProjet/LoginLogo.png" alt="">
				</div>
					<span class="achraf-title">
						&nbsp Inscription
					</span>
					

					<!-- probleme dans l'inscription -->

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

                            <?php if(isset($_GET['error4'])){?>
                          <div class="alert alert-danger">
                            <p class="error"> <?php echo $_GET['error4']; ?></p></div>  <?php }?>

                            <?php if(isset($_GET['error5'])){?>
                          <div class="alert alert-danger">
                            <p class="error"> <?php echo $_GET['error5']; ?></p></div>  <?php }?>

                            <?php if(isset($_GET['success'])){?>
                            <div class="alert alert-success">
                            <p class="error"> <?php echo $_GET['success']; ?></p></div>  <?php }?>
					</div>

						<!--fin du probleme-->

                    <div class="wrap-input validate-input">
						<input class="input" type="text" id="lname" name="lname" placeholder="Nom D'utilisateur">
						<span class="focus-achraf"></span>
						<span class="symbol-achraf">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input validate-input">
						<input class="input" type="text" id="fname" name="fname" placeholder="Prénom D'utilisateur">
						<span class="focus-achraf"></span>
						<span class="symbol-achraf">
							<i class="fa fa-user-o" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input" type="text" id="email" name="email" placeholder="Email">
						<span class="focus-achraf"></span>
						<span class="symbol-achraf">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input validate-input" data-validate = "Password is required">
						<input class="input" type="password" id="passrword" name="password" placeholder="Mot de Passe">
						<span class="focus-achraf"></span>
						<span class="symbol-achraf">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input validate-input" >
						<input class="input" type="text" id="departement" name="departement" placeholder="Departement">
						<span class="focus-achraf"></span>
						<span class="symbol-achraf">
							<i class="fa fa-hospital-o" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input validate-input">
						<input class="input" type="text" id="work" name="work" placeholder="Travail">
						<span class="focus-achraf"></span>
						<span class="symbol-achraf">
							<i class="fa fa-user-md" aria-hidden="true"></i>
						</span>
					</div>
							<div class="file-upload" name="oui">
                              <input type="file" name="image" id="image"/>
                              <i class="fa fa-arrow-up"></i>
							</div>
					<div class="container-achraf-form-btn">
						<button type="submit" class="achraf-form-btn" id="submit" name="submit" >
							Inscription
						</button>
					</div>

					<div class="text-center p-t-12">
						<br>
						<a class="txt2" href="Login.php">
							Vous avez déjà un compte ?
						</a>
					</div>

					
				</form>
			</div>
		</div>
	</div>
</body>
</html>