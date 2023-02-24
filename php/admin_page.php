<?php
        @include 'config.php';

        if(isset($_GET['nic'])){

            $nic=$_GET['nic'];
            $delete = mysqli_query($conn,"DELETE FROM 'user_form' WHERE 'nic'='$nic'");
        }
        if(isset($_GET['action']) AND isset($_GET['id'])){

            $nic=$_GET['id'];
            $status =$_GET['action'];

            $update = mysqli_query($conn,"UPDATE reservation SET status='$status' WHERE nic='$nic'");
        }


        $select = "select * from user_form ";
        $query= mysqli_query($conn,$select);

        $select2 = "select R.* , U.email
                    FROM reservation R, user_form U WHERE R.nic = U.nic";
        $query2= mysqli_query($conn,$select2);

        $select3 = "select * from contact";
        $query3 = mysqli_query($conn,$select3);

?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Page</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/usermanage.css">
    <link rel="stylesheet" href="../css/message.css">
    <link rel="stylesheet" href="../css/reserve.css">
</head>

<body>
    <div class="header">
        <div class="navbar">
            <img class="logo" src="../images/logo.png">
        </div>
    </div>

    <div class="leader">
        <div class="menu">
            <ul>
                <li>
                    <a href="home_admin.php">
                        <span class="icon"><img src="../images/home.png" alt=""></span>
                        <span class="title">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#" onclick="openPopup()">
                        <span class="icon"><img src="../images/Auser.png" alt=""></span>
                        <span class="title">User acount Manage</span>
                    </a>
                </li>
                <li>
                    <a href="#" onclick="openPopup2()">
                        <span class="icon"><img src="../images/reservation.png" alt=""></span>
                        <span class="title">reservation</span>
                    </a>
                </li>
                <li>
                    <a href="#" onclick="openPopup3()">
                        <span class="icon"><img src="../images/message.png" alt=""></span>
                        <span class="title">Message</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <span class="icon"><img src="../images/adminlogout.png" alt=""></span>
                        <span class="title">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-----------------------------------------------user Account------------------------------------------------------------------->
    <div class="user_account">
        <div class="container" id="popup">
            <h1>User Account Manage</h1>
            <span><a href="#" onclick="closePopup()"><img src="../images/close.png">Close</a></span>
            <table>
                <tr>
                    <th>User Name</th>
                    <th>email</th>
                    <th>NIC</th>
                    <th>Operation</th>
                </tr>
                <?php 
                    $num = mysqli_num_rows($query);
                    if($num>0){
                        while($result=mysqli_fetch_assoc($query)){
                            echo "
                            <tr>
                                <td>".$result['name']."</td>
                                <td>".$result['email']."</td>
                                <td>".$result['nic']."</td>
                                <td>    
                                    <a href='admin_page.php?id=".$result['nic']."' class='btn'>DELETE</a>
                                </td>
                            </tr>";
                        }
                    }  
                ?>
            </table>
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

    <!-------------------------------------------------Reservation--------------------------------------------------------------------------->

    <div class="reservation">
        <div class="container2" id="popup2">
            <h1>reservation Manage</h1>
            <span><a href="#" onclick="closePopup2()"><img src="../images/close.png">Close</a></span>
            <table>
                <tr>
                    <th>Customer Name</th>
                    <th>NIC</th>
                    <th>Contact No.</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Package Type</th>
                    <th>Food Package</th>
                    <th>Advance</th>
                    <th>Status</th>
                    <th>Decision</th>
                </tr>
                <?php 
                $num = mysqli_num_rows($query2);
                if($num>0){
                    while($result=mysqli_fetch_assoc($query2)){
                        echo "
                        <tr>
                            <td>".$result['f_name']."</td>
                            <td>".$result['nic']."</td>
                            <td>".$result['mobile']."</td>
                            <td>".$result['email']."</td>
                            <td>".$result['date']."</td>
                            <td>".$result['time']."</td>
                            <td>".$result['pack_type']."</td>
                            <td>".$result['food_type']."</td>
                            <td>".$result['fee']."</td>
                            <td>".$result['status']."</td>
                            <td>  
                                <a href='admin_page.php?id=".$result['nic']."&action=ACCEPTED' class='accept'>Accept</a>
                            </td>
                        </tr>";
                    }
                }  
            ?>
            </table>
        </div>
    </div>

    <script>
        let popup2 = document.getElementById("popup2");

        function openPopup2() {

            popup2.classList.add("open-popup2");
        }
        function closePopup2() {

            popup2.classList.remove("open-popup2");
        }
    </script>


    <!-------------------------------------------------massage--------------------------------------------------------------------------->
    <div class="message_account">
        <div class="container3" id="popup3">
            <h1>User Message</h1>
            <span><a href="#" onclick="closePopup3()"><img src="../images/close.png">Close</a></span>
            <table>
                <tr>
                    <th>Cusrtomer Name</th>
                    <th>Cusrtomer Email</th>
                    <th>Customer Mobile No.</th>
                    <th>Massage</th>

                </tr>
                <?php 
                $num = mysqli_num_rows($query3);
                if($num>0){
                    while($result=mysqli_fetch_assoc($query3)){
                        echo "
                        <tr>
                            <td>".$result['first_name'].' '.$result['last_name']."</td>
                            <td>".$result['c_email']."</td>
                            <td>".$result['c_mobile']."</td>
                            <td>".$result['msg']."</td>
                        </tr>";
                    }
                }  
            ?>
            </table>
        </div>
    </div>

    <script>
        let popup3 = document.getElementById("popup3");

        function openPopup3() {

            popup3.classList.add("open-popup3");
        }
        function closePopup3() {

            popup3.classList.remove("open-popup3");
        }

    </script>
    <!----------------------------------------------------------------------------------------------------------------------->
</body>

</html>