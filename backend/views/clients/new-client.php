<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '';
?>
<div class="row">
    <div class="col-lg-5">
        <?php
        $form = ActiveForm::begin([
            'id' => 'login-form',
            'options' => ['class' => 'form-horizontal'],
        ]) ?>
            <?= $form->field($model, 'name') ?>
            <?= $form->field($model, 'second_name') ?>
            <?= $form->field($model, 'email') ?>
            <?= $form->field($model, 'category')->dropDownList([
                'drupal' => 'Drupal',
                'wordpress' => 'WordPress',
                'yii2' => 'Yii2',
                'magento' => 'Magento',
                'joombla' => 'Joombla',
                'jenkins' => 'Jenkins',
                'code igniter' => 'Code Igniter'
                ]) ?>

            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
            </div>
        <?php ActiveForm::end() ?>
    </div>
</div>
