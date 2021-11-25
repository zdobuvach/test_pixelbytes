<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;

use yii\db\ActiveRecord;

use Yii;

class Arsec extends SetPrimaryKey {

    static public function getLast($limit = 10) {
        return Yii::$app->db->createCommand('SELECT A.* FROM (SELECT * FROM arsec order by created DESC limit 500) AS A GROUP BY A.section_id order by created DESC limit ' . $limit)->queryAll();
    }

}
