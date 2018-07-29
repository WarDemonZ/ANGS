<article<?php print $attributes; ?>>
  <div class="clearfix">
    <div class="speech-bubble">
      <?php print render($content['body']); ?>
      <footer class="submitted">- <?php print strip_tags($name); ?>, <?php print date('jS M - g:ia', $created); ?></footer>
    </div>
  </div>
  <div class="clearfix">
    <?php print render($content['comments']); ?>
  </div>
</article>