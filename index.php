<?php
include'connection.php';
$sql = "select * from restaurants";
$stmt = $conn->prepare($sql);
$stmt->execute();
$all = $stmt->fetchAll();

$sql = "select * from restaurants where type = 1";
$stmt = $conn->prepare($sql);
$stmt->execute();
$fast = $stmt->fetchAll();

$sql = "select * from restaurants where type = 2";
$stmt = $conn->prepare($sql);
$stmt->execute();
$juice= $stmt->fetchAll();

$sql = "select * from restaurants where type = 3";
$stmt = $conn->prepare($sql);
$stmt->execute();
$sweet = $stmt->fetchAll();

$sql = "select * from restaurants where type = 4";
$stmt = $conn->prepare($sql);
$stmt->execute();
$coffee = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="images/TURestaurantslogo1.png"/>
    <title>Home Page</title>
    <style>
        .container{
            width: 300px;
            margin: 20px 20px;
            background: #eee;
            border-radius: 30px;
            box-shadow: 5px 7px 15px #ccc;
            display: inline-block;
        }
        .container img {
            width: 300px;
            height: 300px;
            border-radius: 5px 5px 0 0;
        }
        .content {
        padding: 10px;
        text-align: center;
        }
        
        .content h3 {
            color: #6f9692;
        }
        
        .content p {
            margin: 10px 0px;
            text-align: center;
            font-size: 15px;
            color: #de9a86;
        }
        #fast{
            display: none;
        }
        #juice{
            display: none;
        }
        #sweet{
            display: none;
        }
        #coffee{
            display: none;
        }
        
    </style>
</head>
<body>
    <header>
        <a href="index.php" class="logo"> 
            <img src="images/TURestaurantsLogo2.png" width="180" alt="TU Restaurants logo">
        </a>
        <nav class="navigation">
            <a href="index.php">Home Page</a>
            <a href="#Restaurants">Restaurants</a>
            <a href="AboutUs.html">About Us</a>
            <a href="ContactUs.php">Contact Us</a>
        </nav>
        
    </header>

    <section class="main">
        <div>
            <h2>Don't Waste Your Time.</h2>

            <h4>We gathered all of the restaurants around you.</h4>
            <a href="#Restaurants" class="main-btn">View Restaurants Menus</a>
        </div>
    </section>

    <section id="Restaurants">
                
        <h2>Eat Fresh & Healthy</h2>
        <nav class="Menu">
            <button onclick="aLl()" id="a">All</button>
            <button onclick="fAst()" id="f">Fast Food</button>
            <button onclick="jUice()" id="d">Juices</button>
            <button onclick="sWeet()" id="c">Sweets</button>
            <button onclick="cOffee()" id="h">Coffee</button>
        </nav>
        <div id="all" style="width: 100%;">
        <br>
        <h3>All Restaurants</h3>
        <?php
            foreach($all as $a){
                echo'<div class="container">
                <img src="images/'.$a['image'].'" alt="RestaurantLogo" width="100" heigth="100">
                <div class="content" >
                    <h3>'.$a['name'].'</h3>
                    <p><b style="color:#92452e">Category : </b>'.$a['category'].'</p>
                    <p><b style="color:#92452e">Location : </b>'.$a['location'].'</p>
                    <a href="resturants.php?id='.$a['id'].'">Show Menu</a>
                </div>
            </div> ';
            }

        ?>
                      
        </div>
        <div id="fast" style="width: 100%;">
        <br>
        <h3>Fast Food</h3>
        <?php
            foreach($fast as $a){
                echo'<div class="container">
                <img src="images/'.$a['image'].'" alt="RestaurantLogo" width="100" heigth="100">
                <div class="content" >
                <h3>'.$a['name'].'</h3>
                <p><b style="color:#92452e">Category : </b>'.$a['category'].'</p>
                <p><b style="color:#92452e">Location : </b>'.$a['location'].'</p>
                <a href="resturants.php?id='.$a['id'].'">Show Menu</a>
            </div>
            </div> ';
            }

        ?>
                      
        </div>
        <div id="juice" style="width: 100%;">
        <br>
        <h3>Juices</h3>
        <?php
            foreach($juice as $a){
                echo'<div class="container">
                <img src="images/'.$a['image'].'" alt="RestaurantLogo" width="100" heigth="100">
                <div class="content" >
                <h3>'.$a['name'].'</h3>
                <p><b style="color:#92452e">Category : </b>'.$a['category'].'</p>
                <p><b style="color:#92452e">Location : </b>'.$a['location'].'</p>
                <a href="resturants.php?id='.$a['id'].'">Show Menu</a>
            </div>
            </div> ';
            }

        ?>
                      
        </div>
        <div id="sweet" style="width: 100%;">
        <br>
        <h3>Sweets</h3>
        <?php
            foreach($sweet as $a){
                echo'<div class="container">
                <img src="images/'.$a['image'].'" alt="RestaurantLogo" width="100" heigth="100">
                <div class="content" >
                <h3>'.$a['name'].'</h3>
                <p><b style="color:#92452e">Category : </b>'.$a['category'].'</p>
                <p><b style="color:#92452e">Location : </b>'.$a['location'].'</p>
                <a href="resturants.php?id='.$a['id'].'">Show Menu</a>
            </div>
            </div> ';
            }

        ?>
        </div>
         <div id="coffee" style="width: 100%;">
         <br>
         <h3>Coffee</h3>
        <?php
            foreach($coffee as $a){
                echo'<div class="container">
                <img src="images/'.$a['image'].'" alt="RestaurantLogo" width="100" heigth="100">
                <div class="content" >
                <h3>'.$a['name'].'</h3>
                <p><b style="color:#92452e">Category : </b>'.$a['category'].'</p>
                <p><b style="color:#92452e">Location : </b>'.$a['location'].'</p>
                <a href="resturants.php?id='.$a['id'].'">Show Menu</a>
            </div>
            </div> ';
            }

        ?>
                      
        </div>
                      
       

    </section>
<script>
            alert("Wellcome To Our Website");
            function aLl(){
                document.getElementById("all").style.display="block";
                document.getElementById("fast").style.display="none";
                document.getElementById("juice").style.display="none";
                document.getElementById("sweet").style.display="none";
                document.getElementById("coffee").style.display="none";
            }

            function fAst(){
                document.getElementById("all").style.display="none";
                document.getElementById("fast").style.display="block";
                document.getElementById("juice").style.display="none";
                document.getElementById("sweet").style.display="none";
                document.getElementById("coffee").style.display="none";
            }
            
            function jUice(){
                document.getElementById("all").style.display="none";
                document.getElementById("fast").style.display="none";
                document.getElementById("juice").style.display="block";
                document.getElementById("sweet").style.display="none";
                document.getElementById("coffee").style.display="none";
            }
            
            function sWeet(){
                document.getElementById("all").style.display="none";
                document.getElementById("fast").style.display="none";
                document.getElementById("juice").style.display="none";
                document.getElementById("sweet").style.display="block";
                document.getElementById("coffee").style.display="none";
            }
            
            function cOffee(){
                document.getElementById("all").style.display="none";
                document.getElementById("fast").style.display="none";
                document.getElementById("juice").style.display="none";
                document.getElementById("sweet").style.display="none";
                document.getElementById("coffee").style.display="block";
            }


</script>
</body>
</html>