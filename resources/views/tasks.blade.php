@extends('layouts.app')


    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <header>
                <img / id="logo" src="../images/logo.png" alt"Bug d'affichage :(">
                <p class = "titrePage">
                    Statistiques
                </p>
                <a href = "../php/connexion.php" class = "texteMenu">
                    <div class = "boutonMenu" id = "boutonConnexion">
                        Se connecter
                    </div>
                </a>
            </header>
            
            <nav>
                <a href = "../php/match.php" class = "texteMenu">
                    <div class = "boutonMenu">
                        Match
                    </div>
                </a>


                <a href = "../php/actualite.php" class = "texteMenu">
                    <div class = "boutonMenu">
                        Actualité
                    </div>
                </a>

                <a href = "../php/statistiques.php" class = "texteMenu">
                    <div class = "boutonMenu">
                        Statistiques des joueurs
                    </div>
                </a>


                <a href = "../php/entrainement.php" class = "texteMenu">
                    <div class = "boutonMenu">
                        Entraînement
                    </div>
                </a>

                <a href = "../php/reglages.php" class = "texteMenu">
                    <div class = "boutonMenu">
                        Réglages
                    </div>
                </a>
            </nav>
        </div>
    </div>

