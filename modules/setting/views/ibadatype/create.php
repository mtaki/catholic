<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\IbadaType */

$this->title = Yii::t('app', 'Create Ibada Type');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ibada Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ibada-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
