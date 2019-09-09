<?php
/* @var $orders_item common\models\Order */
?>

<h3>Привет <?= Yii::$app->user->identity->username ?></h3>
<table class="table table-condensed">
    <thead>
        <tr>
            <th>№ заказа</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>E-mail</th>
        </tr>
    </thead>
    <tbody>
        <tr><?php foreach($orders as $order): ?>
            <td><?=$order['id']?></td>
            <td><?php debug(common\models\Order::find()->one()->getOrderItems()->one()); ?></td>
            <?php endforeach; ?>
        </tr>
    </tbody>
</table>


<!--
        (
            [id] => 2
            [created_at] => 1567766883
            [updated_at] => 1567766883
            [phone] => 7777777777777
            [address] => 
            [email] => nik-tarasov2@rambler.ru
            [notes] => 
            [status] => New
        ) ->