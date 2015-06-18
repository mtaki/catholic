<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\member\Models\MuuminiHuduma */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="muumini-huduma-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'huduma_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'msharika_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
