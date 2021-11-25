<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Arsec;

class ArsecController extends Controller {

    public function actionIndex() {
        
        /*
         * seems to be working incorrectly
         *  
          $arsec = $query->groupBy('section_id')
          ->orderBy('created desc')
          ->offset($pagination->offset)
          ->limit($pagination->limit)
          ->all();
         * */

        /* Crooked but works */
        $arsec = Yii::$app->db->createCommand('SELECT A.* FROM (SELECT * FROM arsec order by created DESC limit 500) AS A GROUP BY A.section_id order by created DESC limit 10')->queryAll();

        return $this->render('index', [
                    'arsec' => $arsec                    
        ]);
    }

}
