<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Articles */

$this->title = 'Мой первый блог';
// $this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="articles-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <p><?= Html::a('Панель администратора', ['create'], ['class' => 'btn btn-success']) ?></p>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
