<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="menu.css">
    <title>La Dinguerie</title>
  
     
    
</head>
<body>
  
  <body>
    <header class="header">
            <a href="" class="logo">LA DINGUERIE</a>
            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
            <ul class="menu">
              
              <li><a href="index.php">Connexion</a></li>
            </ul>
          </header>
             </ul>
<br>
<br>
<br>
<br>
<hr>

<h1>Connecte toi vite je te dis !!</h1>
<div id="container">
  <!-- zone de connexion -->
  
  <form action="verification.php" method="POST">
      <h2>Connexion</h2>
      
      <label><b class="text">Nom d'utilisateur</b></label>
      <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

      <label><b class="text">Mot de passe</b></label>
      <input type="password" placeholder="Entrer le mot de passe" name="password" required>

      <input type="submit" id='submit' value='LOGIN' >
      
      
       </form>
      </div>
    <br>
<hr>  
</body>
</html>