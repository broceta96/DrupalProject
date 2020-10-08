<?php

namespace Drupal\custom_module\Controller;

class CustomController
{
  public function custom()
  {
    return array(
      '#title' => 'Welcome to Custom Page',
      '#markup' => 'This is some content'
    );
  }
}
