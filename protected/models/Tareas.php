<?php

Yii::import('application.models._base.BaseTareas');

class Tareas extends BaseTareas
{
    /**
     * @return Tareas
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Tareas|Tareases', $n);
    }

}