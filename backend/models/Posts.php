<?php
namespace backend\models;

use Yii;
use yii\db\ActiveRecord;


/**
 *
 */
class Posts extends ActiveRecord
{

  public static function tableName()
  {
    return 'posts';
  }

  public function rules()
  {
    return [
      [['visibility', 'date', 'header', 'text'], 'required'],
      [['visibility', 'date'], 'integer'],
      [['text'], 'string'],
      [['header'], 'string', 'max' => 255]
    ];
  }

  public function attributeLabels()
  {
    return [
      'id' => 'Id',
      'visibility' => 'Visibility',
      'date' => 'Date',
      'header' => 'Header',
      'text' => 'Text'
    ];
  }
}
