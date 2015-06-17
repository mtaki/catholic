<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\Title */

$this->title = Yii::t('app', 'Create Title');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Titles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="title-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
