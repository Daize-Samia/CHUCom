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
        <main id="main">
    <main class="page">
    <section class="inner-page">
    <?php
      if($row['state'] == "admin"){
        include_once "php/tabAtt.php";
      }
    ?>
   
    <table class="table align-middle  bg-white">
  <thead class="bg-dark text-white">
    <tr>
      <th>Nom</th>
      <th>Travaille</th>
      <th>Statut</th>
    </tr>
  </thead>
  <tbody id="tableUtilisateur" >
  </tbody>
</table>
    </section> 
  </main>
  

  </main><!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="javascript/bootstrap.bundle.min.js"></script>


  <!-- Template Main JS File -->
  <script src="javascript/forUtilisateurs.js"></script>
  <script src="javascript/YesOrNo.js"></script>
  <script src="javascript/main.js"></script>
  <script src="javascript/scripts.js"></script>
    </body>
</html>
