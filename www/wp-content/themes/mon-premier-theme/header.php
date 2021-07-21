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
    <div class="container is-fullhd">
        <section class="hero is-primary is-large">
            <div class="hero-head">
                <nav class="level">
                    <p class="level-item has-text-centered mt-4">
                        <?php the_custom_logo(); ?>
                    </p>
                </nav>
            </div>
            <div class="hero-body">
                <div class="container has-text-centered">
                </div>
            </div>
            <div class="hero-foot">
                <nav class="tabs is-boxed is-fullwidth">
                    <div class="container">
                        <?php wp_nav_menu(['theme_location' => 'header']) ?>
                    </div>
                </nav>
            </div>
        </section>