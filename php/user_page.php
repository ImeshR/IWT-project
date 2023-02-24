<?php

@include 'config.php';

session_start();

if (isset($_SESSION['loggedin']) != true) {
    header('location:login.php');
}

if (!isset($_SESSION['user_name'])) {
    header('location:login.php');
}

if (!isset($_SESSION['user_nic'])) {
    header('location:login.php');
}

$sql = "select * from reservation WHERE nic like $_SESSION[user_nic]";
$result = mysqli_query($conn, $sql);
//get row
$fetchrow = mysqli_fetch_assoc($result);

//reservation update
if(isset($_POST['submit'])){
        
    
    $update = "UPDATE reservation SET f_name='$_POST[name]', nic='$_POST[nic]', mobile='$_POST[mobile]', date='$_POST[date]', time='$_POST[time]', pack_type='$_POST[p_type]', food_type='$_POST[f_type]', fee='$_POST[fee]' WHERE nic='$_SESSION[user_nic]'";
    
    if(mysqli_query($conn, $update)){
        header("refresh:1; url=user_page.php");
    }
};

?>
<!DOCTYPE html>
<html>

<head>
    <title>User</title>
    <link rel="stylesheet" href="../css/user_page.css">
    <link rel="stylesheet" href="../css/reservation.css">
</head>

<body>

    <div class="header">
        <div class="navbar">
            <img class="logo" src="../images/My project.png">
            <div class="account">
                <ul>
                    <li><a class="login" href="logout.php"><img src="../images/logout.png">Log Out</a></li>
                </ul>
            </div>
        </div>
        <div class="menu-container">
            <ul>
                <li><a href="../html/home.html">Home</a></li>
                <li><a href="../php/gallery.php">Gallery</a></li>
                <li><a href="../php/packages.php">Packages</a></li>
                <li><a href="../php/aboutus.php">About Us</a></li>
                <li><a href="../php//contact.php">Contact Us</a></li>
            </ul>
        </div>
    </div>

    <div class="card">
        <div class="upper-card">
            <div class="image-container">
                <img src="../images/account.png">
            </div>

        </div>
        <div class="lower-card">
            <div class="greeting">
                <h3>Hi! <span>
                        <?php echo$_SESSION['user_name'] ?>
                    </span></h3>
            </div>
            <div>
                <p>Name : <span>
                        <?php echo$_SESSION['user_name'] ?>
                    </span><br>
                    Email : <span>
                        <?php echo $_SESSION['user_email'] ?>
                    </span><br>
                    Contact No. : <span>0774991084</span>
                </p>
            </div>
            <div class="button">
                <a href="#" class="btn1" onclick="openPopup()">My reservation</a>
                <a href="#" class="btn2" onclick="openPopup2()">Reservation Upadate</a>
            </div>
        </div>
    </div>

    <!--------------------------------------------Reservation form------------------------------------------------------------>

    <div class="container">
        <div class="popup-form" id="popup">
            <form>
                <p>Reservation Information</p>
                <div class="input-group">
                    <label>Customer Name:</label>
                    <input type="text" value="<?php echo $fetchrow['f_name'] ?>" readonly>    <!--Full name -->
                </div>
                <div class="input-group">
                    <label>Contact Number:</label>
                    <input type="text" placeholder="Mobile number" value="<?php echo $fetchrow['mobile'] ?>" readonly>
                </div>
                <div class="input-group">
                    <label>NIC:</label>
                    <input type="text" placeholder="NIC" value="<?php echo $fetchrow['nic'] ?>" readonly>
                </div>
                <div class="input-group">
                    <label>Reserved Date:</label>
                    <input type="date" value="<?php echo $fetchrow['date'] ?>" readonly>
                </div>
                <div class="input-group">
                    <label>Reserved Time:</label>
                    <input type="time" value="<?php echo $fetchrow['time'] ?>" readonly>
                </div>
                <div class="input-group">
                    <label>Choosed Package Type:</label>
                    <input type="text" name="pack_type" value="<?php echo $fetchrow['pack_type'] ?>" readonly>
                </div>
                <div class="input-group">
                    <label>Choosed Food Package:</label>
                    <input type="text" name="food_type" value="<?php echo $fetchrow['food_type'] ?>" readonly>
                </div>
                <div class="input-group">
                    <label>Advance fee:</label>
                    <input type="text" placeholder="Advance fee" value="<?php echo $fetchrow['fee'] ?>" readonly>
                </div>
                <div class="input-group">
                    <button name="submit" onclick="closePopup()" class="res-btn">OK</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        let popup = document.getElementById("popup");

        function openPopup() {

            popup.classList.add("open-popup");
        }
        function closePopup() {

            popup.classList.remove("open-popup");
        }
    </script>
<!-------------------------------------------------Update form--------------------------------------------------->
    <div class="container">
        <div class="popup-form2" id="popup2">
            <form method="POST">
                <p>Reservation Information</p>
                <div class="input-group">
                    <label>Customer Name:</label>
                    <input type="text" value="<?php echo $fetchrow['f_name'] ?>" name="name">  <!--Full name -->
                </div>
                <div class="input-group">
                    <label>Contact Number:</label>
                    <input type="text" placeholder="Mobile number" value="<?php echo $fetchrow['mobile'] ?>" name="mobile" >
                </div>
                <div class="input-group">
                    <label>NIC:</label>
                    <input type="text" placeholder="NIC" value="<?php echo $fetchrow['nic'] ?>" name="nic">
                </div>
                <div class="input-group">
                    <label>Reserved Date:</label>
                    <input type="date" value="<?php echo $fetchrow['date'] ?>"  name="date">
                </div>
                <div class="input-group">
                    <label>Reserved Time:</label>
                    <input type="time" value="<?php echo $fetchrow['time'] ?>" name="time">
                </div>
                <label>Package Type:</label>
                <select name="p_type" >
                    <option value="pack1">pck1</option>
                    <option value="pack2">pck2</option>
                    <option value="pack3">pck3</option>
                    <option value="pack4">pck4</option>
                
                </select>
                <label><br>Food Package Type:</label>
                <select name="f_type">
                    <option value="food1">pck1</option>
                    <option value="food2">pck2</option>
                    <option value="food3">pck3</option>
                    <option value="food4">pck4</option>
                </select>
                <div class="input-group">
                    <label>Advance fee:</label>
                    <input type="text" placeholder="Advance fee" value="<?php echo $fetchrow['fee'] ?>" name="fee">
                </div>
                <div class="input-group">
                    <button name="submit" class="up-btn"  onclick="closePopup()">OK</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        let popup2 = document.getElementById("popup2");

        function openPopup2() {

            popup2.classList.add("open-popup");
        }
        function closePopup2() {

            popup2.classList.remove("open-popup");
        }
    </script>
    <!--***************************************************************************************************-->
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
</body>

</html>