<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php for ($i = 0; $i < count($rows); $i++): ?>
	<?php $row = $rows[$i]; ?>
	<?php $desktop = ($i % 4 == 0)? 'even' : 'odd'; ?>
	<?php $mobile = ($i % 2 == 0)? 'even' : 'odd'; ?>
	<?php if ($i % 2 == 0) { print "<div class='captains-weekend-room-row {$desktop}'>"; } ?>
		<div class="captains-weekend-room-container <?php print $mobile; ?>">
	  		<div<?php if ($classes_array[$i]) { print ' class="' . $classes_array[$i] .'"';  } ?>>
	    		<?php print $row; ?>
	  		</div>
	  	</div>
  	<?php if (($i+1) % 2 == 0) { print '</div>'; } ?>
<?php endfor; ?>
<?php if (($i+1) % 2 == 0) { print '</div>'; } ?>