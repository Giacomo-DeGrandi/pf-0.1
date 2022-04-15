<?php

$title ="blog";

require_once('Model/Articles.php');
require_once('Controller/blog_controller.php');

ob_start();

?>
    <div class="container-fluid p-2">
        <div class="d-flex flex-column align-items-center justify-content-center">
            <?php if(isset($one_art)): ?>
                <p class="display-6"><?php echo $one_art[0]['title'] ?></p><br>
                <div class="d-flex flex-column align-items-center justify-content-center w-100">
                    <img src="<?php echo $one_art[0]['image_url']  ?>" alt="" class="w-50">
                </div>
                <p class="h6 text-muted text-end"><?php echo $one_art[0]['author']  ?><br>
                <span class="small"><?php echo $one_art[0]['date']  ?></span>
                    <a href="<?php echo $one_art[0]['link_art']  ?>" alt=""><?php echo $one_art[0]['link_art']  ?></a>
                </p><br>
                <p class="big"><?php  echo $one_art[0]['article']  ?></p>
            <?php endif; ?>
        </div>
    </div>
<?php

$content = ob_get_clean();



require_once('header.php');
require_once('footer.php');
require_once('template.php');