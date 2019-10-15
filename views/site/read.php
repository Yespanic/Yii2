<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Articles */

$this->title = 'Мой первый блог';
// $this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;

?>
<div class="articles-read">

    <h1><?= Html::a($this->title, ['index']) ?></h1>
    <p><?= Html::a('Панель администратора', ['create'], ['class' => 'btn btn-success']) ?></p>

    <h3><?= $article->title?></h3>
    <em>Опубликовано: <?=$article['date']?></em>
    <p><?= $article['content'] ?></p>

</div>
