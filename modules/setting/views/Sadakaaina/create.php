<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\SadakaAina */

$this->title = Yii::t('app', 'Create Sadaka Aina');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sadaka Ainas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sadaka-aina-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
