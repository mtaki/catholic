<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\Jumuiya */

$this->title = Yii::t('app', 'Create Jumuiya');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Jumuiyas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jumuiya-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
