<?php

use yii\widgets\ListView;
?>

<table class="table table-striped table-hover">
  <tr>
    <td>#</td>
    <td>Name</td>
    <td>Second Name</td>
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
    'class' => 'news-item',
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
    'maxButtonCount' => 5,
  ],
]);
?>
</table>
