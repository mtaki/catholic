<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\member\Models\Muumini */

$this->title = Yii::t('app', 'Create Muumini');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Muuminis'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="muumini-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
