<?php
/**
 * Created by PhpStorm.
 * User: sergei
 * Date: 17.02.15
 * Time: 10:06
 */

class SearchContactForm extends CFormModel {

    public $username;

    public function attributeLabels()
    {
        return array(
            'username'   => 'Имя'
        );
    }

    public function rules() {
        return array(
            array('username', 'required')
        );
    }

}