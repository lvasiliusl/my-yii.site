<?php
namespace backend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 *
 */
class Projects extends ActiveRecord
{

  public static function tableName()
  {
    return 'projects';
  }

  public function rules()
  {
    return [
      [['name', 'date', 'owner'], 'required'],
      [['name'], 'string'],
      [['date'], 'date'],
      [['owner'], 'exist', 'targetClass' => 'backend\models\Clients', 'targetAttribute' => 'id']
    ];
  }

  public function attributeLabels()
  {
    return [
      'id' => 'Project id',
      'name' => 'Project name',
      'date' => 'Project creation date',
      'owner' => 'Client project owner id'
    ];
  }

  public function getClient()
  {
    return $this->hasOne(Clients::className(), ['id' => 'owner']);
  }
}
