<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\member\Models\MuuminiSacrament */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Muumini Sacrament',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Muumini Sacraments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="muumini-sacrament-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
