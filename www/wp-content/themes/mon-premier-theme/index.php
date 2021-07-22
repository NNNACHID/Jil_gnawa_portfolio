<?php get_header() ?>

<?php if (have_posts()) : ?>

  <div class="tile is-ancestor my-auto ">
    <div class="tile is-vertical">
    <?php while (have_posts()) : the_post(); ?>
      <div class="tile is-parent">
        <article class="tile is-child box">
            <p class="title has-text-white">
              <?php the_title() ?>
            </p>
            <p class="subtitle"></p>
            <div class="content">
              <?php the_content() ?>
            </div>
           
        </article>
      </div>
      <?php endwhile ?>
    </div>

  </div>
<?php else : ?>
  <h1>no article here</h1>
<?php endif; ?>

<?php get_footer() ?>