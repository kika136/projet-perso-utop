<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="menu.css">
    <title>La-dinguerie</title>

</head>
<body>
        <header class="header">
                <a href="" class="logo">LA DINGUERIE</a>
                <input class="menu-btn" type="checkbox" id="menu-btn" />
                <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
                <ul class="menu">
                  <li><a href="principal.php">Accueil</a></li>
                  <li><a href="custom.html">custom</a></li>
                  <li><a href="soir.html">Après l'apero</a></li>
                  <li><a href="index.php">Déconnexion</a></li>
                </ul>
              </header>
  <div class="text">
     <br>
     <br>
     <br>
     <br>
     <hr>
     <h1>Accueil</h1>
     <hr>
     <br>
        <div class="content" id="content" style="text-align: center">
            <!-- tester si l'utilisateur est connecté -->
            <?php
                session_start();
                if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    // afficher un message
                    echo "Salut $user, tu as trouver le mot de passe magique";
                }
            ?>
            
        </div>
        <hr>
     <br>
     <br>
     <h2>ATTENTION!!</h2>
     <h3>Toutes les personnes venu ici, n'en sont pas sorti sans sequelles  </h3>
  <div style="text-align: center">
            
     <img src="reste.jpg" height="330" width="260">
     </div>
     </div>   
     <hr> 
 </body>
</html>
    
</body>
</html>