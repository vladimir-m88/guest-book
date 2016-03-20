<?php 
    use app\models\Messages;
?>
<?= \yii\grid\GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'user_name',
        'email',
        'homepage',
        'text',
        'public_date',
        'IP',
        'browser',
        [
            'attribute' => 'id',
            'header' => 'Действия',
            'value' => function (Messages $model) {
                return $this->render('_actions_cell', ['model' => $model]);
            },
            'contentOptions' => ['class' => 'detail-cell'],
            'format' => 'raw',
        ],
    ],
]); ?>