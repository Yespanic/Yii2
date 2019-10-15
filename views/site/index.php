<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Мой первый блог';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articles-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p><?= Html::a('Панель администратора', ['create'], ['class' => 'btn btn-success']) ?></p>

    <div>
        <?php foreach($articles as $article): ?>
           <h3> <?= Html::a($article['title'], ['read', 'id'=>$article['id']]) ?> </h3>
                <em>Опубликовано: <?=$article['date']?></em>
                <p><?=mb_substr($article['content'], 0, 500)?></p>

        <?php endforeach ?>
    </div>


</div>
