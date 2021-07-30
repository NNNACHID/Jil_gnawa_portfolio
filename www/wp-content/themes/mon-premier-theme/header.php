<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JIL GNAWA</title>
    <?php wp_head() ?>
</head>
<body>
    <div class="container is-fluid">
        <section class="hero is-fullheight">
            <div class="hero-head">
                <nav class="navbar is-transparent">
                    <div class="navbar-brand py-3">
                        <a class="navbar-item">
                            <?php the_custom_logo(); ?>
                        </a>
                    </div>
                    <div class="navbar-menu">
                        <div class="navbar-brand ml-6">
                            <div class="navbar-item">
                                <div class="tabs is-centered is-large" id="menu">
                                    <?php wp_nav_menu(['theme_location' => 'header']) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="hero-body" style="background: url(<?php header_image(); ?>); background-repeat: no-repeat; background-size: cover;">
                <div class="container has-text-centered">
                </div>
            </div>
        </section>