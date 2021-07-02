
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="styleLogin.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body>
    <div class="titel">Flowerpower</div>
    <a href="index.php" class="links">HOME</a>
    <a href="register.php" class="links">REGISTER</a>
    <a href="contact.php" class="links">CONTACT</a>
    
    <div class="header">Inloggen</div>

    <!-- login button -->
    <p><button onclick="document.getElementById('loginButton').style.display='block'" 
        style="width:auto;">Inloggen</button></p>

        <div id="loginButton" class="loginPopup">
            
            <!-- login pop up content -->
            <form class="loginContent" action="login.php" method="post">    

                <div class="imgcontainer">
                    <img src="images/flowerEmployee.jpg" alt="Avatar" class="avatar">
                </div>

                <div class="closeButton">
                    <span onclick="document.getElementById('loginButton').style.display='none'"
                    class="close" title="Close popup">&times;</span>
                </div>
            
                <div class="login">
                    <label for="username"></label>
                    <i class="fas fa-user"></i> 
                    <input type="text" placeholder="Gebruikersnaam" name="username" required>

                    <label for="password"></label>
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Wachtwoord" name="password" required>

                    <button type ="submit">Inloggen</button>
                    <label> 
                    <input type="checkbox" checked="checked" name="remember me"> Account onthouden
                    </label>
                </div>
                
                <div class="login" style="backgroundcolor:#f1f1f1">
                    <button type="button" onclick="document.getElementById('loginButton').style.display='none'"
                    class="cancelButton">Annuleren</button>
                    <span class="password"><a href="#">Wachtwoord vergeten?</a></span>

                </div>
            </form>
        </div>

    <script>
    // Get the modal
    var modal = document.getElementById('loginButton');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>



                




</body>
</html>