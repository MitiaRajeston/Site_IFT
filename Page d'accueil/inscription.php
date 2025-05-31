<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFT Madagascar</title>
    <link rel="shortcut icon" href="Image/logo pour titre.png" type="Image/png">
    <title>Inscription</title>
</head>
    <style>
        /* Barre de nav*/
        header{
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 40px 8%;
            height: 1px;
            box-shadow: 0 0 10px 0 rgba(0,0,0,0.2);
        }
        header .logo{
            color: #000080;
            font-size: 30px;
            font-weight: bold;
            padding-right: 320px;
        }
        header .logo span{
            color: #000;
        }
        header .ift{
            font-size: 30px;
            padding-left: 0px;
            font-weight: bold;
            padding: 0px;
        }
        nav{
            margin-right: 320px;
        }
        nav a{
            position: relative;
            color: #000;
            font-size: 15px;
            text-decoration: none;
            padding: 8px 20px;
            transition: .5s;
        }
        nav a:hover{
            color: #000080;
        }
        nav a span{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            border-bottom: 3px solid #000080;
            border-radius: 20px;
            transform: scale(0) translateY(50px);
            transition: .5s;
            opacity:  0;
        }
        nav a:hover  span{
            transform: scale(1) translateY(0);
            opacity: 1;
        }
        nav .prop span{
            opacity: 1;
            transform: none;
        }
        header button{
            background-color: #ffffff;
            border: none;
        }
        header .login_btn:hover{
            background-color: #fff;
        }
        /*Fin de la barre de nav*/




        body{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-family: Arial, Helvetica, sans-serif;
        }
        h3{
            text-align: center;
            color: blue;
            margin-bottom: 25px;
        }
        label{
            font-weight: bold;
            font-size: 12px;
            text-transform: uppercase;
        }
        form{
            box-shadow: 0px 0px 15px 5px #ccc;
            margin-top: 120px;
            padding: 50px;
            display: flex;
            flex-direction: column;
            align-items: left;
            border-radius: 10px;
        }
        form div input{
            width: 100%;
            height: 25px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 13px;
        }
        form div input:hover{
            background-color: #ccc;
            transition: 0.3s;
        }
        form .save{
            background-color: blue;
            border: none;
            width: 100%;
            border-radius: 8px;
            margin-top: 20px;
            color: #fff;
            height: 25px;
            cursor: pointer;
        }
        form .save:hover{
            box-shadow: 3px 3px 10px 1px #000;
            transition: 0.3s;
        }
    </style>
<body>
<header>
        <!-- Menu -->
        <div class="menu_toggle">
            <span></span>
        </div>
        <!-- Fin de Menu -->
        <div class="logo">
            <p><span>IFT</span>University</p>
        </div>
        <nav class="menu">
            <a href="Acceuil.html">Acceuil<span></span></a>
            <a href="Propos.html">A propos<span></span></a>
            <a href="cursus.html">Cursus<span></span></a>
            <a href="contact.html">Contact <span></span></a>
        </nav>
        <button class="login_btn"><img src="Image/logo.jpg" alt=""></button>
</header>


    <form method="POST" action="traitement.php">
    <h3>Inscription !</h3>
        <div>
            <label for="nom">Votre nom</label>
            <input type="text" id="nom" name="nom" placeholder="Entrez votre nom..." required>
            <br>
        </div>

        <div>
            <label for="prenom">Votre prénom</label>
            <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prenom..." required>
        </div>

        <div>
            <label for="date">Date de naissance</label>
            <input type="date" id="date" name="date" placeholder="Votre date de naissance..." required>
        </div>

        <div>
            <label for="filiere">Votre filière</label>
            <input type="text" id="filiere" name="filiere" placeholder="Entrez votre filiere..." required>
        </div>

        <div>
            <label for="numero">Numero de téléphone</label>
            <input type="nuber" id="numero" name="numero" placeholder="Entrez votre numero..." required>
        </div>

        <div>
            <label for="adresse">Votre adresse</label>
            <input type="text" id="adresse" name="adresse" placeholder="Entrez votre adresse..." required>
        </div>

        <input class="save" type="submit" value="Enregistrer" name="ok">
    </form>
</body>
</html>
