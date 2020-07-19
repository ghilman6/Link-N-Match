<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rekap_khs".
 *
 * @property int $id
 * @property int $nim
 * @property int $ips
 * @property int $ipk
 *
 * @property StaticMahasiswa $nim0
 */
class RekapKhs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rekap_khs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'ips', 'ipk'], 'required'],
            [['nim', 'ips', 'ipk'], 'integer'],
            [['nim'], 'exist', 'skipOnError' => true, 'targetClass' => StaticMahasiswa::className(), 'targetAttribute' => ['nim' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'ips' => 'Ips',
            'ipk' => 'Ipk',
        ];
    }

    /**
     * Gets query for [[Nim0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNim0()
    {
        return $this->hasOne(StaticMahasiswa::className(), ['id' => 'nim']);
    }
}
