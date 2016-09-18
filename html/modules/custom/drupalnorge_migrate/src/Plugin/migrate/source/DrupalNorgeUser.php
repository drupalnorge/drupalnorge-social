<?php

namespace Drupal\drupalnorge_migrate\Plugin\migrate\source;

use Drupal\migrate\Row;
use Drupal\user\Plugin\migrate\source\d7\User;

/**
 * Drupal 7 user source from database.
 *
 * @MigrateSource(
 *   id = "drupalnorge_user"
 * )
 */
class DrupalNorgeUser extends User {

  const OLD_BASE_FILE_URL = 'http://drupalnorge.no/sites/default/files/';

  public function prepareRow(Row $row) {
    // Avoid importing user 1.
    if ($row->getSourceProperty('uid') == 1) {
      return FALSE;
    }
    if (parent::prepareRow($row)) {
      // Juuuust, set all of those fields in the cache. So we can store them
      // when that smarty-pants module (social_profile) decides to make us a
      // profile.
      $cid = _drupalnorge_migrate_create_cid_for_mail($row->getSourceProperty('mail'));
      if ($n = $row->getSourceProperty('field_user_drupal_org')) {
        $wat++;
      }
      if ($fid = $row->getSourceProperty('picture')) {
        if ($path = $this->getFilePath($fid)) {
          $row->setSourceProperty('user_picture', $path);
        }

      }
      \Drupal::cache()->set($cid, $row->getSource());
      return TRUE;
    }
    return FALSE;
  }

  private function getFilePath($fid) {
    $q = $this->select('file_managed', 'fm')
      ->fields('fm');

    $q->condition('fm.fid', $fid);

    $info = $q->execute()
      ->fetchAssoc();
    if (!$info) {
      return FALSE;
    }
    // Find the path.
    $uri = $info['uri'];
    return str_replace('public://', $this::OLD_BASE_FILE_URL, $uri);
  }

}
