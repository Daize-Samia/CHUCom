<?php 
    session_start();
    include_once "config.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if(!empty($email) && !empty($password)){
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND state != 'no'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $user_pass = md5($password);
            $enc_pass = $row['password'];
            if($user_pass === $enc_pass){
                $status = "Active now";
                $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
                if($sql2){
                    $_SESSION['unique_id'] = $row['unique_id'];
                    header("Location: ../home.php");
                }else{
                    echo "Something went wrong. Please try again!";
                }
            }else{
                header("Location: ../login.php?error1=Mot de passe incorrect");
                exit();
            }
        }else{
            header("Location: ../login.php?error2=Email n'existe pas");
            exit();
        }
    }else{
        header("Location: ../login.php?error3=Tout les champs sont requis");
        exit();
    }
?>