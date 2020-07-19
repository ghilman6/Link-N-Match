<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rekap_presensi".
 *
 * @property int $id
 * @property int $nim
 * @property int $kehadiran
 * @property int $idmatkul
 * @property int $iddosen
 *
 * @property StaticDosen $iddosen0
 * @property StaticMatakuliah $idmatkul0
 * @property StaticMahasiswa $nim0
 */
class RekapPresensi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rekap_presensi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'kehadiran', 'idmatkul', 'iddosen'], 'required'],
            [['nim', 'kehadiran', 'idmatkul', 'iddosen'], 'integer'],
            [['iddosen'], 'exist', 'skipOnError' => true, 'targetClass' => StaticDosen::className(), 'targetAttribute' => ['iddosen' => 'id']],
            [['idmatkul'], 'exist', 'skipOnError' => true, 'targetClass' => StaticMatakuliah::className(), 'targetAttribute' => ['idmatkul' => 'id']],
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
            'kehadiran' => 'Kehadiran',
            'idmatkul' => 'Idmatkul',
            'iddosen' => 'Iddosen',
        ];
    }

    /**
     * Gets query for [[Iddosen0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIddosen0()
    {
        return $this->hasOne(StaticDosen::className(), ['id' => 'iddosen']);
    }

    /**
     * Gets query for [[Idmatkul0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdmatkul0()
    {
        return $this->hasOne(StaticMatakuliah::className(), ['id' => 'idmatkul']);
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
