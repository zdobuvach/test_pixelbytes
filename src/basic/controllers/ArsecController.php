<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Arsec;

class ArsecController extends Controller {

    public function actionIndex() {
        $query = Arsec::find();

        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);

        $arsec = $query->groupBy('section_name')
                ->orderBy('created desc')
                ->offset($pagination->offset)
                ->limit($pagination->limit)
                ->all();

        return $this->render('index', [
                    'arsec' => $arsec,
                    'pagination' => $pagination,
        ]);
    }

}
