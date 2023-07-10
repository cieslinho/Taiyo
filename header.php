<?php
/**
 * @package Taiyo
 */
?>

<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Roboto+Serif&family=Roboto+Slab:wght@400;900&display=swap" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
<link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
    <?php wp_head(); ?>

    <body <?php body_class();?>>

    <nav class="nav">
        <div class="nav__overlay">

        </div>
        <div class="nav__navbar">
            <a href="/" class="nav__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/color-logo-nobg.png" alt="TAIYO | SALON MASAŻU EROTYCZNEGO" class="nav__logo-img">
            </a>
            <button class="nav__btn">
                <div class="nav__btn-box">
                    <div class="nav__btn-bars"></div>
                </div>
            </button>
            
            <?php wp_nav_menu(
                            array(
                                'theme_location' => 'taiyo_main_menu',
                                'menu_class' => 'nav__menu'
                            )
                        );
                    ?>
            
        </div>
    </nav>