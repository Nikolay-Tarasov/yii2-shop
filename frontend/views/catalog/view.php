<?php
/* @var $this yii\web\View */
/* @var $model common\models\Product */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['list']];
//echo $product[0]['title'];
$this->params['breadcrumbs'][] = $product[0]['title'];
?>

<div class="container">
    <?php //debug($product); ?>
    <?php //echo $images[3]->getUrl();?>
    <?php 
    $count = count($images);
    for($i = 0; $i <= $count; $i++){
        if(isset($images[$i])){
            echo $product[0]['title'];
            echo '<p><img style="width:100px;" src='.$images[$i]->getUrl().'></p>';
        }
    }
    
    
    ?>
</div>
