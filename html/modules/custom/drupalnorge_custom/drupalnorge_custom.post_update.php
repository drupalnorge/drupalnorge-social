<?php

/**
 * Fix the post type uuid.
 */
function drupalnorge_custom_post_update_fix_post_type(&$sandbox) {
  $config = \Drupal::configFactory()
    ->getEditable('social_post.post_type.photo');

  $config->set('uuid', 'eae2eaff-0fce-44af-bc61-0be7dbc51f1e')
    ->save();
}
