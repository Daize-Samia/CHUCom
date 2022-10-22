<?php
    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $work = mysqli_real_escape_string($conn, $_POST['work']);
    $entreprise = mysqli_real_escape_string($conn, $_POST['departement']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password) && !empty($work)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){
                header("Location: ../signup.php?error2=Email déjà existe");
            }else{
                $sqlTest = mysqli_query($conn,"SELECT * from departement WHERE nomdepartement = '{$entreprise}' ");
                if(mysqli_num_rows($sqlTest) > 0){
                    $rowTest = mysqli_fetch_assoc($sqlTest);
                    $idepartement = $rowTest['idepartement'];
                    $state = "no";
                }else{
                    $insert = mysqli_query($conn, "INSERT INTO departement (idepartement, nomdepartement) VALUES ('', '{$entreprise}')");
                    $sql = mysqli_query($conn,"SELECT * from departement WHERE nomdepartement = '{$entreprise}' ");
                    if(mysqli_num_rows($sql) > 0){
                        $row = mysqli_fetch_assoc($sql);
                      }
                    $idepartement = $row['idepartement'];
                    $state = "admin";
                }
                    if(isset($_FILES['image'])){
                        $img_name = $_FILES['image']['name'];
                        $img_type = $_FILES['image']['type'];
                        $tmp_name = $_FILES['image']['tmp_name'];
                        
                        $img_explode = explode('.',$img_name);
                        $img_ext = end($img_explode);
        
                        $extensions = ["jpeg", "png", "jpg"];

                        if(in_array($img_ext, $extensions) === true){
                            $types = ["image/jpeg", "image/jpg", "image/png"];
                            if(in_array($img_type, $types) === true){
                                $time = time();
                                $new_img_name = $time.$img_name;
                                if(move_uploaded_file($tmp_name,"images/".$new_img_name)){
                                    $ran_id = rand(time(), 100000000);
                                    $status = "Active now";
                                    $encrypt_pass = md5($password);
                                    $insert_query = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status,state,work,idepartement)
                                    VALUES ({$ran_id}, '{$fname}','{$lname}', '{$email}', '{$encrypt_pass}', '{$new_img_name}', '{$status}','{$state}','{$work}','{$idepartement}')");
                                    if(mysqli_num_rows($sqlTest) > 0){
                                        header("Location: ../signup.php?error1=Attender la vérification de l'admin");
                                    }else{
                                        if($insert_query){
                                            $select_sql2 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                                            if(mysqli_num_rows($select_sql2) > 0){
                                                $result = mysqli_fetch_assoc($select_sql2);
                                                $_SESSION['unique_id'] = $result['unique_id'];

                                                header("Location: ../signup.php?success=Compte crée avec succés");
                                            }else{
                                                header("Location: ../signup.php?error2=Email déjà existe");
                                            }
                                        }else{
                                            header("Location: ../signup.php?error6=Un probléme est survenue");
                                        }
                                    }
                                }
                            }else{
                                header("Location: ../signup.php?error3=Veuillez choisir une image de type - jpeg, png, jpg");
                            }
                        }else{
                            header("Location: ../signup.php?error3=Veuillez choisir une image de type - jpeg, png, jpg");
                        }
                    }
            }
        }else{
            header("Location: ../signup.php?error4= $email n'est pas une email valide");
        }
    }else{
        header("Location: ../signup.php?error5= Tous les champs sont requis");
    }
?>