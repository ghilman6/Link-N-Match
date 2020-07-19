<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "helper_prodi".
 *
 * @property int $id
 * @property string $name
 * @property string|null $abbr
 */
class HelperProdi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'helper_prodi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name'], 'required'],
            [['id'], 'integer'],
            [['name', 'abbr'], 'string', 'max' => 255],
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
            'abbr' => 'Abbr',
        ];
    }
}
