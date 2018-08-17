<?php

namespace Drupal\capable\Controller;

use Drupal\Core\Controller\ControllerBase;

class CapableController extends ControllerBase {
  public function content(){
    return [
      'type' => 'markup',
      '#markup' =>$this->t('Your module is working!'),

    ];
  }
  public function parameters($slug) {
    return [
      'type' => 'markup',
      '#markup' => '<h2>' . $slug . '</h2>' .
      '<p>Example of the url slug being passed through the router and controller files</p>',
    ];
  }
  public function configsettingspage() {
    return [
      'type' => 'markup',
      '#markup' => '<h2>Configuration settings for the Capable module</h2>',
    ];
  }
  public function welcome() {
    return [
      '#theme' => 'welcome_page',
    ];
  }
  public function moduleconfigs() {
    $config = \Drupal::config('capable.settings');

    $message = $config->get('message');
    $lang_code = $config->get('langcode');
    $altmessage = $config->get('altmessage');

    $output = 'Message: ' . $message . '<br />' .
              'Language Code: ' . $lang_code . '<br />' .
              'Alternative Message: ' . $altmessage;
    return [
      'type' => 'markup',
      '#markup' => $output,
    ];
  }

  public function serviceexample() {
    $service = \Drupal::service('capable.say_hello');
    return [
      '#markup' => $service->sayHello('friend'),
    ];
  }

}
