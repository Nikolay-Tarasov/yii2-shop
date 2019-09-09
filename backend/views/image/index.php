<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ImageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $form backend\models\MultipleUploadForm */
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['product/index']];
//$this->title = $searchModel->product_id ? "Product #$searchModel->product_id images" : 'Images';
$this->params['breadcrumbs'][] = $searchModel->product_id;
?>
<div class="image-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php if ($searchModel->product_id) : ?>
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

            <?= $form->field($uploadForm, 'files[]')->fileInput(['multiple' => true]) ?>

            <button class="btn btn-primary">Upload</button>
        <?php ActiveForm::end() ?>
    <?php endif ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'product_id',
            [
                'format' => 'raw',
                'value' => function ($model, $key, $index, $column) {
                    /** @var $model common\models\Image */
                    //return Html::img($model->getUrl());
                    return "<img class='img-responsive' src=".$model->getUrl().">";
                }
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{delete}',
            ],
        ],
    ]); ?>

</div>
