<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "helper_status".
 *
 * @property int $id
 * @property string $name
 *
 * @property RekapTagihan[] $rekapTagihans
 */
class HelperStatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'helper_status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name'], 'required'],
            [['id'], 'integer'],
            [['name'], 'string', 'max' => 20],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[RekapTagihans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRekapTagihans()
    {
        return $this->hasMany(RekapTagihan::className(), ['idstatus' => 'id']);
    }
}
