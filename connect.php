<?php

session_start();

ob_start();
?>
<!-- form -->
<div class="d-flex flex-row align-items-center justify-content-center mt-5 mb-3">
    <div class="row rounded-2 d-flex align-items-center justify-content-center shadow-sm border border-ligth p-3 w-100">
        <div class="col-lg">

            <form action="" method="POST">

                <div class="py-2 p-2">
                    <label for="email" class="h6 py-1 text-muted px-2 fw-light"><i>Entrer votre email</i></label><br>
                    <input type="text" class="p-1 px-2 rounded-1 w-75" id="inputEmail" placeholder="Email" name="email">
                </div>

                <div class="py-2 p-2">
                    <label for="password" class="h6 py-1 text-muted px-2 fw-light"><i>Entrer votre mot de passe</i></label><br>
                    <input type="password" class="p-1 px-2 rounded-1 w-75" id="inputPassword" placeholder="Password" name="password">
                </div>

                <div class="py-2 p-2">
                    <button type="submit" class="btn btn-dark rounded-2 mb-4 mt-3 p-2 shadow-sm w-50" name="submit_connection">Se connecter</button>
                </div>

            </form>

        </div>
    </div>

</div>
<?php

$content = ob_get_clean();


require_once('header.php');
require_once('footer.php');
require_once('template.php');



