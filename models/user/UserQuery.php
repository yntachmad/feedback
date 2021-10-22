<?php

namespace app\models\user;

/**
 * This is the ActiveQuery class for [[\app\models\User]].
 *
 * @see \app\models\User
 */
class UserQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \app\models\User[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\User|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }

    public function latest()
    {
        return $this->orderBy(['created_at' => SORT_DESC]);
    }

    public function activestatus()
    {
        return $this->andWhere(['status' =>'Aktif']);
    }

    public function byKeyword($keyword)
    {
        return $this->andWhere("MATCH (full_name,username,level) AGAINST (:keyword)",['keyword' => $keyword]);
    }
}
