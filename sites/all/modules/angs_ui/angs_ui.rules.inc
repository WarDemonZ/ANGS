<?php

/**
 * Implements hook_rules_event_info().
 */
function angs_ui_rules_event_info() {
  $events = array(
    'angs_password_request' => array(
      'label' => t('User requests password reset'),
      'group' => t('ANGS'),
      'variables' => array(
        'user' => array(
          'type' => 'user',
          'label' => t('User'),
        ),
      ),
    ),
  );
  return $events;
}