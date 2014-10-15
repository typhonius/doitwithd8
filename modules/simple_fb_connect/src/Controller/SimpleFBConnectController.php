<?php
/**
 * @file
 * Contains \Drupal\simple_fb_connect\Controller\SimpleFBConnectController.
 */

namespace Drupal\simple_fb_connect\Controller;

class SimpleFBConnectController{
    public function hello(){
        // Assemble the markup.
        $build = array(
            '#markup' => t('hello world'),
        );

        return $build;
    }
}




