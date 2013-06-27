<?php

Yii::import('application.models._base.BaseCiudades');

class Ciudades extends BaseCiudades
{
    /**
     * @return Ciudades
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Ciudades|Ciudades', $n);
    }

}