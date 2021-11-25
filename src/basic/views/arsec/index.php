<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Articles';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>
<table class="table">
    <thead>
        <tr>
            <th scope='col'>id</th>
            <th scope='col'>section_id</th>
            <th scope='col'>section_name</th>
            <th scope='col'>title created</th>   
        </tr>    
    </thead>
    <tbody>       
            <?php foreach ($arsec as $as): ?>
            <tr>
                <th scope='row'>                    
                <?= Html::encode("{$as['id']}") ?>
                </th>
                        <td>
                            <?= Html::encode("{$as['section_id']}") ?>
                            </td>
        <td>
            <?= Html::encode("{$as['section_name']}") ?>
        </td>
        <td>
            <?= Html::encode("{$as['title']}") ?>
        </td>
        <td>
            <?= Html::encode("{$as['created']}") ?>
        </td>
                       
            </tr>
<?php endforeach; ?>
    </tbody>
</table>