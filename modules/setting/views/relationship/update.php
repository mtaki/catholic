<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\Relationship */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Relationship',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Relationships'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="relationship-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
