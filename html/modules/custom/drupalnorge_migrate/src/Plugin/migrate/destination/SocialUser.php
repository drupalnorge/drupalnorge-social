<?php

namespace Drupal\drupalnorge_migrate\Plugin\migrate\destination;

use Drupal\user\Plugin\migrate\destination\EntityUser;

/**
 * @MigrateDestination(
 *   id = "social_user"
 * )
 */
class SocialUser extends EntityUser {
}
