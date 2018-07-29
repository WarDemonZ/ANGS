<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

/**
* hook_form_FORM_ID_alter()
*/
function angs_form_search_block_form_alter(&$form, &$form_state, $form_id) {
    $form['actions']['submit']['#value'] = decode_entities('&#xf002;');
} 

/**
* hook_theme()
*/
function angs_theme()  {
  	return array(
    	'date_ical_icon' => array(
      		'arguments' => array('url'),
      	),
    );
}

function angs_date_ical_icon($url)  {
	return l(t('Add to Calendar <i class="fa fa-calendar" aria-hidden="true"></i>'), $url['url'], array('html' => TRUE, 'attributes' => array('class' => array('button-type add-to-calendar'), 'target' => '_blank')));
}

/**
* hook_menu_link()
*/
function angs_menu_link(array $variables) {
	global $user;
	$item = menu_get_item();
	$element = $variables['element'];
  	$sub_menu = '';

  	// Event pages
  	if ($element['#href'] == "members/events" 
    	&& $item['page_arguments'] 
    	&& is_object($item['page_arguments'][0])
    	&& property_exists($item['page_arguments'][0], 'type')
    	&& $item['page_arguments'][0]->type == "event") {
    	$element['#localized_options']['attributes']['class'] = array('active');
  	}

  	// Meeting pages
  	if ($element['#href'] == "members/meetings" 
    	&& $item['page_arguments'] 
    	&& is_object($item['page_arguments'][0])
    	&& property_exists($item['page_arguments'][0], 'type')
    	&& $item['page_arguments'][0]->type == "meeting") {
    	$element['#localized_options']['attributes']['class'] = array('active');
  	}

  	// Newsletter pages
  	if ($element['#href'] == "members/newsletters" 
    	&& $item['page_arguments'] 
    	&& is_object($item['page_arguments'][0])
    	&& property_exists($item['page_arguments'][0], 'type')
    	&& $item['page_arguments'][0]->type == "simplenews") {
    	$element['#localized_options']['attributes']['class'] = array('active');
  	}

  	// Trophy pages
  	if ($element['#href'] == "members/trophies" 
    	&& $item['page_arguments'] 
    	&& is_object($item['page_arguments'][0])
    	&& property_exists($item['page_arguments'][0], 'type')
    	&& $item['page_arguments'][0]->type == "trophy") {
    	$element['#localized_options']['attributes']['class'] = array('active');
  	}

  	// Photo Album pages
  	if ($element['#href'] == "members/photo-gallery" 
    	&& $item['page_arguments'] 
    	&& is_object($item['page_arguments'][0])
    	&& property_exists($item['page_arguments'][0], 'type')
    	&& $item['page_arguments'][0]->type == "photo_album") {
    	$element['#localized_options']['attributes']['class'] = array('active');
  	}

  	// Logged in user account
  	if ($element['#href'] == "user" 
    	&& $item['page_arguments'] 
    	&& is_object($item['page_arguments'][0])
    	&& property_exists($item['page_arguments'][0], 'uid')  		
    	&& $item['page_arguments'][0]->uid == $user->uid
  		&& $item['path'] == "user/%" 
  		&& !user_is_anonymous()) {
  		$element['#localized_options']['attributes']['class'] = array('active');
  	}

  	if ($element['#below']) {
   		$sub_menu = drupal_render($element['#below']);
  	}
  	$output = l($element['#title'], $element['#href'], $element['#localized_options']);
  	return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

/**
* hook_form_FORM_ID_alter()
*/
function angs_form_comment_form_alter(&$form, &$form_state) {
	if ($form['#node']->type) {
  		$form['comment_body'][LANGUAGE_NONE][0]['value']['#title'] = t('Message');
  		$form['actions']['submit']['#value'] = t('Reply');
	}
}

/**
* Custom HTML trimming function
*/
function trim_all( $str, $what = NULL, $with = ' ') {
  if ($what === NULL)     {
    //  Character      Decimal      Use
    //  "\0"            0           Null Character
    //  "\t"            9           Tab
    //  "\n"           10           New line
    //  "\x0B"         11           Vertical Tab
    //  "\r"           13           New Line in Mac
    //  " "            32           Space
       
    $what   = "\\x00-\\x20";    //all white-spaces and control chars
  }
   
  return trim(preg_replace("/[".$what."]+/", $with, $str), $what);
}