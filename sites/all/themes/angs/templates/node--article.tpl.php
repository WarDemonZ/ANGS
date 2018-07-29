<?php $title_clean = str_replace(' ', '-', trim($title)); $id = strtolower($title_clean); ?>
<article id="<?php print $id; ?>">
  <header>
    <h1 class="title"><?php print $title ?></h1>
  </header>
  
  <div<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>
</article>