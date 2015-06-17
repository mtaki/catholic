<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\Parokia */

$this->title = Yii::t('app', 'Create Parokia');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Parokias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parokia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
