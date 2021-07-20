<?php

get_header();

the_content();

?>
<div class="tile is-ancestor">
  <div class="tile is-vertical is-8">
    
    <div class="tile is-parent">
      <article class="tile is-child notification is-primary">
        <p class="title">Wide tile</p>
        <p class="subtitle">Aligned with the right tile</p>
        <div class="content">
          <!-- Content -->
        </div>
      </article>
    </div>
    <div class="tile is-parent">
      <article class="tile is-child notification is-primary">
        <p class="title">Wide tile</p>
        <p class="subtitle">Aligned with the right tile</p>
        <div class="content">
          <!-- Content -->
        </div>
      </article>
    </div>
    <div class="tile is-parent">
      <article class="tile is-child notification is-primary">
        <p class="title">Wide tile</p>
        <p class="subtitle">Aligned with the right tile</p>
        <div class="content">
          <!-- Content -->
        </div>
      </article>
    </div>
  </div>
  <div class="tile is-parent">
    <article class="tile is-child notification is-success">
      <div class="content">
        <p class="title">Tall tile</p>
        <p class="subtitle">With even more content</p>
        <div class="content">
          <!-- Content -->
        </div>
      </div>
    </article>
  </div>
</div>

<?php

get_footer();
