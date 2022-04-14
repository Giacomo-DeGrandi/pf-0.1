<?php

$title ="projects";

ob_start();

?>
    <div class="container-fluid p-2 mt-5">
        <div class="d-flex flex-column align-items-center justify-content-center">

            <p class="display-5"><b>Mes projets</b></p>

            <div class="d-flex flex-column py-3 text-center projects">
                <div class="col-lg">
                    <div class="display-6 py-3 ">
                        Test API git
                    </div>
                    <div class="display-6">
                        <a href="projects/TestPostLab/index.php">
                            <img src="divers/pics/search.png" alt="searchgit" class="w-75">
                        </a>
                    </div>
                    <div class="h4 text-justify py-2">
                        Formulaire de recherche avec l'API de Github.
                        Sert à extraire toutes informations relatives a une certaine
                        repository ou un certain.e auteur.trice (proj. personnel).
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column py-3 text-center projects">
                <div class="col-lg">
                    <div class="display-6 py-3">
                        Tic-Tac-Toe
                    </div>
                    <div class="display-6">
                        <a href="projects/tic-tac-toe/index.php">
                            <img src="divers/pics/tictacpic.png" alt="tic-tac" class="w-75">
                        </a>
                    </div>
                    <div class="h4 text-justify py-2">
                       Jeu Tic-tac-toe avec 3 niveaux de difficulté.
                        Premier test de creation de un IA classique (Min-Max).
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column py-3 text-center projects">
                <div class="col-lg">
                    <div class="display-6 py-3">
                        Blog
                    </div>
                    <div class="container-fluid">
                        <a href="projects/blog/blogO&G/index.php">
                            <img src="divers/pics/blogpic.png" alt="blog" class="w-75">
                        </a>
                    </div>
                    <div class="h4 text-justify py-2">
                        Un example simple de Blog online.
                        Permet à des utilisateurs.trices enregistré.es et connecté.es d'ecrire
                        ou de commenter des articles.
                        Un système d'administration est mis en place pour permettre la gestion
                        des utilisateurs.trice, articles, categories, et du site plus en general.
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column py-3 text-center projects">
                <div class="col-lg">
                    <div class="display-6 py-3">
                        Jeu du Pendu
                    </div>
                    <div class="container-fluid">
                        <a href="projects/pendu/index.php">
                            <img src="divers/pics/pendupic.png" alt="blog" class="w-75">
                        </a>
                    </div>
                    <div class="h4 text-justify py-2">
                        Jeu du pendu avec un système d'administration pour la
                        modification, ajout, effacement des mots.
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column py-3 text-center projects">
                <div class="col-lg">
                    <div class="display-6 py-3">
                        Reservation Salle
                    </div>
                    <div class="container-fluid">
                        <a href="projects/reservationsalles/index.php">
                            <img src="divers/pics/reservepic.png" alt="reserve" class="w-75">
                        </a>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column py-3 text-center projects">
                <div class="col-lg">
                    <div class="display-6 py-3">
                        Livre d'Or
                    </div>
                    <div class="container-fluid">
                        <a href="projects/livre-d-or/index.php">
                            <img src="divers/pics/livredorpic.png" alt="livre" class="w-75">
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
<?php

$content = ob_get_clean();


require_once('header.php');
require_once('footer.php');
require_once('template.php');