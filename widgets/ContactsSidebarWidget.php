<?php
/**
 * Created by PhpStorm.
 * User: sergei
 * Date: 16.02.15
 * Time: 21:14
 */

class ContactsSidebarWidget extends HWidget {

    public function run() {

        $assetPrefix = Yii::app()->assetManager->publish(dirname(__FILE__) . '/../resources', true, 0, defined('YII_DEBUG'));
        Yii::app()->clientScript->registerCssFile($assetPrefix . '/contacts.css');

        $user = new User();

        $this->render(
            'contactsPanel',
            array(
                'model' => $user
            )
        );
    }

}