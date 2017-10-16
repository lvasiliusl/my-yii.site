<?php
namespace controllers;

use yii\widgets\ListView;
use yii\helpers\Html;
use yii\data\ActiveDataProvider;
use yii\grid\GridView;

$dataProvider = new ActiveDataProvider([ 'query' => $client ]);

echo Html::a('Create New Client', ['/clients/new-client'], ['class' => 'btn btn-primary pull-right']);
?>

<div class="clearfix"></div>
<hr />

<?=
GridView::widget([
    'dataProvider' => $dataProvider,
    'tableOptions' => ['class' => 'table table-striped table-hover'],
    'columns' => [
        ['attribute' => 'id'],
        ['attribute' => 'name'],
        ['attribute' => 'second_name'],
        ['attribute' => 'email'],
        ['attribute' => 'category'],
        [
            'class' => 'yii\grid\ActionColumn',
            'header'=>'Edit/Delete',
            'headerOptions' => ['width' => '50'],
            'template' => '{update} {delete}'
        ]
    ]
]);
?>
