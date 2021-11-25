<?php

namespace app\controllers;

use yii\web\Controller;
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
        $arsec = Arsec::getLast();

        return $this->render('index', [
                    'arsec' => $arsec                    
        ]);
    }

}
