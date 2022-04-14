<?php

$title ="blog";

require_once('Model/Articles.php');
require_once('Controller/blog_controller.php');

ob_start();

?>
    <div class="container-fluid p-2">
        <div class="d-flex flex-column align-items-center justify-content-center">
            <p class="display-5">BLOG</p><br>
            <p class="h3"> Ici je post de temps en temps des articles que je trouve interessants</p><br>
            <?php if(isset($articles)): ?>
                <ul>
                    <?php for( $i=0;$i<=isset($articles[$i]);$i++ ):  ?>
                       <li>
                            <form method="get" action="article.php" >
                                    <button type="submit" class="h5 text-start projtitles" name="lire"
                                            value="<?php echo $articles[$i]['id'] ?>" >
                                        <?php echo $articles[$i]['title']  ?>
                                    </button>
                            </form>
                       </li>
                    <?php endfor; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
<?php

$content = ob_get_clean();



require_once('header.php');
require_once('footer.php');
require_once('template.php');