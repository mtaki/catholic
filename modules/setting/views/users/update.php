<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\Users */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Users',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="users-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
