<?php

use yii\helpers\Html;
use yii\helpers\Url;

echo Html::a(
    '<img src="'.Yii::$app->homeUrl.'images/view.png" alt="Посмотр.">', 
    Url::to(['guest-book/detail', 'id' => $model->id])
);