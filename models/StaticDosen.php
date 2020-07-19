<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "static_dosen".
 *
 * @property int $id
 * @property string $name
 *
 * @property RekapPresensi[] $rekapPresensis
 */
class StaticDosen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'static_dosen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name'], 'required'],
            [['id'], 'integer'],
            [['name'], 'string', 'max' => 255],
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
     * Gets query for [[RekapPresensis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRekapPresensis()
    {
        return $this->hasMany(RekapPresensi::className(), ['iddosen' => 'id']);
    }
}
