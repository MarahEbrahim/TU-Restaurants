<?php
    include 'connection.php';
    
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];


                $sql = "INSERT INTO contact (`name`,`phone`,`email`,`message`) VALUES (?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$name,$phone,$email,$message]);
                $done .="successfully";
        
    header("Location: ContactUs.php?done=".$done);
    ?>

    