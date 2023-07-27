<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Principal Economics</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!--  Header  -->
<header id="header">
    <div class="pageContainer">
        <div class="headerContainer">
            <div class="headerBoxOne">
                <div class="headerLogo">
                    <?php
                    if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    }
                    ?>
                </div>
                <div class="headerMenuOne">
                    <?php
                    wp_nav_menu([
                            'theme_location' => 'header-menu-one',
                            'container_class' => 'headerOne',
                            'menu_class' => 'headerMenuOne-ul',
                        ]
                    );
                    ?>
                </div>
                <div class="headerBoxTwo">
                    <div class="headerSearchBox">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/searchIcon.png' ?>"
                             alt="Search Icon"
                             srcset="">
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>


