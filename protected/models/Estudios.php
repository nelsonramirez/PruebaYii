<?php

Yii::import('application.models._base.BaseEstudios');

class Estudios extends BaseEstudios
{
    /**
     * @return Estudios
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Estudios|Estudioses', $n);
    }

}