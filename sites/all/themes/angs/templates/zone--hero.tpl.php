<?php 
/**
 * @file
 * Alpha's theme implementation to display a zone.
 */
?>
<?php if ($wrapper): ?><div<?php print $attributes; ?>><?php endif; ?> 
  <div id="zone-hero">
    <?php print $content; ?>
  </div>
<?php if ($wrapper): ?></div><?php endif; ?>