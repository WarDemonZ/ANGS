<article<?php print $attributes; ?>>
  <div<?php print $content_attributes; ?>>
    <?php
      	// We hide the comments and links now so that we can render them later.
    	hide($content['comments']);
      	hide($content['links']);

      	if (array_key_exists('field_trophy', $content)) {
      		$trophy_ids = array();
    		foreach ($field_trophy as $entity) {
    			$trophy_ids[] = $entity['target_id'];
    		}
    		$trophies = 

    		// Render the Event Date/Sponsor info
    		print render($content['field_event_date']);
    		print render($content['group_format_sponsor']);

    		// Render the Trophy View
    		print views_embed_view('trophies', 'slideshow', implode(",", $trophy_ids));

    		// Render Location info
    		print render($content['group_location']);
      	} 
      	else {
      		print render($content);
      	}
    ?>
  </div>
</article>