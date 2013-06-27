<?php

Yii::import('application.models._base.BaseUsuarios');

class Usuarios extends BaseUsuarios
{
    /**
     * @return Usuarios
     */
    
    public static $generos = array(' '=>' ', 'M' => 'Masculino', 'F' => 'Femenino');  
    
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Usuarios|Usuarioses', $n);
    }
    
    public static function getGeneros($key = null) {
        if($key != null)
            return self::$generos[$key];
        
        return self::$generos;
    }

}