<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/737889da96.js" crossorigin="anonymous"></script>
    <title>Contact Us</title>
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
    <div class="hero">
        <form action="add_contact.php" method="post">
            <div class="row">
                <div class="input-group">
                    <input type="text" name="name" id="name" required>
                    <label for="name"><i class="fa-solid fa-user"></i> Your Name</label>
                </div>
                <div class="input-group">
                    <input type="tel" name="phone" id="number" pattern="\966\[0-9]{9}" 
                    placeholder="966 500000000" required>
                    <label for="number"><i class="fa-solid fa-mobile-screen-button"></i> Phone Number</label>
                </div>
            </div>
            <div class="input-group">
                <input type="email" name="email" id="email" required>
                <label for="email"><i class="fa-solid fa-at"></i> Your Email</label>
            </div>
            <div class="input-group">
                <textarea id="message" name="message" rows="8" required></textarea>
                <label for="message"><i class="fa-solid fa-comments"></i> Your message</label>
            </div>
            <button type="submit"><i class="fa-solid fa-paper-plane"></i> SUBMIT</button>
        </form>
    </div>

	<div style="color:red">
            <?php
                if(isset($_GET['done']) && !empty($_GET['done'])){
                  if ($_GET['done'] == 'successfully') echo '<script>alert("contact was added successfully");</script>';
                  
                }
            ?>
    </div>
</body>

</html>