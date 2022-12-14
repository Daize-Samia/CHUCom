<?php 
  session_start();
  include_once "php/config.php";
  
?>

<?php


$sql = mysqli_query($conn, "SELECT COUNT(*) AS total_users FROM users");
if(mysqli_num_rows($sql) > 0){
   $row1 = mysqli_fetch_assoc($sql);
 }

 $sql = mysqli_query($conn, "SELECT COUNT(*) AS total_msgs FROM messages");
if(mysqli_num_rows($sql) > 0){
   $row2 = mysqli_fetch_assoc($sql);
 }


 $sql = mysqli_query($conn, "SELECT COUNT(*) AS online_users FROM users WHERE status='Active now'");
if(mysqli_num_rows($sql) > 0){
   $row3 = mysqli_fetch_assoc($sql);
 }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHUCom</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/index.css">
    <!--icon-->
  <link rel="icon" type="image/png" href="imagesProjet/la-communication.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
</head>
<body>
  <div class="background">
    
    <div class="head" >
      <header class="d-flex  justify-content-center container">
        <a href="/" class=" m-1 me-auto">
          <img src="imagesProjet/Acceuil-logo2.png" alt="" width="90%"/>
        </a>
        <div class="d-flex justify-content-center align-items-center">
        <a href="signup.php"><button type="button" class="btn btn-outline-success m-3"> Inscription</button></a>
        <a href="login.php"><button type="button" class="btn btn-outline-info ">Connexion</button></a>
        </div>
      </header>
    </div>
  
          <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
            <div class="carousel-item active">              
                <div class="container col-xxl-8 px-4 py-5">
                  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-lg-6 text-white">
                      <h1>Communication au sein d'une entreprise</h1>
                      <p>Communiquer n???a jamais ??t?? aussi simple. Ordinateurs, smartphones, visio-conf??rences, appels t??l??phoniques??? Les canaux se sont d??multipli??s avec le temps pour faciliter les ??changes ?? distance. C???est alors devenu un enjeu cons??quent pour une entreprise de bien communiquer, que ce soit au bureau ou ?? distance. A quel point choisir les bons canaux est-il d??terminant pour l???organisation au sein de celle-ci ?</p>
                    </div>
                    <div class="col-10 col-sm-8 col-lg-6">
                      <img src="imagesProjet/hero1.svg" style="width: 90%;" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="700" loading="lazy">
                    </div>
                  </div>
                  </div>
              </div>
              <div class="carousel-item">              
                <div class="container col-xxl-8 px-4 py-5">
                  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-lg-6 text-white">
                      <h1>Les diff??rents canaux de communication</h1>
                      <p>Afin de bien communiquer, il est important de bien s??lectionner les diff??rents canaux ?? utiliser entre les membres d???une entreprise. Les premiers sont les canaux directs. Ces canaux repr??sentent toutes les fa??ons de communiquer entre collaborateurs de fa??on ?? r??elle ??.
                        Les r??unions peuvent ??tre organis??es de fa??on hebdomadaire pour d??finir un point de communication dans une ??quipe. Cela facilite les ??changes et permet de mieux se coordonner, si celle-ci est bien men??e. Elle peut ??tre sujet ?? une communication vers le haut, vers le bas, ou bien horizontale.</p>
                    </div>
                    <div class="col-10 col-sm-8 col-lg-6">
                      <img src="imagesProjet/about.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="700" loading="lazy">
                    </div>
                  </div>
                  </div>
              </div>
              
              <div class="carousel-item">              
                <div class="container col-xxl-8 px-4 py-5">
                  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-lg-6 text-white">
                      <h1>Les avantages d???une bonne communication</h1>
                      <p>Faciliter la productivit?? et cr??ativit?? d???une entreprise
                        Utiliser ces diff??rents types et canaux de communication doit pouvoir la faciliter. Cela va grandement avantager la productivit?? au sein d???une entreprise. Plus la communication est rapide et limpide, plus les ??quipes seront efficaces et proactives.
                        Une communication r??ussie facilite les m??thodes de travail et permet de mettre de l???entrain dans le m??tier de chacun. C???est l???un des aspects importants de la satisfaction au travail. Un collaborateur heureux est un collaborateur qui va cr??er, inventer, proposer dans le sens de son entreprise.</p>
                    </div>
                    <div class="col-10 col-sm-8 col-lg-6">
                      <img src="imagesProjet/third-logo.png" style="width: 70%;" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="700" loading="lazy">
                    </div>
                  </div>
                  </div>
              </div>
            </div>
          </div>
        </div>

        <section class="statistique" id ="statistique">
           <h1 class="heading fs-2 mb-5">statistique</h1>
           <div class="box-container">
              <div class="container" id="c">
                <i class="fas fa-users"></i>
                <span class="num" data-val=<?php echo $row1["total_users"]?>>0</span>
                <span class="text">Utilisateurs</span>
              </div>

              <div class="container" id="c">
                <i class="fas fa-comment-dots"></i>
                <span class="num" data-val="<?php echo $row2["total_msgs"]?>">0</span>
                <span class="text">Messages Totale</span>
              </div>

             <div class="container" id="c">
                <i class="fas fa-server"></i>
                <span class="num" data-val=<?php echo $row3["online_users"]?>>0</span>
                <span class="text">Utilisateurs Online</span>
              </div>
           </div>
         </section>
</div>
<footer class="footer text-faded text-center py-4">
    <div class="container"><p class="m-0 small text-light">Copyright &copy; CHUCom 2022</p></div>
</footer>
<script src="javascript/bootstrap.js"></script>
<script src="javascript/count.js"></script>

</body>
</html>
