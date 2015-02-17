<?php
/**
 * Created by PhpStorm.
 * User: sergei
 * Date: 17.02.15
 * Time: 10:40
 */

class ContactsController extends Controller {

    public function actionSearch() {

        $model = new SearchContactForm();
        $users = array();

        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];

            if ($model->validate()) {
                $connection = Yii::app()->db;
                $command = $connection->createCommand("SELECT * FROM profile WHERE firstname LIKE '%{$model->username}%' OR lastname LIKE '%{$model->username}%'");
                $data = $command->queryAll();

                $users = array();
                foreach ($data as $row) {
                    $users[] = User::model()->findByPk($row['user_id']);
                }
            }

        }

        return $this->renderPartial(
            'searchResults',
            array(
                'users' => $users,
            )
        );

    }

}