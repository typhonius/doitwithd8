<?php

namespace Drupal\simple_fb_connect\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormBase;



class SimpleFBConnectAdmin extends ConfigFormBase{
    /**
     * {@inheritdoc}
     */
    public function getFormID(){
        return 'simple_fb_connect_api_keys_settings';
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state) {
        $form['simple_fb_connect_appid'] = array(
            '#type' => 'textfield',
            '#required' => TRUE,
            '#title' => t('Application ID'),
            '#default_value' => $this->config('simple_fb_connect.settings')->get('simple_fb_connect_appid'),
            '#description' => t('Also called the <em>OAuth client_id</em> value on Facebook App settings pages. <a href="https://www.facebook.com/developers/createapp.php">Facebook Apps must first be created</a> before they can be added here.'),
        );

        return parent::buildForm($form, $form_state);
    }
}



