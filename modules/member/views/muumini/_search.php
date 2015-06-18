<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\member\Models\MuuminiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="muumini-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fullname') ?>

    <?= $form->field($model, 'dob') ?>

    <?= $form->field($model, 'pob') ?>

    <?= $form->field($model, 'marital_status') ?>

    <?php // echo $form->field($model, 'area') ?>

    <?php // echo $form->field($model, 'mtaa') ?>

    <?php // echo $form->field($model, 'block') ?>

    <?php // echo $form->field($model, 'house_no') ?>

    <?php // echo $form->field($model, 'box') ?>

    <?php // echo $form->field($model, 'phone_no') ?>

    <?php // echo $form->field($model, 'neighbour_fullname') ?>

    <?php // echo $form->field($model, 'neighbour_phone_no') ?>

    <?php // echo $form->field($model, 'mzee_kanisa_fullname') ?>

    <?php // echo $form->field($model, 'mzee_kanisa_phone_no') ?>

    <?php // echo $form->field($model, 'work') ?>

    <?php // echo $form->field($model, 'education') ?>

    <?php // echo $form->field($model, 'work_place') ?>

    <?php // echo $form->field($model, 'spouse_name') ?>

    <?php // echo $form->field($model, 'spouse_phone_no') ?>

    <?php // echo $form->field($model, 'marriage_type') ?>

    <?php // echo $form->field($model, 'no') ?>

    <?php // echo $form->field($model, 'life_status') ?>

    <?php // echo $form->field($model, 'parent_id') ?>

    <?php // echo $form->field($model, 'relationship_id') ?>

    <?php // echo $form->field($model, 'jumuiya_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
