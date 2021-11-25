<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\commands;

use yii\console\Controller;
use yii\console\ExitCode;

class CsvimportController extends Controller {

    public $message;
    public $count;
    public $modelArticle = 'app\models\Article';
    public $modelSection = 'app\models\Section';

    public function actionIndex($message = 'hello world') {
        echo 'sddsc ';
        echo $message . "\n";

        return ExitCode::OK;
    }

    public function actionImport($message = 'import', $filename = "import.csv") {

        echo $message . "\n";

        $row = 0;
        ini_set("auto_detect_line_endings", true);
        if (($handle = fopen($filename, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 2000, ",")) !== FALSE) {
                $num = count($data);

                echo "Cтрокa $row ";
                var_dump($data);                
                if ($row) {
                    $section = new $this->modelSection();
                    if (!empty($data[0])) {
                        if (!$section::findOne($data[1])) {
                            $section->id = $data[1];
                            $section->name = $data[2];
                            $section->save();
                        }
                        unset($section);
                        $article = new $this->modelArticle();
                        $article->id = $data[0];
                        $article->section_id = $data[1];
                        $article->title = $data[3];
                        $dateTime = date_create_from_format('d/m/y H:i', $data[4]);
                        var_dump($dateTime->format('Y-m-d H:i:s'));
                        //die();
                        $article->created = $dateTime->format('Y-m-d H:i:s');
                        $article->save();
                        unset($article);
                    }
                }
                $row++;
            }
            fclose($handle);
        }

        return ExitCode::OK;
    }

}
