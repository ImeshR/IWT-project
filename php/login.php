<?php
    @include 'config.php';

    session_start();

    if(isset($_POST['submit'])){
        
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = md5($_POST['password']);


        $select = " SELECT * FROM user_form  WHERE email = '$email' && password = '$pass' ";

        $result = mysqli_query($conn, $select);

        if(mysqli_num_rows($result) > 0){

            $row = mysqli_fetch_array($result);
            if($row['user_type'] == 'admin'){

                $_SESSION['admin_name'] = $row['name'];
                header('location:admin_page.php');

            }elseif($row['user_type'] == 'user'){

                $_SESSION['user_name'] = $row['name'];
                $_SESSION['user_email'] = $row['email'];
                $_SESSION['user_nic'] = $row['nic'];
                $_SESSION['loggedin'] = true;
                header('location:../html/home.html');
            }
        }else{
            $error[] = 'incorrect email or password!';
        }
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/home.css">

    <title>Login</title>
</head>
<body>
    <div class="navbar">
        <img src="../images/My project.png">
    </div>
    <div class="container">
        <form action="" class="login-mail" method="POST">
            <p class="login-text" style="font-size: 2em; font-weight:800;">Login</p>

            <?php
             if(isset($error)){
                 foreach($error as $error){
                     echo '<span class="error-msg">'.$error.'</span>';
                 };
             };
            ?>

            <div class="input-group">
                    <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="input-group">
                    <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a></p>
        </form>

    </div>
    <div class="footer">
             <div class="footer1">
                 <ul>
                     <li><a href="#">Privacy&Policy</a></li>
                     <li><a href="#">Trem & Condition</a></li>
                 </ul>
             </div>  
             <div class="footer2">
                 <ul>
                    <li><a href="#"><img src="../images/instagram.png">Instagram</a></li>
                    <li><a href="#"><img src="../images/facebook.png">Facebook</a></li>
                    <li><a href="#"><img src="../images/tripadvisor.png">TripAdvisor</a></li>
                 </ul>
             </div>
            </div>
    </div>    
</body>
</html>