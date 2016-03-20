<?php 
    use app\models\Messages;
?>
<?= \yii\grid\GridView::widget([
    'dataProvider' => $dataProvider,
    'layout' => "{items}{pager}",
    'columns' => [
        'id',
        'user_name',
        'email',
        'homepage',
        [
            'attribute' => 'text',
            'value' => function (Messages $model) {
                return $this->render('_text_cell', ['model' => $model]);
            },
            'format' => 'raw',
        ],
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