<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
    <nav>
        <div class=" contenedor max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <div class="logo"> 
                <a href="<?php echo site_url('/') ?>">
                        <img src=" <?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logotipo">
                    </a>
            </div>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-green-700 rounded-lg md:hidden  dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
            <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 2h13M2 7h13M2 12h13"/>
</svg>

            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0  ">
            <div class="contenedor-menu">
                        <?php
                        $args = array(
                            'theme_location' => "menu-principal",
                            'container' => 'nav',
                            'container_class' => 'menu-principal'
                        );
                            wp_nav_menu($args);
                        ?>
                </div>
            </ul>
            </div>
        </div>
    </nav>

</header>

