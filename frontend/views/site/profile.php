<?php
use yii\helpers\Html;

$this->title = 'Profile';
?>
<div class="wrap">
  <h1>This is the user profile page</h1><br />
  <h2>Your name: <strong><?= '"'.Yii::$app->user->identity->username.'"' ?></strong></h2>
  <h2>Your email: <strong><?= '"'.Yii::$app->user->identity->email.'"' ?></strong></h2>
</div>
