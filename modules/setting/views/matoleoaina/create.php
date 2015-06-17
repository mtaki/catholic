<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\MatoleoAina */

$this->title = Yii::t('app', 'Create Matoleo Aina');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Matoleo Ainas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matoleo-aina-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
