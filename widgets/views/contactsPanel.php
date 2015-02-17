<div class="panel panel-default panel-contacts">
    <div class="panel-heading">
        <strong>Поиск контактов</strong>
    </div>
    <div id="contacts-content">
        <div class="col-xs-12">
            <div class="form">
                <?php
                /** @var $this ContactsSidebarWidget */
                $form = $this->beginWidget(
                    'CActiveForm',
                    array(
                        'id'    => 'contacts-search-form',
                        'enableAjaxValidation' => false,
                        'htmlOptions' => array(
                            'onsubmit'  => "return false;"
                        )
                    )
                );
                /* @var $form CActiveForm */
                ?>
                <div class="form-group">
                <?php
                    echo $form->textField(
                        $model,
                        'username',
                        array(
                            'class' => 'form-control',
                            'placeholder' => 'Введите имя пользователя'
                        )
                    );
                ?>
                </div>
                <div class="form-group">
                    <?php
                    echo CHtml::button(
                        'Поиск',
                        array(
                            'class'     => 'btn btn-success',
                            'id'        => 'contacts-search-submit'
                        )
                    );
                    ?>
                </div>
                <?php $this->endWidget(); ?>
                <div>
                    <?php
                    echo $model->username;
                    ?>
                </div>
            </div>
<!--            <input type="text" name="contact-search-query" placeholder="Введите имя для поиска" class="form-control">-->
        </div>
        <div id="result" class="col-xs-12"></div>
    </div>
    <script>

        $(document).ready(function(){

            $('#contacts-search-submit').click(function(){
                var data = $("#contacts-search-form").serialize();
                $.ajax({
                    type: 'POST',
                    url: '<?php echo Yii::app()->createAbsoluteUrl("contacts/contacts/search") ?>',
                    data: data,
                    success: function(data) {
                        $("#contacts-content #result").html(data);
                    }
                });
            });

        });
    </script>
</div>