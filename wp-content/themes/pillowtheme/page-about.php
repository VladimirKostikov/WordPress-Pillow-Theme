<?php

/**
 * Template name: About
 * 
 * @package Pillow
 */

get_header();

?>


<section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2><?php echo carbon_get_theme_option('about_title') ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->
    

    <!-- product list part start-->
    <section class="about_us padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <?php
                        $blocks = carbon_get_theme_option('about_our_mission');

                        if($blocks) {
                            foreach($blocks as $block) {
                                echo "
                                
                                <div class='about_us_content'>
                                    <h5>{$block['block_name']}</h5>
                                    <h3>{$block['block_content']}</h3>
                                </div>
                                            
                                ";
                            }
                        }
                    ?>
                    
                    <div class="about_us_content">
                        <div class="about_us_video">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about_us_video.png" alt="#" class="img-fluid">
                            <a class="about_video_icon popup-youtube" href="<?php carbon_get_theme_option('about_youtube'); ?>"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php

    get_footer();

    ?>