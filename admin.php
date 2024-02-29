<!-- formulaire, header et footer -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garage Vincent Parrot</title>
</head>

<body>
        <header>
            <!--menu responsive-->
            <div class="menu_toggle">
                <span></span>
            </div>

            <div class="logo">
                <img src="image/Logo v parrot.png" alt="">
                <h1>Garage V.Parrot</h1>
            </div>
            <ul class="menu">
                <li><a href="#home">Accueil</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#cars">Ventes</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="number">
                <p>0523541010</p>
            </div>
        </header>

        <main>
            <div>
                <form>
                    <label for="brands">Constructeur</label>
                    <input type="text" class="" id="brands" name="brands" required>
                    <button type="submit">Créer un vehicules</button>
                </form>
            </div>
        </main>
    
        <footer>
            <span>© 2024</span>
            <p>Tout droits reserves</p><button class="login_btn">Administrateur</button>
        </footer>
        </body>
</html>