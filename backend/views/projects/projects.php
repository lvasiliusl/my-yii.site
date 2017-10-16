<?php

use yii\widgets\ListView;
use yii\helpers\Html;
?>

<?php echo Html::a('Create New Project', ['/projects/new-project'], ['class' => 'btn btn-primary pull-right']); ?>
<div class="clearfix"></div>
<hr />

<table class="table table-striped table-hover">
  <tr>
    <td>#</td>
    <td>Name</td>
    <td>Owner</td>
    <td>Date</td>
  </tr>

<?php
echo ListView::widget([
  'dataProvider' => $dataProvider,
  'itemView' => '_list',

  'layout' => "{pager}\n{summary}\n{items}\n{pager}",
  'summary' => 'Показано {count} из {totalCount}',
  'summaryOptions' => [
    'tag' => 'span',
    'class' => 'my-summary'
  ],

  'itemOptions' => [
    'tag' => 'tr',
    'class' => 'projects-item'
  ],

  'emptyText' => '<p>Список пуст</p>',
  'emptyTextOptions' => [
    'tag' => 'p'
  ],

  'pager' => [
    'firstPageLabel' => 'Первая',
    'lastPageLabel' => 'Последняя',
    'nextPageLabel' => 'Следующая',
    'prevPageLabel' => 'Предыдущая',
    'maxButtonCount' => 5
  ]
]);
?>
</table>
