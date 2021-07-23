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
        <section class="hero is-fullheight" >
            <div class="hero-head">
                <nav class="level">
                    <p class="level-item my-2">
                        <?php the_custom_logo(); ?>
                    </p>
                </nav>
            </div>
            <div class="hero-body" style="background: url(<?php header_image(); ?>); background-repeat: no-repeat; background-size: cover;">
                <div class="container has-text-centered">
                </div>
            </div>
            <div class="hero-foot has-text-white">
                <nav class="tabs is-boxed is-fullwidth has-text-white">
                    <div class="container has-text-white">
                        <?php wp_nav_menu(['theme_location' => 'header']) ?>
                    </div>
                </nav>
            </div>
        </section>