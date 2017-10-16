<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>

<td><?= $model->getPrimaryKey(); ?></td>
<td><?= Html::encode($model->header) ?></h2></td>
<td><?= HtmlPurifier::process($model->text) ?></td>
