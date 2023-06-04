<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu</title>
    <style>
      .RestaurantInfo{
        background-color: rgba(247, 247, 247);
        border-radius: 10px;
        margin: 20px 200px;
        padding: 50px 200px;
        position: relative;
      }
      .card1 {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 30%;
        margin: auto;
        width: 60%;
        padding: 10px;
      }

      .card1:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
      }

      .container1 {
        padding: 2px 16px;
      }
      #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 60%;
        margin: auto;
        width: 100%;
        padding: 10px;
      }

      #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
      }

      #customers tr:nth-child(even){background-color: #f2f2f2;}

      #customers tr:hover {background-color: #ddd;}

      #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D; 
        color: white;
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
            <a href="index.php#Restaurants">Restaurants</a>
            <a href="AboutUs.html">About Us</a>
            <a href="ContactUs.php">Contact Us</a>
        </nav>
        
    </header>
<br><br><br>

<div class="RestaurantInfo">
  <?php if($_GET['id']==1){    ?>
  <div class="card1">
    <img src="images/EatRestaurant.jpg" alt="EatRestaurantLogo" style="width:100%">
    <div style="text-align:left;" class="container1">
      <p><b>Name : </b>Eat Restaurant</p> 
      <p><b>Category : </b>Fast Food</p>
      <p><b>Location : </b>Front of building 4 and 5</p>
      <br><br>
    </div>
  </div>
  <br><h2 style="text-align:center;" class="meal_header">Menu</h2><br>
  <table id="customers">

    <tr><td style="text-align:center;" colspan="3"><b>SALAD</b></td></tr>
    <tr>
      <td colspan="2">Caesar salad</td><td>10 SR</td>
    </tr>
    <tr><td style="text-align:center;" colspan="3"><b>SANDWICHES</b></td></tr>
    <tr>
      <td colspan="2">Italian Chicken Sandwich</td><td>12 SR</td>
    </tr>
    <tr>
      <td colspan="2">Tikka Sandwich</td><td>12 SR</td>
    </tr>
    <tr>
      <td colspan="2">Mexican Sandwich</td><td>12 SR</td>
    </tr>
    <tr>
      <td colspan="2">Ranch Sandwich</td><td>12 SR</td>
    </tr>
    <tr>
      <td colspan="2">Mexican Sandwich</td><td>12 SR</td>
    </tr>
    <tr>
      <td colspan="2">Small Burger</td><td>9 SR</td>
    </tr>
    <tr>
      <td colspan="2">Big Burger</td><td>12 SR</td>
    </tr>
    <tr><td style="text-align:center;" colspan="3"><b>POTATOES</b></td></tr>
    <tr>
      <td colspan="2">Small French Fries</td><td>5 SR</td>
    </tr>
    <tr>
      <td colspan="2">Large French Fries</td><td>7 SR</td>
    </tr>
    <tr>
      <td colspan="2">Grilled potatoes</td><td>8 SR</td>
    </tr>
  </table>
  <br>
  <hr style="width: 100%;">
  <br>
  
  <?php
  } if($_GET['id']==2){  ?>
  <div class="card1">
    <img src="images/GustoPasta.jpg" alt="GustoPastaLogo" style="width:100%">
    <div style="text-align:left;" class="container1">
      <p><b>Name : </b>Gusto Pasta</p> 
      <p><b>Category : </b>Fast Food</p>
      <p><b>Location : </b>Front of building 4</p>
      <br><br>
    </div>
  </div>
  <br><h2 style="text-align:center;" class="meal_header">Menu</h2><br>
  <table id="customers">
    <tr><td style="text-align:center;" colspan="3"><b>PASTA</b></td></tr>
    <tr>
      <td colspan="2">Chicken Pasta</td><td>17 SR</td>
    </tr>
    <tr>
      <td colspan="2">Vegetable Pasta</td><td>17 SR</td>
    </tr>
    <tr>
      <td colspan="2">Shrimp Pasta</td><td>17 SR</td>
    </tr>
    <tr>
      <td colspan="2">Béchamel Pasta</td><td>17 SR</td>
    </tr>
    <tr>
      <td colspan="2">White Sauce Pasta</td><td>10 SR</td>
    </tr>
    <tr>
      <td colspan="2">Special Mix Chicken</td><td>17 SR</td>
    </tr>
    <tr>
      <td colspan="2">Tin Béchamel Pasta</td><td>17 SR</td>
    </tr>
    <tr><td style="text-align:center;" colspan="3"><b>POTATOES</b></td></tr>
    <tr>
      <td colspan="2">French Fries</td><td>6 SR</td>
    </tr>
    <tr>
      <td colspan="2">French Fries with Cheese Sauce</td><td>8 SR</td>
    </tr>
    <tr>
      <td colspan="2">Large French Fries</td><td>17 SR</td>
    </tr>
    <tr>
      <td colspan="2">Texas Chicken French Fries</td><td>11 SR</td>
    </tr>
    <tr>
      <td colspan="2">Over Potato Balls</td><td>12 SR</td>
    </tr>
    <tr><td style="text-align:center;" colspan="3"><b>SANDWICHES</b></td></tr>
    <tr>
      <td colspan="2">Grilled Chicken Burger</td><td>6 SR</td>
    </tr>
    <tr>
      <td colspan="2">Italian Shawarma</td><td>10 SR</td>
    </tr>
    <tr>
      <td colspan="2">Toast</td><td>10 SR</td>
    </tr>
    <tr>
      <td colspan="2">Nuggets</td><td>5 SR</td>
    </tr>
    <tr>
      <td colspan="2">Chicken Kebab</td><td>10 SR</td>
    </tr>
    <tr>
      <td colspan="2">Koushari</td><td>10 SR</td>
    </tr>
    <tr>
      <td colspan="2">Fried Shrimp</td><td>10 SR</td>
    </tr>
    <tr><td style="text-align:center;" colspan="3"><b>RICE</b></td></tr>
    <tr>
      <td colspan="2">Italian rice</td><td>23 SR</td>
    </tr>
  
    <tr><td style="text-align:center;" colspan="3"><b>COLD DRINKS</b></td></tr>
    <tr>
      <td colspan="2">Soft Drinks</td><td>4 SR</td>
    </tr>
    <tr>
      <td colspan="2">Caesar Juice</td><td>4 SR</td>
    </tr>
    <tr>
      <td colspan="2">AlRabie Juice</td><td>4 SR</td>
    </tr>
    <tr>
      <td colspan="2">Code Red flavor</td><td>10 SR</td>
    </tr>
    <tr>
      <td colspan="2">Large Code Red</td><td>10 SR</td>
    </tr>
    <tr>
      <td style="text-align:center;" colspan="3"><b>HOT DRINKS</b></td>
    </tr>
    <tr>
      <td colspan="2">Nescafe</td><td>5 SR</td>
    </tr>
    <tr>
      <td colspan="2">Cappuccino</td><td>6 SR</td>
    </tr>
    <tr>
      <td colspan="2">Hot Mocha</td><td>10 SR</td>
    </tr>
    <tr>
      <td colspan="2">Tea</td><td>3 SR</td>
    </tr>
    <tr>
      <td colspan="2">Milk Tea</td><td>4 SR</td>
    </tr>
    <tr>
      <td colspan="2">Mint Tea</td><td>4 SR</td>
    </tr>
    <tr>
      <td colspan="2">Green Tea</td><td>3 SR</td>
    </tr>
  </table>
  <br>
  <hr style="width: 100%;">
  <br>

  <?php
  } if($_GET['id']==3){  ?>
  <br>
  <div class="card1">
    <img src="images/ChickenEmpire.jpg" alt="ChickenEmpireLogo" style="width:100%">
    <div style="text-align:left;" class="container1">
      <p><b>Name : </b>Chicken Empire</p> 
      <p><b>Category : </b>Fast Food</p>
      <p><b>Location : </b>In building 16</p>
      <br><br>
    </div>
  </div>
  <br><h2 style="text-align:center;" class="meal_header">Menu</h2><br>
  <table id="customers">
    <tr><td style="text-align:center;" colspan="3"><b>SANDWICHES</b></td></tr>
    <tr>
      <td colspan="2">Chicken Fajita</td><td>12 SR</td>
    </tr>
    <tr>
      <td colspan="2">Shawarma</td><td>11 SR</td>
    </tr>
    <tr>
      <td colspan="2">Kebab</td><td>11 SR</td>
    </tr>
    <tr>
      <td colspan="2">Boneless Chicken (original – spicy )</td><td>9 SR</td>
    </tr>
    <tr>
      <td colspan="2">Falafel</td><td>6 SR</td>
    </tr>
    <tr>
      <td colspan="2">Croissant</td><td>5 SR</td>
    </tr>
    <tr><td style="text-align:center;" colspan="3"><b>POTATOES</b></td></tr>
    <tr>
      <td colspan="2">Small French Fries</td><td>5 SR</td>
    </tr>
    <tr>
      <td colspan="2">Medium French Fries</td><td>10 SR</td>
    </tr>
    <tr>
      <td colspan="2">Large French Fries</td><td>18 SR</td>
    </tr>
    <tr>
      <td colspan="2">Small Cheese French Fries</td><td>8 SR</td>
    </tr>
    <tr>
      <td colspan="2">Medium Cheese French Fries</td><td>10 SR</td>
    </tr>
    <tr>
      <td colspan="2">Large Cheese French Fries</td><td>18 SR</td>
    </tr>
    <tr>
      <td colspan="2">Medium Chicken French Fries</td><td>13 SR</td>
    </tr>
    <tr>
      <td colspan="2">Large Chicken French Fries</td><td>18 SR</td>
    </tr>
    <tr><td style="text-align:center;" colspan="3"><b>SALAD</b></td></tr>
    <tr>
      <td colspan="2">Caesar salad</td><td>12 SR</td>
    </tr>
    <tr><td style="text-align:center;" colspan="3"><b>DRINKS</b></td></tr>
    <tr>
      <td colspan="2">Soft Drinks</td><td>3 SR</td>
    </tr>
    <tr>
      <td colspan="2">Pepsi diet</td><td>4 SR</td>
    </tr>
    <tr>
      <td colspan="2">AlRabie Juice</td><td>3 SR</td>
    </tr>
    <tr>
      <td colspan="2">Sun Top</td><td>3 SR</td>
    </tr>
    <tr>
      <td colspan="2">Water</td><td>1 SR</td>
    </tr>
  </table>
    <br>
  <hr style="width: 100%;">
  <br>

  <?php
  } if($_GET['id']==6){  ?>
  <div class="card1">
    <img src="images/SweetBasbosa.jpg" alt="SweetBasbosaLogo" style="width:100%">
    <div style="text-align:left;" class="container1">
      <p><b>Name : </b>Sweet Basbosa</p> 
      <p><b>Category : </b>Sweet</p>
      <p><b>Location : </b>In building 16</p>
      <br><br>
    </div>
  </div>
  <br><h2 style="text-align:center;" class="meal_header">Menu</h2><br>
  <table id="customers">
    <tr><td style="text-align:center;" colspan="3"><b>BASBUSA</b></td></tr>
    <tr>
      <td colspan="2">Original Basbusa</td><td>12 – 23 – 46 SR</td>
    </tr>
    <tr><td style="text-align:center;" colspan="3"><b>BASBUSA</b></td></tr>
    <tr>
      <td colspan="2">Original Basbusa</td><td>12 – 23 – 46 SR</td>
    </tr>
    <tr>
      <td colspan="2">Nestle Basbusa</td><td>12 – 23 – 46 SR</td>
    </tr>
    <tr>
      <td colspan="2">Cream Basbusa</td><td>18 – 35 – 69 SR</td>
    </tr>
    <tr>
      <td colspan="2">Kit Kat Basbusa</td><td>18 – 35 – 69 SR</td>
    </tr>
    <tr>
      <td colspan="2">Snickers Basbusa</td><td>18 – 35 – 69 SR</td>
    </tr>
    <tr>
      <td colspan="2">Lotus Basbusa</td><td>18 – 35 – 69 SR</td>
    </tr>
    <tr>
      <td colspan="2">Oreo Basbusa</td><td>18 – 35 – 69 SR</td>
    </tr>
    <tr>
      <td colspan="2">Cheese Basbusa</td><td>18 – 35 – 69 SR</td>
    </tr>
    <tr><td style="text-align:center;" colspan="3"><b>KONAFA</b></td></tr>
    <tr>
      <td colspan="2">Cream Konafa</td><td>16 SR</td>
    </tr>
    <tr>
      <td colspan="2">Cheese Konafa</td><td>16 SR</td>
    </tr>
    <tr>
      <td colspan="2">Nutella Konafa</td><td>18 SR</td>
    </tr>
    <tr><td style="text-align:center;" colspan="3"><b>CHEESE CAKE</b></td></tr>
    <tr>
      <td colspan="2">Oreo Cheese Cake</td><td>7 – 9 – 15 SR</td>
    </tr>
    <tr>
      <td colspan="2">Lotus Cheese Cake</td><td>7 – 9 – 15 SR</td>
    </tr>
    <tr>
      <td colspan="2">Blue Berry Cheese Cake</td><td>7 – 9 – 15 SR</td>
    </tr>
  </table>
  <br>
  <hr style="width: 100%;">
  <br>

  <?php
  } if($_GET['id']==7){  ?>
  <br>
  <div class="card1">
    <img src="images/COOLANSWEET.jpg" alt="COOLAN-SWEET-Logo" style="width:100%">
    <div style="text-align:left;" class="container1">
      <p><b>Name : </b>COOLAN SWEET</p> 
      <p><b>Category : </b>Sweet</p>
      <p><b>Location : </b>Font of building 12</p>
      <br><br>
    </div>
  </div>
  <br><h2 style="text-align:center;" class="meal_header">Menu</h2><br>
  <table id="customers">
    <tr><td style="text-align:center;" colspan="3"><b>SWEETS</b></td></tr>
    <tr>
      <td colspan="2">Chocolate Molten</td><td>32 SR</td>
    </tr>
    <tr>
      <td colspan="2">Coffee Molten</td><td>32 SR</td>
    </tr>
    <tr>
      <td colspan="2">Pistachio Molten</td><td>32 SR</td>
    </tr>
    <tr>
      <td colspan="2">Lotus Molten</td><td>28 SR</td>
    </tr>
    <tr>
      <td colspan="2">Oreo Molten</td><td>28 SR</td>
    </tr>
    <tr>
      <td colspan="2">Coolan Éclair</td><td>25 SR</td>
    </tr>
    <tr>
      <td colspan="2">Éclair Red Velvet</td><td>25 SR</td>
    </tr>
    <tr>
      <td style="text-align:center;" colspan="3"><b>WAFFLE</b></td>
    </tr>
    <tr>
      <td colspan="2">Chocolate Waffle</td><td>16 SR</td>
    </tr>
    <tr>
      <td colspan="2">Pistachio Waffle</td><td>18 SR</td>
    </tr>
    <tr>
      <td colspan="2">Lotus Waffle</td><td>17 SR</td>
    </tr>
    <tr>
      <td style="text-align:center;" colspan="3"><b>PANCAKES</b></td>
    </tr>
    <tr>
      <td colspan="2">Chocolate Pancake</td><td>15 SR</td>
    </tr>
    <tr>
      <td colspan="2">Lotus Pancake</td><td>15 SR</td>
    </tr>
    <tr>
      <td colspan="2">Pistachio Pancake</td><td>15 SR</td>
    </tr>
  </table>
  <br>
  <hr style="width: 100%;">
  <br>

  <?php
  } if($_GET['id']==4){  ?>
  <div class="card1">
    <img src="images/PARADISE.jpg" alt="PARADISE-Logo" style="width:100%">
    <div style="text-align:left;" class="container1">
      <p><b>Name : </b>PARADISE</p> 
      <p><b>Category : </b>Juices</p>
      <p><b>Location : </b>Front of building 8</p>
      <br><br>
    </div>
  </div>
  <br><h2 style="text-align:center;" class="meal_header">Menu</h2><br>
  <table id="customers">
    <tr><td style="text-align:center;" colspan="3"><b>Juices</b></td></tr>
    <tr>
      <td colspan="2">Orange</td><td>12 SR</td>
    </tr>
    <tr>
      <td colspan="2">Melon</td><td>12 SR</td>
    </tr>
    <tr>
      <td colspan="2">Banana With Milk</td><td>12 SR</td>
    </tr>
    <tr>
      <td colspan="2">Avocado With Milk</td><td>12 SR</td>
    </tr>
    <tr>
      <td colspan="2">Pomegranate</td><td>12 SR</td>
    </tr>
    <tr>
      <td colspan="2">Guava</td><td>12 SR</td>
    </tr>
    <tr>
      <td colspan="2">Strawberries</td><td>12 SR</td>
    </tr>
    <tr>
      <td colspan="2">Mango</td><td>12 SR</td>
    </tr>
    <tr>
      <td colspan="2">Watermelon</td><td>12 SR</td>
    </tr>
    <tr><td style="text-align:center;" colspan="3"><b>Cocktails</b></td></tr>
    <tr>
      <td colspan="2">Sunshine</td><td>16 SR</td>
    </tr>
    <tr>
      <td colspan="2">Paradise Boro</td><td>16 SR</td>
    </tr>
    <tr>
      <td colspan="2">Awar Galb</td><td>18 SR</td>
    </tr>
    <tr>
      <td colspan="2">Aineshtain</td><td>21 SR</td>
    </tr>
    <tr>
      <td colspan="2">Ice rea strawberry</td><td>21 SR</td>
    </tr>
    <tr><td style="text-align:center;" colspan="3"><b>Milk Shake</b></td></tr>
    <tr>
      <td colspan="2">Shake</td><td>17 SR</td>
    </tr>
    <tr>
      <td colspan="2">Mocha Shake</td><td>17 SR</td>
    </tr>
    <tr>
      <td colspan="2">Protein Mixture</td><td>17 SR</td>
    </tr>
  </table>
  <br>
  <hr style="width: 100%;">
  <br>

  <?php
  } if($_GET['id']==5){  ?>
  <div class="card1">
    <img src="images/CherryANDBerries.jpg" alt="Cherry&BerriesLogo" style="width:100%">
    <div style="text-align:left;" class="container1">
      <p><b>Name : </b>Cherry & Berries</p> 
      <p><b>Category : </b>Juices</p>
      <p><b>Location : </b>In building 16</p>
      <br><br>
    </div>
  </div>
  <br><h2 style="text-align:center;" class="meal_header">Menu</h2><br>
  <table id="customers">
    <tr><td style="text-align:center;" colspan="3"><b>Juices</b></td></tr>
    <tr>
      <td colspan="2">Orange</td><td>7 – 10 – 15 SR</td>
    </tr>
    <tr>
      <td colspan="2">Apple</td><td>7 – 10 – 15 SR</td>
    </tr>
    <tr>
      <td colspan="2">Mango</td><td>7 – 10 – 15 SR</td>
    </tr>
    <tr>
      <td colspan="2">Guava</td><td>7 – 10 – 15 SR</td>
    </tr>
    <tr>
      <td colspan="2">Melon</td><td>7 – 10 – 15 SR</td>
    </tr>
    <tr>
      <td colspan="2">Lemon</td><td>7 – 10 – 15 SR</td>
    </tr>
    <tr>
      <td colspan="2">Grape</td><td>7 – 10 – 15 SR</td>
    </tr>
    <tr><td style="text-align:center;" colspan="3"><b>Smoothie</b></td></tr>
    <tr>
      <td colspan="2">Cherry and berry smoothie</td><td>10 – 15 – 20 SR</td>
    </tr>
    <tr>
      <td colspan="2">Cherry and berry smoothie</td><td>10 – 15 – 20 SR</td>
    </tr>
    <tr>
      <td colspan="2">Berry and mango smoothie</td><td>10 – 15 – 20 SR</td>
    </tr>
    <tr>
      <td style="text-align:center;" colspan="3"><b>Cocktails</b></td>
    </tr>
    <tr>
      <td colspan="2">Awar galb</td><td>10 – 12 – 15 SR</td>
    </tr>
    <tr>
      <td colspan="2">Stars</td><td>10 – 12 – 15 SR</td>
    </tr>
    <tr>
      <td colspan="2">Classic Cherry and Berry</td><td>10 – 12 – 15 SR</td>
    </tr>
  </table>
  <br>
  <hr style="width: 100%;">
  <br>

  <?php
  } if($_GET['id']==8){  ?>
  <div class="card1">
    <img src="images/EatCafe.jpg" alt="EatCafeLogo" style="width:100%">
    <div style="text-align:left;" class="container1">
      <p><b>Name : </b>Eat cafe</p> 
      <p><b>Category : </b>coffee</p>
      <p><b>Location : </b>In building 16</p>
      <br><br>
    </div>
  </div>
  <br><h2 style="text-align:center;" class="meal_header">Menu</h2><br>
  <table id="customers">
    <tr><td style="text-align:center;" colspan="3"><b>Hot</b></td></tr>
    <tr>
      <td colspan="2">Americano</td><td>11 SR</td>
    </tr>
    <tr>
      <td colspan="2">Ristretto</td><td>12 SR</td>
    </tr>
    <tr>
      <td colspan="2">Flat white</td><td>12 SR</td>
    </tr>
    <tr>
      <td colspan="2">Cappuccino</td><td>12 SR</td>
    </tr>
    <tr>
      <td colspan="2">Cortado</td><td>12 SR</td>
    </tr>
    <tr>
      <td colspan="2">Latte</td><td>12 SR</td>
    </tr>
    <tr>
      <td colspan="2">Spanish Latte</td><td>12 SR</td>
    </tr>
    <tr>
      <td colspan="2">Caramel Latte</td><td>12 SR</td>
    </tr>
    <tr>
      <td colspan="2">White Mocha</td><td>12 SR</td>
    </tr>
    <tr><td style="text-align:center;" colspan="3"><b>Cold</b></td></tr>
    <tr>
      <td colspan="2">Americano</td><td>16 SR</td>
    </tr>
    <tr>
      <td colspan="2">Latte</td><td>16 SR</td>
    </tr>
    <tr>
      <td colspan="2">Spanish Latte</td><td>18 SR</td>
    </tr>
    <tr>
      <td colspan="2">Shaken caramel</td><td>21 SR</td>
    </tr>
    <tr>
      <td colspan="2">Caramel Latte</td><td>21 SR</td>
    </tr>
  </table>
  <br>
  <hr style="width: 100%;">
  <br>

  <?php
    } if($_GET['id']==9){  ?>
  <div class="card1">
    <img src="images/Starbucks.jpg" alt="StarbucksLogo" style="width:100%">
    <div style="text-align:left;" class="container1">
      <p><b>Name : </b>Starbucks</p> 
      <p><b>Category : </b>coffee</p>
      <p><b>Location : </b>In building 16</p>
      <br><br>
    </div>
  </div>
  <br><h2 style="text-align:center;" class="meal_header">Menu</h2><br>
  <table id="customers">
    <tr><td style="text-align:center;" colspan="3"><b>Espresso Traditions</b></td></tr>
    <tr>
      <td colspan="2">Caffe Latte</td><td>18 – 20 SR</td>
    </tr>
    <tr>
      <td colspan="2">Cappuccino</td><td>18 – 20 SR</td>
    </tr>
    <tr>
      <td colspan="2">Caffe Mocha</td><td>18 – 20 SR</td>
    </tr>
    <tr>
      <td colspan="2">Caramel Macchiato</td><td>18 – 22 SR</td>
    </tr>
    <tr>
      <td colspan="2">Caffe Americano</td><td>18 – 22 SR</td>
    </tr>
    <tr>
      <td colspan="2">White Chocolate Mocha</td><td>18 – 22 SR</td>
    </tr>
    <tr>
      <td colspan="2">Espresso</td><td>18 – 22 SR</td>
    </tr>
    <tr>
      <td style="text-align:center;" colspan="3"><b>Frappuccino</b></td>
    </tr>
    <tr>
      <td colspan="2">Espresso</td><td>20 – 22 SR</td>
    </tr>
    <tr>
      <td colspan="2">Coffee</td><td>20 – 22 SR</td>
    </tr>
    <tr>
      <td colspan="2">Double Caramel</td><td>20 – 22 SR</td>
    </tr>
    <tr>
      <td style="text-align:center;" colspan="3"><b>Add Ons</b></td>
    </tr>
    <tr>
      <td colspan="2">Espresso Shot</td><td>6 SR</td>
    </tr>
    <tr>
      <td colspan="2">Flavoured Syrup</td><td>6 SR</td>
    </tr>
    <tr>
      <td colspan="2">Whipped Cream</td><td>6 SR</td>
    </tr>
  </table>
  <br>
  <hr style="width: 100%;">
  <br>

  <?php }   ?>
</div>
</body>
</html>