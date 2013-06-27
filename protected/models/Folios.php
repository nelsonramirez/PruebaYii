<?php

Yii::import('application.models._base.BaseFolios');

class Folios extends BaseFolios
{
    /**
     * @return Folios
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Folios|Folioses', $n);
    }

}