<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\member\Models\MuuminiHuduma */

$this->title = Yii::t('app', 'Create Muumini Huduma');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Muumini Hudumas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="muumini-huduma-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
