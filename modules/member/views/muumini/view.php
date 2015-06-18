<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\member\Models\Muumini */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Muuminis'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="muumini-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'fullname',
            'dob',
            'pob',
            'marital_status',
            'area',
            'mtaa',
            'block',
            'house_no',
            'box',
            'phone_no',
            'neighbour_fullname',
            'neighbour_phone_no',
            'mzee_kanisa_fullname',
            'mzee_kanisa_phone_no',
            'work',
            'education',
            'work_place',
            'spouse_name',
            'spouse_phone_no',
            'marriage_type',
            'no',
            'life_status',
            'parent_id',
            'relationship_id',
            'jumuiya_id',
        ],
    ]) ?>

</div>
