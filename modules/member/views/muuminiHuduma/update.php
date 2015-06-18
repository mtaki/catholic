<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\member\Models\MuuminiHuduma */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Muumini Huduma',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Muumini Hudumas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="muumini-huduma-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
