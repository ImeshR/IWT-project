<?php
    @include'config.php';

    session_start();
    

    if(isset($_POST['submit2'])){

        if (isset($_SESSION['loggedin']) != true){
            header('location:login.php');
        }else{

            $insert = "INSERT INTO  reservation(f_name,nic,mobile,date,time,pack_type,food_type,fee)
             VALUES('$_POST[name]','$_POST[nic]','$_POST[mobile]','$_POST[date]','$_POST[time]','$_POST[p_type]','$_POST[f_type]','$_POST[fee]')";
            mysqli_query($conn, $insert);
            header('location:packages.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/packeges.css">
</head>

<body>
    <div class="header">

        <div class="navbar">
            <img class="logo" src="../images/My project.png">
            <div class="account">
                <ul>
                    <li><a class="login" href="login.php"><img src="../images/login.png">Login</a></li>
                    <li><a class="singup" href="register.php"><img src="../images/Singup.png">Singup</a></li>
                    <li><a class="singup" href="user_page.php"><img src="../images/user.png">My account</a></li>
                </ul>
            </div>
        </div>
        <div class="menu-container">
            <ul>
                <li><a href="../html/home.html">Home</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>
    </div>
    <div class="master">
        <div class="card">

            <!--***********************Indoor**********************-->

            <div class="circle" style="--clr:#21b6e4c2">
                <img src="../images/indoor1.jpg" alt="indoor" class="logo">
            </div>
            <div class="content">
                <h2>Ruby</h2>
                <p>The wedding going to be held at the Hotel Blue Sapphire,
                    this is the package for indoor wedding functions.
                    Ruby would be provided a fabulous indoor hall, a special location for photography,
                    a dancing floor, and bar area as well as a changing room. Photography, Videography, Decorations,
                    DJ, dancing group, Music band, Liquors, Wedding car can be provided beyond the package. The minimum
                    number
                    of pax should be 250 and maximum pax should be 350 and also the number of pax can be arranged within
                    the given range. Package cost would be 7850 LKR within the range of 250 - 300 for each pax and 8550
                    LKR
                    within the range of 300 - 350 for each pax. Honeymoon room and a pool party will be arranged for
                    free of cost.
                    Day time reservations from 8.00 am – 3.00pm and night time reservation 5.30pm – 1.00am.
                </p>
                <button onclick="openPopupt1()">See more</button>
            </div>
        </div>

        <!--***********************Out door**********************-->
        <div class="card">

            <div class="circle" style="--clr:#999eacc2">
                <img src="../images/Outdoor.jpg" alt="outdoor" class="logo">
            </div>
            <div class="content">
                <h2>Amber</h2>
                <p>This package is special for outdoor functions.
                    The minimum number of pax should be 200 and maximum pax would be 300 and also the number
                    of pax can be arranged within the given range. The package includes the pool,
                    part of the garden, a bar, a room and the dancing floor as well. Package cost would
                    be 6150 within the range of 200 - 250 for each pax and 5650 within the range
                    of 250 - 300 for each pax. Photography, Videography, Decorations, DJ, dancing group,
                    Music band, Liquors, Wedding car can be provided beyond the package. Honey moon room for 2 days
                    and a night party is free of charge. Day time reservations from 7.00 am – 1.00pm and
                    night time reservation 5.30pm – 11.00pm..</p>

                <button onclick="openPopupt2()">See more</button>

            </div>
        </div>

    </div>
    <!--***********************Roof top**********************-->

    <div class="junior">
        <div class="card">

            <div class="circle" style="--clr:#e62790c2">

                <img src="../images/rooftop.jpg" alt="rooftop" class="logo">
            </div>
            <div class="content">
                <h2>Cristal</h2>
                <p> Roof top of the hotel is the
                    most deserved package for weddings who like to experience the view of galle.
                    The package has added the roof top pool area, bar, and dancing floor as well as
                    a changing room. The minimum number of pax should be 150 and maximum pax should
                    be 250 and also the number of pax can be arranged within the given range.
                    Package cost would be 5550 LKR within the range of 150 - 200 for each pax and 4750 LKR
                    within the range of 200 - 250 for each pax. Photography, Videography, Decorations, DJ,
                    dancing group, Music band, Liquors, Wedding car can be provided beyond the package.
                    Honeymoon room for 2 days and a special night party is free to the couple.
                    Day time reservations from 8.00 am – 3.00pm and night time reservation 5.30pm – 1.00am..</p>

                <button onclick="openPopupt3()">See more</button>
            </div>

        </div>
        <!--***********************Sea side**********************-->
        <div class="card">

            <div class="circle" style="--clr:#1ab68fc2">
                <img src="../images/seaside.jpg" alt="seaside" class="logo">
            </div>
            <div class="content">
                <h2>Marble</h2>
                <p>To the couples who would like to get their wedding at the sea side this is the package for you.
                    The location is consisting of beautiful view of the sea, Light decorations, A stage and A beautiful
                    flowers spot and a room. The minimum number of pax should be 100 and maximum pax would be 200 and
                    also the number of pax can be arranged within the given range. Package cost should be 4850 LKR
                    within the range of 100 - 150 for each pax and 4350 LKR within the range of 150 - 200 for each pax.
                    Photography, Videography, Decorations, DJ, dancing group, Music band, Liquors, Wedding car
                    can be provided beyond the package. Special boat safari for newly married couple and honeymoon room
                    for 2 days are free of charge. Day time reservations from 7.00 am – 12.00pm and night time
                    reservation 5.30pm – 11.00pm.</p>
                <button onclick="openPopupt4()">See more</button>
            </div>
        </div>
    </div>


    <div class="buddy">
        <div class="popup-form2" id="popup2">
            <form method="POST">
                <p>Reservation Information</p>
                <div class="input-group">
                    <label>Customer Name:</label>
                    <input type="text" value="hapana" name="name">
                    <!--Full name -->
                </div>
                <div class="input-group">
                    <label>Contact Number:</label>
                    <input type="text" placeholder="Mobile number" value="119" name="mobile">
                </div>
                <div class="input-group">
                    <label>NIC:</label>
                    <input type="text" placeholder="NIC" value="123456789" name="nic">
                </div>
                <div class="input-group">
                    <label>Reserved Date:</label>
                    <input type="date" value="2022/05/18" name="date">
                </div>
                <div class="input-group">
                    <label>Reserved Time:</label>
                    <input type="time" value="12:00" name="time">
                </div>
                <label>Package Type:</label>
                <select name="p_type">
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
                    <input type="text" placeholder="Advance fee" value="100,000" name="fee">
                </div>
                <div class="input-group">
                    <button name="submit2" class="up-btn" onclick="closePopup()">Submit</button>
                </div>
            </form>
        </div>
        
        <!--*************************************1ST********************************************************-->
        <div class="container">
            <div class="part2" id="test">
                <p>
                    <span class="data"> First course<br></span>
                    <span class="det">vegetable/mushroom soup, potato wedges, garlic bread, vegetable salad</span>

                    <span class="data"><br>Main course<br></span>
                    <span class="det">Egg/chicken/vegetable fried rice, biriyani, mix rice, pork/chicken/fish/mutton
                        curry, noodles,
                        pasta, macaroni, salads, vege curry, seafood, cashew curry, spicy foods</span>
                    <span class="data"><br>Desert<br></span>

                    <span class="det"> salad, pudding, cake, sapphire special, fruit plater, oreo desert,
                        italian/chinese/spanish deserts</span>
                    <span class="data"><br>Beverage <br></span>

                    <span class="det">juice, ice coffee, hot coffee, non-alcoholic-beverages, mojito</span>
                    <span class="data"><br>Unlimited bites & soft drinks<br></span>


                    <span class="det">Contact customer care for further information and the complete menu<br><br></span>
                
                        <span class="pckg"><a href="#" onclick="openPopup(),closePopupt1()">Reserve</a></span>
                    
                </p>
                <span class="close"><a href="#" onclick="closePopupt1()"><img src="../images/close.png"></a></span>

            </div>

            <div class="part3" id="test2">
                <p>
                    <span class="data"> First course<br></span>
                    <span class="det">chicken/vegetable/mushroom soup, potato wedges, garlic bread, vegetable salad</span>

                    <span class="data"><br>Main course<br></span>
                    <span class="det">Egg/chicken/vegetable fried rice, biriyani, mix rice, pork/chicken/fish/mutton curry,
                         noodles, pasta, macaroni, salads, vege curry, seafood, cashew curry, spicy foods</span>
                    
                    <span class="data"><br>Desert<br></span>
                    <span class="det">fruit salad, pudding, cake, sapphire special, fruit plater, oreo desert, italian/chinese/spanish
                         deserts</span>
                    <span class="data"><br>Beverage <br></span>

                    <span class="det">fruit juice, ice coffee, hot coffee, non-alcoholic-beverages, mojito</span>
                    <span class="data"><br>Unlimited bites & soft drinks<br></span>


                    <span class="det">Contact customer care for further information and the complete menu<br><br></span>
                    
                    <span class="pckg"><a href="#" onclick="openPopup(),closePopupt1()">Reserve</a></span>
                </p>
                <span class="close"><a href="#" onclick="closePopupt2()"><img src="../images/close.png"></a></span>
            </div>

            <div class="part4" id="test3">
                <p>
                    <span class="data"> First course<br></span>
                    <span class="det">Chicken/mushroom soup, garlic bread, sandwich, potato wedges, vegetable salad</span>

                    <span class="data"><br>Main course<br></span>
                    <span class="det">Egg/chicken/vegetable fried rice, biriyani, mix rice, sapphire kottu, noodles, pasta, 
                        macaroni, mini pizza, seafood, cashew curry </span>
                    <span class="data"><br>Desert<br></span>

                    <span class="det">fruit salad, pudding, fruit plater, oreo desert, caramel</span>
                    <span class="data"><br>Beverage <br></span>

                    <span class="det">ice coffee, hot coffee, mojito, champagne</span>
                    <span class="data"><br>Unlimited bites & soft drinks<br></span>


                    <span class="det">Contact customer care for further information and the complete menu<br><br></span>
                    <span class="pckg"><a href="#" onclick="openPopup(),closePopupt1()">Reserve</a></span>
                </p>
                <span class="close"><a href="#" onclick="closePopupt3()"><img src="../images/close.png"></a></span>
            </div>

            <div class="part5" id="test4">
                <p>
                    <span class="data"> First course<br></span>
                    <span class="det">Chicken/vegetable/mushroom soup, potato wedges, garlic bread, vegetable salad</span>

                    <span class="data"><br>Main course<br></span>
                    <span class="det">Egg/chicken/vegetable fried rice, biriyani, mix rice, pork/chicken/fish/mutton curry, noodles,
                         pasta, macaroni, salads, vege curry, seafood, cashew curry, spicy foods</span>
                    <span class="data"><br>Desert<br></span>

                    <span class="det">fruit salad, pudding, cupcake, sapphire special, muffin, italian/chinese/spanish deserts</span>
                    <span class="data"><br>Beverage <br></span>

                    <span class="det">Ice coffee, non-alcoholic-beverages, mojito, apple juice</span>
                    <span class="data"><br>Unlimited bites & soft drinks<br></span>


                    <span class="det">Contact customer care for further information and the complete menu<br><br></span>
                    <span class="pckg"><a href="#" onclick="openPopup(),closePopupt1()">Reserve</a></span>
                </p>
                <span class="close"><a href="#" onclick="closePopupt4()"><img src="../images/close.png"></a></span>
            </div>
        </div>
      
    </div>


    <!--******************************************  1ST  *********************************************************************-->
    <script>
        let popupt1 = document.getElementById("test");

        function openPopupt1() {

            popupt1.classList.add("open-popupt");
        }
        function closePopupt1() {

            popupt1.classList.remove("open-popupt");
        }
    </script>

    <!--**********************************************  2ND  ***************************************************************-->
    <script>
        let popupt2 = document.getElementById("test2");

        function openPopupt2() {

            popupt2.classList.add("open-popupt2");
        }
        function closePopupt2() {

            popupt2.classList.remove("open-popupt2");
        }
    </script>

    <!--**********************************************  3RD  ***************************************************************-->
    <script>
        let popupt3 = document.getElementById("test3");

        function openPopupt3() {

            popupt3.classList.add("open-popupt3");
        }
        function closePopupt3() {

            popupt3.classList.remove("open-popupt3");
        }
    </script>
    <!--***************************************************   4TH   **********************************************************-->
    <script>
        let popupt4 = document.getElementById("test4");

        function openPopupt4() {

            popupt4.classList.add("open-popupt4");
        }
        function closePopupt4() {

            popupt4.classList.remove("open-popupt4");
        }
    </script>
    <!--*********************************************************************************************************-->
    <script>
        let popup2 = document.getElementById("popup2");

        function openPopup() {

            popup2.classList.add("open-popup");
        }
        function closePopup() {

            popup2.classList.remove("open-popup");
        }
    </script>
    <!--*********************************************************************************************-->

    <div class="footer">
        <div class="footer1">
            <ul>
                <li><a href="#">Privacy & Policy</a></li>
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