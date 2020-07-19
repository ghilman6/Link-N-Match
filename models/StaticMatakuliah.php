<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "static_matakuliah".
 *
 * @property int $id ID
 * @property string|null $code Kode
 * @property string|null $name Nama
 * @property int|null $sks SKS
 * @property string|null $abbr Singkatan
 * @property int|null $total_student Total Mahasiswa
 *
 * @property RekapPresensi[] $rekapPresensis
 */
class StaticMatakuliah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'static_matakuliah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'sks', 'total_student'], 'integer'],
            [['code'], 'string', 'max' => 10],
            [['name'], 'string', 'max' => 255],
            [['abbr'], 'string', 'max' => 4],
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
            'code' => 'Code',
            'name' => 'Name',
            'sks' => 'Sks',
            'abbr' => 'Abbr',
            'total_student' => 'Total Student',
        ];
    }

    /**
     * Gets query for [[RekapPresensis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRekapPresensis()
    {
        return $this->hasMany(RekapPresensi::className(), ['idmatkul' => 'id']);
    }
}
