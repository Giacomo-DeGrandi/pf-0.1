<?php

$title ="home";

ob_start();

?>
    <div class="container-fluid p-2">
        <div class="d-flex flex-column align-items-center justify-content-center">
            <div>
                <div class="row p-4 mt-3">
                    <p class="display-3 mybolder p-1">
                        GIACOMO DE GRANDI
                    </p>
                    <p class="display-6 text-nowrap">
                         Étudiant à la Plateforme CS 1.
                    </p>
                </div>
                <div class="display-5 p-2 mt-5">

                    <div class="row text-nowrap">
                        <b><?php echo htmlentities('<💜>') ?> &#160; Code Lover. </b>
                    </div>
                    <br>

                    <div class="row">
                       <b><?php echo htmlentities('<🔒>') ?> &#160; Wannabe Pentester. </b>
                    </div>
                    <br>


                </div>

                <div class="row h2 p-4">
                    <p>
                        Mon intérêt pour l'informatique et en particulier pour la cybersécurité m'a amené à
                        intégrer la Plateforme, <br> après un parcours en arboriculture et en viticulture,
                        afin de devenir Développeur Web et à terme Pentester.
                    </p>
                </div>
                <br>

                <div class="row display-7 p-4">
                    <p class="h3">
                        Mes competences.
                    </p>
                    <ul class="h4">
                        <li> Installation, Configuration & déploiement de CMS </li>
                        <li> Bases d'algorithmie </li>
                        <li> Développement de sites web statiques, dynamiques et responsives </li>
                        <li> Technologies du web </li>
                        <li> Maquettage d’applications </li>
                        <li> Modélisation de base de données </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
<?php

$content = ob_get_clean();


require_once('header.php');
require_once('footer.php');
require_once('template.php');


