<?php


ob_start();

?>
<header>
    <div class="d-flex flex-direction-row justify-content-end head-nav ms-4">

            <div class="burg md-5">
                <button type="button" class="h2 bg-white border-0">
                    MENU
                </button>
            </div>
            <div class="d-flex flex-row w-50 display-6 head-menu">
                <a href="index.php" class="col p-2">About</a>
                <a href="projects.php" class="col p-2">Portfolio</a>
                <a href="blog.php" class="col p-2">Blog</a>
                <a href="contacts.php" class="col p-2">Contacts</a>
            </div>

    </div>
</header>
<?php

$header = ob_get_clean();

