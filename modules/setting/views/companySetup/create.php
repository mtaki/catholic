<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\CompanySetup */

$this->title = Yii::t('app', 'Create Company Setup');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Company Setups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-setup-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
