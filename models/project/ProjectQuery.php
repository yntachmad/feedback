<?php

namespace app\models\project;

/**
 * This is the ActiveQuery class for [[\app\models\Project]].
 *
 * @see \app\models\Project
 */
class ProjectQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \app\models\Project[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\Project|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
