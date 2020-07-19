<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "static_mahasiswa".
 *
 * @property int $id NIM
 * @property string $name Nama
 * @property int $prodi_id Prodi
 * @property string|null $rombel Rombongan Belajar
 *
 * @property RekapKhs[] $rekapKhs
 * @property RekapTagihan[] $rekapTagihans
 */
class StaticMahasiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'static_mahasiswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'prodi_id'], 'required'],
            [['id', 'prodi_id'], 'integer'],
            [['name', 'rombel'], 'string', 'max' => 255],
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
            'prodi_id' => 'Prodi ID',
            'rombel' => 'Rombel',
        ];
    }

    /**
     * Gets query for [[RekapKhs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRekapKhs()
    {
        return $this->hasMany(RekapKhs::className(), ['nim' => 'id']);
    }

    /**
     * Gets query for [[RekapTagihans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRekapTagihans()
    {
        return $this->hasMany(RekapTagihan::className(), ['nim' => 'id']);
    }
}
