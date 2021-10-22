<?php

namespace app\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "user".
 *
 * @property int $user_id
 * @property string $full_name
 * @property string $username
 * @property string $email
 * @property string $password_hash
 * @property string|null $password_reset_token
 * @property int|null $status
 * @property string|null $verification_token
 * @property string|null $auth_key
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property string|null $level
 * @property string|null $jabatan
 * @property string|null $lokasi
 * @property int|null $user_project_id
 * @property string|null $project
 *
 * @property Fam[] $fams
 * @property Fam[] $fams0
 * @property Fam[] $fams1
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::class,
            // [
            //     'class'=> BlameableBehavior::class,
            //     'updatedByAttribute'=> false,
            // ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['full_name', 'username', 'email', 'password_hash'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            ['email', 'email'],
            ['project', 'safe'],
            ['password_hash', 'string', 'min' => 6, 'max' => 256, 'message' => '{attribute} should be at least 6 symbols'],       
            [['email', 'username' ], 'unique', 'targetClass' => '\app\models\User', 'message'=>'{attribute} already exist, Please try another one.'],  
            [['level'], 'string'],
            [['full_name','status','password_reset_token', 'verification_token'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['jabatan'], 'string', 'max' => 200],
            [['lokasi'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'full_name' => 'Full Name',
            'username' => 'Username',
            'email' => 'Email',
            'password_hash' => 'Password',
            'password_reset_token' => 'Password Reset Token',
            'status' => 'Status',
            'verification_token' => 'Verification Token',
            'auth_key' => 'Auth Key',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'level' => 'Level',
            'jabatan' => 'Jabatan',
            'lokasi' => 'Lokasi',            
            'project' => 'Project',
        ];
    }

    /**
     * Gets query for [[Fams]].
     *
     * @return \yii\db\ActiveQuery|\app\models\user\FamQuery
     */
    public function getFams()
    {
        return $this->hasMany(Fam::className(), ['created_at' => 'user_id']);
    }

    /**
     * Gets query for [[Fams0]].
     *
     * @return \yii\db\ActiveQuery|\app\models\user\FamQuery
     */
    public function getFams0()
    {
        return $this->hasMany(Fam::className(), ['updated_at' => 'user_id']);
    }

    /**
     * Gets query for [[Fams1]].
     *
     * @return \yii\db\ActiveQuery|\app\models\user\FamQuery
     */
    public function getFams1()
    {
        return $this->hasMany(Fam::className(), ['responded_user' => 'user_id']);
    }

    public function getOffice()
    {
        return $this->hasMany(FieldOffice::className(), ['lokasi' => 'office_id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\user\UserQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\user\UserQuery(get_called_class());
    }

    
}
