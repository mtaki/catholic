<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\Ahadi */

$this->title = Yii::t('app', 'Create Ahadi');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ahadis'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ahadi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
