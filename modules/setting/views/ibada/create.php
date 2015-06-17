<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\Ibada */

$this->title = Yii::t('app', 'Create Ibada');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ibadas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ibada-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
