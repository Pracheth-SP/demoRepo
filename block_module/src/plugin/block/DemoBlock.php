<?php
/**
 * @file
 * Contains \Drupal\article\Plugin\Block\XaiBlock.
 */

namespace Drupal\block_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;



/**
 * Provides a 'article' block.
 *
 * @Block(
 *   id = "article_block",
 *   admin_label = @Translation("Demo block"),
 *   category = @Translation("Custom article block example")
 * )
 */
class DemoBlock extends BlockBase {

 

  /**
   * {@inheritdoc}
   */
  public function build() {
    $renderable = [
      '#theme' => 'my_template',
      '#test_var' => 'test variable',
    ];

    return $renderable;
  }


}