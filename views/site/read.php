<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Articles */

$this->title = 'Мой первый блог';
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="articles-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <h3><?= $article['title'] ?></h3>
    <em>Опубликовано: <?=$article['date']?></em>
    <p><?= $article['content'] ?></p>

</div>
