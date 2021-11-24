<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Articles</h1>
<ul>
<li>
    <strong><i><?= Html::encode("id section_id section_name title created") ?></i></strong>       
    </li>    
<?php foreach ($arsec as $as): ?>
    <li>
        <?= Html::encode("{$as->id} {$as->section_id} {$as->section_name}  {$as->title}  {$as->created}") ?>        
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>