<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\Sacrament */

$this->title = Yii::t('app', 'Create Sacrament');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sacraments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sacrament-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
