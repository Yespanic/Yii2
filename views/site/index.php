<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Мой первый блог';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articles-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Панель администратора', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div>
        <?php foreach($articles as $article): ?>

                <h3><a href="view.php?id=<?=$article['id']?>"><?=$article['title']?></a></h3>
                <em>Опубликовано: <?=$article['date']?></em>
                <p><?=$article['content']?></p>

        <?php endforeach ?>
    </div>


</div>
