<?php

namespace Drupal\drupalup_controller\Controller;

use Drupal\Core\Database\Database;

class ArticleController {

  public function page() {

    $db = Database::getConnection();
    $query = $db->select('node__field_title', 'nrft');
    $query->join('node__field_desciption', 'nrfd', 'nrfd.entity_id = nrft.entity_id');
    $query->join('node__field_picture', 'nrfp', 'nrfd.entity_id = nrfp.entity_id');
    $query->fields('nrft', ['field_title_value']);
    $query->fields('nrfd', ['field_desciption_value']);
    $query->fields('nrfp', ['field_picture_alt']);
    $result = $query->execute()->fetchAll();

    return [
      '#theme' => 'article_list',
      '#records' => $result,
      '#title' => 'Our article list'
    ];
  }
}
