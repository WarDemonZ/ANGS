<div<?php print $attributes; ?>>
  <div class="block-inner clearfix container-12">
    <div class="grid-12">
      <?php print render($title_prefix); ?>
      <?php if ($block->subject): ?>
        <h2<?php print $title_attributes; ?>><?php print $block->subject; ?></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      
      <div<?php print $content_attributes; ?>>
        <?php print $content ?>
      </div>
    </div>
  </div>
</div>