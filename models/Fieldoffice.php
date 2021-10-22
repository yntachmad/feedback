<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fieldoffice".
 *
 * @property int $office_id
 * @property string|null $address
 * @property string $provinsi
 * @property string|null $kota
 * @property string|null $pic
 * @property string|null $status
 */
class Fieldoffice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fieldoffice';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['provinsi'], 'required'],
            [['status'], 'string'],
            [['address', 'provinsi', 'kota'], 'string', 'max' => 100],
            [['pic'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'office_id' => 'Office ID',
            'address' => 'Address',
            'provinsi' => 'Provinsi',
            'kota' => 'Kota',
            'pic' => 'Pic',
            'status' => 'Status',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \app\models\fieldoffice\FieldofficeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\fieldoffice\FieldofficeQuery(get_called_class());
    }
}
