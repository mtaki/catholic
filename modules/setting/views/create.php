<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\Jimbo */

$this->title = Yii::t('app', 'Create Jimbo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Jimbos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jimbo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
