<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Messages;

class GuestBookController extends Controller {
    
    public function actionIndex() {
        echo 'GuestBookController actionIndex';
    }
    
    /*
     * Метод, который добавляет новую запись в таблицу сообщений.
     */
    public function actionCreate() {
        // 1. Create a new Room instance;
        $model = new Messages();
//        if (isset($_POST['Messages'])) 
//        {
//            echo '<pre>';
//            print_r($_POST['Messages']);
//            echo '</pre>';
//        }
        // 2. Check if $_POST['Room'] contains data and save model;
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