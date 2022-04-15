<?php

$title ="projects";

ob_start();

require_once('Controller/contacts_controller.php');

?>
    <div class="container-fluid p-2 mt-5">
        <div class="d-flex flex-row justify-content-center on_column">
            <div class="h4 col p-4">
                <p>
                    Contacts
                </p>
                <p>
                    e-mail :   carlo.de-grandi-giacomo@laplateforme.io <br>
                    portable :    +33 6 38 04 04 55 <br>
                    https://github.com/Giacomo-DeGrandi <br>
                    https://carlo-de-grandi-giacomo.students-laplateforme.io <br>
                </p>
                <a href="mailto:carlo.de-grandi-giacomo@laplateforme.io" class="me-2"> Me contacter</a>
            </div>
            <div class="row h2 p-4">
                <a href="Giacomo-De-Grandi-CV.pdf" download="Giacomo-De-Grandi-CV.pdf">Telecharger mon CV</a>
            </div>
            <br>
        </div>
    </div>
<?php

$content = ob_get_clean();


require_once('header.php');
require_once('footer.php');
require_once('template.php');