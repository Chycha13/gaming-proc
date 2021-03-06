<?php

require_once "../config/bdd.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="../asset/style.css">
    <title>Page inscription</title>

    <script type="text/javascript" src="../asset/jquery.js"></script>
    <script type="text/javascript" src="../js/connexion.js"></script>
</head>
<body>
<header class="headerIndex">
        <div class="Slogan">
            <p>L'antre des Gamer</p>
        </div>
        <div class="navigation">
            <a href="#"><span> Boutique </span></a>            
            <a href="#"><span> Profil </span></a>
            <a href="#"><span> Panier </span></a>
        </div>
       
    </header>
    <main class="mainInscription">
        <h1 class="titreConnexion">Création de compte</h1>
        <form method="POST" id="formConnexion" name="formConnexion" class="FormConnexion card">
            <table>
                <tr>
                    <td>
                        <input type="text" placeholder="Mail" id="mail_user" name="mail_user">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" placeholder="Mot de passe" id="password_user" name="password_user">
                    </td>
                </tr>
                
            </table>
            <a href="">Mot de passe oublié</a>
            <button class="btnConnexion" id="bouton_connexion" name="bouton_connexion">Connexion</button>
           
        </form>
        <div class="card2 card">
            <h2>NOUVEAU CLIENT ?</h2>
            <button class="btnConnexion" id="bouton_inscription" name="bouton_inscription">Crée un compte</button>
        </div>
        <p class="engagement"> E-gaming s'engage à garder ces informations strictement confidentielles.</p>
    </main>
    <footer>

    </footer>
</body>
</html>