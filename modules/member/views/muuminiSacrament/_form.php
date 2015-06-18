<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\member\Models\MuuminiSacrament */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="muumini-sacrament-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'msharika_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sacrament_service_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'year_issued')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
