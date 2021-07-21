<?php get_header() ?>

<?php if (have_posts()) : ?>

<div class="tile is-ancestor my-auto">
    <div class="tile is-vertical">
      <div class="tile is-parent">
        <article class="tile is-child notification is-primary">
          <?php while (have_posts()) : the_post(); ?>
            <p class="title">
              <?php the_title() ?>
            </p>
            <p class="subtitle"></p>
            <div class="content">
              <?php the_content() ?>
            </div>
            <?php endwhile ?>
        </article>
      </div>
    </div>

  </div>
<?php else : ?>
  <h1>no article here</h1>
<?php endif; ?>

<?php get_footer() ?>