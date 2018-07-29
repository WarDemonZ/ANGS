<article<?php print $attributes; ?>>
  <div class="clearfix">
    <div class="speech-bubble">
      <div<?php print $content_attributes; ?>>
        <?php print render($content['comment_body']); ?>
      </div>
      <footer class="submitted">- <?php print strip_tags($author); ?>, <?php print date('jS M - g:ia', strtotime($datetime)); ?></footer>
    </div>
  </div>
</article>
