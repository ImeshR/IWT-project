<?php
    @include 'config.php'; 

    if(isset($_POST['submit'])){
        
        $name = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $nic = mysqli_real_escape_string($conn, $_POST['nic']);
        $pass = md5($_POST['password']);
        $cpass = md5($_POST['cpassword']);
        $user_type = $_POST['user_type'];

        $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

        $result = mysqli_query($conn, $select);

        if(mysqli_num_rows($result) > 0){

            $error[] = 'user already exist!';
        }else{
            if($pass != $cpass){
                $error[] = 'password not matched!'; 
            }else{
                $insert = "INSERT INTO user_form(name, email, nic, password, user_type) VALUE('$name','$email','$nic','$cpass','$user_type')";
                mysqli_query($conn, $insert);
                header('location:login.php');
            }
        }
    };
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/home.css">

    <title> Register</title>
</head>
<body>
    <div class="navbar">
        <img src="../images/My project.png">
    </div>
    <div class="container">

        <form action="" method="POST" class="login-mail">
            <p class="login-text" style="font-size: 2em; font-weight:800;">Register with Us</p>
            <?php
             if(isset($error)){
                 foreach($error as $error){
                     echo '<span class="error-msg">'.$error.'</span>';
                 };
             };
            ?>
            <div class="input-group">
                    <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-group">
                    <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="input-group">
                    <input type="text" placeholder="NIC" name="nic" required>
            </div>
            <div class="input-group">
                    <input type="Password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                    <input type="Password" placeholder="Confirm Password" name="cpassword" required>
            </div>
            <select name="user_type">
                <option value="user">user</option>
                

            </select>
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Have an account? <a href="login.php">Login Here</a></p>
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
