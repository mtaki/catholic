<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\Ahadi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ahadi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'amount')->textInput() ?>

    <?= $form->field($model, 'amount_due')->textInput() ?>

    <?= $form->field($model, 'matoleo_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'muumini_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ahadi_time_interval_id')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
