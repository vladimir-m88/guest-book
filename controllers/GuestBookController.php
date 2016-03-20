<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Messages;
use yii\data\ActiveDataProvider;

class GuestBookController extends Controller {

    /*
     * Метод по умолчанию. Выводит таблицу сообщений.
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => Messages::find(),
            'pagination' => [
                'pagesize' => 15,
            ],
            'sort' => [
                'defaultOrder' => [
                    'public_date' => SORT_DESC,
                ],
                'attributes' => [
                    'user_name' => [
                    ],
                    'email' => [
                    ],
                    'public_date' => [
                    ],
                ],
            ],
        ]);
        return $this->render('index', ['dataProvider' => $dataProvider]);
    }
    
    /*
     * Метод, который добавляет новую запись в таблицу сообщений.
     */
    public function actionCreate() {
        $model = new Messages();
        if ($model->load(Yii::$app->request->post()) && ($model->save())) {
            return $this->redirect(['detail', 'id' => $model->id]);
        }
        return $this->render('create', ['model' => $model]);
    }
    
    /*
     * Метод, который выводит отдельное сообщение.
     */
    public function actionDetail($id) {
        $model = Messages::findOne($id);
        return $this->render('detail', ['model' => $model]);
    }

}