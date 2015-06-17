<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\Parokia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="parokia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'parokia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'catholic_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start_date')->textInput() ?>

    <?= $form->field($model, 'jimbo_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
