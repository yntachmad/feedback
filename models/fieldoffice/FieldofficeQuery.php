<?php

namespace app\models\fieldoffice;

/**
 * This is the ActiveQuery class for [[\app\models\Fieldoffice]].
 *
 * @see \app\models\Fieldoffice
 */
class FieldofficeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \app\models\Fieldoffice[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\Fieldoffice|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
