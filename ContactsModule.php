<?php

class ContactsModule extends HWebModule {

    public static function onSidebarInit(CEvent $event) {

        if (Yii::app()->moduleManager->isEnabled('contacts')) {
            $event->sender->addWidget('application.modules.contacts.widgets.ContactsSidebarWidget', array(), array('sortOrder' => 0));
        }

    }

}