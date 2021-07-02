<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleRegister.css">
    <title>Register</title>
</head>
<body>

<?php
    session_start();
    require_once 'database1.php';

    if(isset($_POST['submit'])){
        try{
            $db = new database();

            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password1 = $_POST['password1'];

            $password = password_hash($password, PASSWORD_BCRYPT, array("cost" => 12));
            $password1 = password_hash($password1, PASSWORD_BCRYPT, array("cost" => 12));

            $sql = "SELECT COUNT(email) AS num FROM users WHERE email = :email";
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':email',$email);
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if($row['num'] > 0){
                echo '<script>alert("Email bestaat al");</script>';
            }else{
                $stmt = $db->prepare("INSERT INTO users (username, email, password) VALUES(:gebruikersnaam,:email,:wachtwoord)");
                $stmt->bindParam(':gebruikersnaam',$username);
                $stmt->bindParam(':email',$email);
                $stmt->bindParam(':wachtwoord',$password);

                if($stmt->execute()){
                    echo '<script>alert("Welkom!");</script>';
                }else{
                    $error = "Error: ".$e->getMessage();
                    echo '<script>alert("'.$error.'");</script>';

                }


            }

        }catch(PDOException $e) {
            $error = "Error: ".$e->getMessage();
            echo '<script>alert("'.$error.'");</script>';
        }
    }
?>

    <div class="titel">Flowerpower</div>
    <a href="index.php" class="links">HOME</a>
    <a href="login.php" class="links">LOGIN</a>
    <a href="contact.php" class="links">CONTACT</a>
    
    <div class="header">Registreer</div>

        <!-- register button -->
    <p><button onclick="document.getElementById('registerButton').style.display='block'" 
        style="width:auto;">Registreer</button></p>
        
    <div id="registerButton" class="registerPopup">

        <!-- Register form -->

        <form class="registerContent" action="register.php" method="post">

            <div class="closeButton">
                <span onclick="document.getElementById('registerButton').style.display='none'"
                class="close" title="Close popup">&times;</span>
            </div>

            <div class="login">
                <label>Gebruikersnaam</label>
                <input type="text" placeholder=" Gebruikersnaam" name="username" required>

                <label>Email</label>
                <input type="text" placeholder=" E-mailadres" name="email" required>
           
                <label>Wachtwoord</label>
                <input type="password" placeholder=" Wachtwoord" name="password" required>
           
                <label>Wachtwoord bevestigen</label>
                <input type="password" placeholder=" Bevestig wachtwoord" name="password1" required>
           
                <button type="submit" class="button" name="submit">Registreer</button>
            </div>

            <p>
                <div class=login>
                    <a href="login.php">IK HEB AL EEN ACCOUNT.</a>
                </div>
            </p>
        </form>
    </div>

    <script>
    // Get the modal
    var modal = document.getElementById('registerButton');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
    
</body>
</html>