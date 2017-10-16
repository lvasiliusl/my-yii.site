<?php
namespace backend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 *
 */
class Clients extends ActiveRecord
{

  public static function tableName()
  {
    return 'clients';
  }

  public function rules()
  {
    return [
      [['name', 'second_name','email', 'category'], 'required'],
      [['name', 'second_name'], 'string', 'max' => 255],
      [['email'], 'email'],
      [['category'], 'in', 'range' => ['drupal', 'wordpress', 'yii2', 'magento', 'joombla', 'jenkins', 'code igniter']]
    ];
  }

  public function attributeLabels()
  {
    return [
      'id' => 'Client id',
      'name' => 'Client name',
      'second_name' => 'Client second name',
      'email' => 'Client email',
      'category' => 'Client category'
    ];
  }

  public function getProjects()
  {
    return $this->hasMany(Projects::className(), ['owner' => 'id']);
  }
}
