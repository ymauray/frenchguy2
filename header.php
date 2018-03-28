<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="topbar">
        <div class="topmenu">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => false, 'menu_class' => 'mainmenu' ) ); ?>
            <ul class="socialmenu">
                <li class="menu-item">
                    <a href="#">f</a>
                </li>
                <li class="menu-item">
                    <a href="#">t</a>
                </li>
                <li class="menu-item">
                    <a href="#">i</a>
                </li>
                <li class="menu-item">
                    <a href="#">p</a>
                </li>
                <li class="menu-item">
                    <a href="#">g</a>
                </li>
            </ul>
        </div>
    </div>
    <div id="main-title">
        <header>The french guy from Switzerland</header>
    </div>
    <div id="main-content">
        <div class="sidebar">
            <div class="box">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mattis efficitur justo, eget tincidunt dolor fermentum ut. Vestibulum at tortor eu justo tincidunt suscipit a in leo. Nulla eget leo eu orci porta rutrum quis id nunc. Pellentesque hendrerit augue id auctor lobortis. Nam lacus lorem, euismod vitae eros non, ornare congue metus. Donec in justo ut leo eleifend posuere. Etiam eu pulvinar purus. In in tincidunt dui, ut luctus tortor. Nunc sollicitudin nulla sed magna aliquam, nec auctor felis lacinia. Nam nisl erat, condimentum quis felis nec, ultricies pharetra nibh. Phasellus semper sollicitudin ligula eu tempor. Suspendisse pellentesque elementum purus. Sed eget auctor sem. Phasellus ut dolor vitae mauris tincidunt molestie. Curabitur volutpat sapien id maximus gravida. Morbi blandit feugiat diam, quis commodo mauris.</div>
            <div class="box">Nullam blandit purus ut interdum porttitor. Vestibulum venenatis, arcu id accumsan malesuada, sem orci interdum magna, vel hendrerit massa diam sed nibh. Fusce in efficitur dolor. Nunc iaculis odio diam, vitae eleifend elit viverra sit amet. Donec efficitur molestie lacinia. Nullam vitae rutrum mauris. In vel dolor vehicula, blandit erat at, tincidunt massa. </div>
        </div>
        <div class="main">
