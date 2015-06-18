<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\member\Models\MuuminiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Muuminis');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="muumini-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Muumini'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fullname',
            'dob',
            'pob',
            'marital_status',
			 'setting.Jumuiya.jumuiya_name',
            // 'area',
            // 'mtaa',
            // 'block',
            // 'house_no',
            // 'box',
            // 'phone_no',
            // 'neighbour_fullname',
            // 'neighbour_phone_no',
            // 'mzee_kanisa_fullname',
            // 'mzee_kanisa_phone_no',
            // 'work',
            // 'education',
            // 'work_place',
            // 'spouse_name',
            // 'spouse_phone_no',
            // 'marriage_type',
            // 'no',
            // 'life_status',
            // 'parent_id',
            // 'relationship_id',
           

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
