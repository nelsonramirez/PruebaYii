<?php

Yii::import('application.models._base.BaseExperiencias');

class Experiencias extends BaseExperiencias
{
    /**
     * @return Experiencias
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Experiencias|Experienciases', $n);
    }

}