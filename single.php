<?php get_header() ;?>
<div id="primary">
    <div id="main">
        <div class="container">
            <?php
                while (have_posts()):the_post();
                    get_template_part("template-parts/content", "single");
                ?>
                <div class="row">
                    <div class="pages text-left col-6">
                    <?php next_post_link("&laquo %link") ;?>

                    </div>
                    <div class="pages text-right col-6">
                    <?php previous_post_link("%link &raquo; ") ;?>

                    </div>
                </div>
                <?php
     
                endwhile;
  
            ?>
        </div>
    </div>
</div>
