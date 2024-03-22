<?php

use pendalf89\filemanager\assets\FilemanagerAsset;
use pendalf89\filemanager\Module;
use pendalf89\filemanager\models\Tag;
use yii\helpers\ArrayHelper;
use yii\widgets\ListView;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap5\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel pendalf89\filemanager\models\MediafileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->params['moduleBundle'] = FilemanagerAsset::register($this);
?>

<header id="header"><span class="fas fa-picture"></span> <?= Module::t('main', 'File manager') ?></header>

<div id="filemanager" data-url-info="<?= Url::to(['file/info']) ?>">
    <div class="dashboard">
        <p><?= Html::a('<span class="fas fa-upload fa-solid"></span> ' . Module::t('main', 'Upload manager'),
                ['file/uploadmanager'], ['class' => 'btn btn-primary']) ?></p>
    </div>
    <div class="flex">
        <div class="column left">
            <?php $searchForm = $this->render('_search_form', ['model' => $model]) ?>
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'layout' => $searchForm . '<div class="items">{items}</div>{pager}',
                'itemOptions' => ['class' => 'item'],
                'itemView' => function ($model, $key, $index, $widget) {
                            return Html::a(
                                Html::img($model->getDefaultThumbUrl($this->params['moduleBundle']->baseUrl))
                                . '<span class="checked fas fa-check fa-solid"></span>',
                                '#mediafile',
                                ['data-key' => $key]
                            );
                    },
            ]) ?>
        </div>
        <div class="column right">

            <div id="fileinfo"></div>
        </div>
    </div>
</div>
