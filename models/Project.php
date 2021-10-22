<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property int $project_id
 * @property string $project_nama
 * @property string|null $alias
 * @property string|null $project_kategori
 * @property int|null $project_lokasi
 * @property string|null $Status
 *
 * @property Fam[] $fams
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_nama'], 'required'],
            [['project_kategori', 'Status'], 'string'],
            [['project_lokasi'], 'integer'],
            [['project_nama'], 'string', 'max' => 100],
            [['alias'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'project_id' => 'Project ID',
            'project_nama' => 'Project Nama',
            'alias' => 'Alias',
            'project_kategori' => 'Project Kategori',
            'project_lokasi' => 'Project Lokasi',
            'Status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Fams]].
     *
     * @return \yii\db\ActiveQuery|\app\models\project\FamQuery
     */
    public function getFams()
    {
        return $this->hasMany(Fam::className(), ['project_id' => 'project_id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\project\ProjectQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\project\ProjectQuery(get_called_class());
    }
}
