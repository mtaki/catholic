<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\member\Models\MuuminiSacrament */

$this->title = Yii::t('app', 'Create Muumini Sacrament');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Muumini Sacraments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="muumini-sacrament-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
