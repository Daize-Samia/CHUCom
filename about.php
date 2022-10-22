<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>


<?php 
           $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
               $row = mysqli_fetch_assoc($sql);
             }
             $sqlEntreprise = mysqli_query($conn, "SELECT * FROM departement WHERE idepartement = '{$row['idepartement']}'");
            if(mysqli_num_rows($sqlEntreprise) > 0){
              $rowEnt = mysqli_fetch_assoc($sqlEntreprise);
            }
          ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CHUCom</title>
        <link rel="icon" type="image/png" href="imagesProjet/la-communication.png"/>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.php"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <img style="width:15%;"src="imagesProjet/Acceuil-logo2.png" alt="">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="home.php">Home</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="articles.php">Articles</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="chatAcceuil.php">Chat</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="utilisateurs.php">utilisateurs</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="taches.php">taches</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="about.php">About</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section about-heading">
            <div class="container">
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="imagesProjet/R.png" alt="..." />
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-4">
                                    <span class="section-heading-upper">Bienvenue</span>
                                    <span class="section-heading-lower"><?php echo $row['fname']. " " . $row['lname'] ?></span>
                                </h2>
                                <p>CHUCom est un site qui a été créé principalement pour fournir un contact direct avec les autres membres de l'association CHU suivant chacun de ses départements. qu'il s'agisse d'un contact direct avec d'autres membres, d'attributions de tâches ou d'une simple lecture d'articles, le CHUCom fournit tout ce dont vous avez besoin pour faciliter votre travail au CHU </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; CHUCom 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="javascript/scripts.js"></script>
    </body>
</html>
