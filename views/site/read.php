<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Articles */

// $this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;

?>
<div class="articles-read">


    <h3><?= $article->title?></h3>
    <em>Опубликовано: <?=$article['date']?></em>
    <p><?= $article['content'] ?></p>

</div>
