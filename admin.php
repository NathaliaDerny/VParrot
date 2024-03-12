<!-- formulaire, header et footer -->
<?php 
require_once 'lib/required.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garage Vincent Parrot</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
        <header>
            <!--menu responsive-->
            <div class="menu_toggle">
                <span></span>
            </div>

            <div class="logo">
                <img src="assets/pictures/Logo v parrot.png" alt="">
                <h1>Garage V.Parrot</h1>
            </div>
            <ul class="menu">
                <li><a href="#home">Accueil</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#cars">Ventes</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="connexion">
                <p>Déconnectez-vous</p>
            </div>
        </header>

        <main>
            <div class="formulaire">
                <form method="post" enctype="multipart/form-data" action="lib/gearbox.php">
                    <label for="name">Boite de vitesse</label>
                    <input type="text" class="gearbox" id="name" name="name" required>
                </form>
                <form method="post" enctype="multipart/form-data" action="lib/brands.php">
                    <label for="name">Marque</label>
                    <input type="text" class="brands" id="name" name="name" required>
                </form>
                <form method="post" enctype="multipart/form-data" action="lib/fueltype.php">
                    <label for="name">Carburant</label>
                    <input type="text" class="fueltype" id="name" name="name" required>
                </form>
                <button type="submit" class="form">Créer un vehicules</button>
                <button type="submit" class="form">Modifier</button>
                <button type="submit" class="form">Supprimer</button>
                
            </div>
        </main>
    
        <footer>
            <span>© 2024</span>
            <p>Tout droits reserves</p><button class="login_btn">Administrateur</button>
        </footer>
        </body>
</html>