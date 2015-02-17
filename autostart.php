<?php
Yii::app()->moduleManager->register(
    array(
        'id'    => 'contacts',
        'class' => 'application.modules.contacts.ContactsModule',
        'import' => array(
            'application.modules.contacts.*',
            'application.modules.contacts.controllers.*',
            'application.modules.contacts.views.*',
            'application.modules.contacts.forms.*'
        ),
        // Events to Catch
        'events' => array(
            array('class' => 'DashboardSidebarWidget', 'event' => 'onInit', 'callback' => array('ContactsModule', 'onSidebarInit')),
        ),
    )
);

?>