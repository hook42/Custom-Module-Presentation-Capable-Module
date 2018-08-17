<?php

namespace Drupal\capable\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Capable' Block.
 *
 * @Block(
 *   id = "capable_block",
 *   admin_label = @Translation("Capable Block"),
 *   category = @Translation("Custom"),
 * )
 */
class CapableBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => $this->t('Look at this beautiful custom block'),
    );
  }

}
